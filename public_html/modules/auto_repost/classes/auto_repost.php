<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class auto_repost {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."repost_settings";

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		global $crt_lang;
		$lc_cache = new cache();
		if($overwrite || !$rp_settings = $lc_cache->readCache("mod_rp_settings")) {

			global $db;
			$rp_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$rp_settings['groups_array']=array();
			if($rp_settings['groups']!='0') $rp_settings['groups_array'] = explode(",", $rp_settings['groups']);
			$rp_settings['price_formatted'] = format_price($rp_settings['price']);
			$lc_cache->writeCache("mod_rp_settings", $rp_settings);

		}
		return $rp_settings;

	}


	function saveSettings() {

		global $config_demo, $lng;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $languages;
		$str_update = "";

		if(isset($_POST['price']) && is_numeric($_POST['price'])) $this->clean['price'] = $_POST['price']; else $this->clean['price'] =0;
		if(isset($_POST['choose_group']) && $_POST['choose_group']=="choose")
		{
			$groups='';
			$i=0;
			while (isset($_POST['groups'][$i])){
				$group=escape($_POST['groups'][$i]);
				if($i) $groups.=',';
				$groups.=$group;
				$i++;
			}
		} else $groups='0';

		$db->query("update `".$this->settings_table."` set `groups`= '{$groups}', `price`= '{$this->clean['price']}'");

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_rp_settings");

		return 1;
	}

	function initTemplatesVals($smarty) {

		global $smarty;
		$rp_settings = $this->getSettings();
		$smarty->assign("rp_settings", $rp_settings);

		global $crt_lang, $config_abs_path, $lng_rp;
		$lang_file = $config_abs_path."/modules/auto_repost/lang/$crt_lang.php";
		if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/auto_repost/lang/eng.php";
		require_once $lang_file;
		
		global $lng_repost;
		$smarty->assign("lng_repost",$lng_repost);
		
		$group_allowed = 0;
		global $logged_in, $usr_sett;
		if($logged_in) {
			if($rp_settings['groups']==0 || in_array($usr_sett['group'], $rp_settings['groups_array'])) $group_allowed=1;
		}
		$smarty->assign("group_allowed",$group_allowed);
		
	}


	function getError() {
	
		return $this->error;

	}

	function addError($str) {

		$this->error.=	$str;

	}

	function setError($str) {

		$this->error=$str;

	}

	function getTmp() {
	
		return $this->tmp;

	}

	// when user form is posted
	function addAutoRepost($listing_id, $no_reposts, $repost_period, $repost_period_um, $starting='', $ending='') {
	
		global $db, $config_table_prefix;
		$rp_settings = $this->getSettings();
		$timestamp = date("Y-m-d H:i:s");

		$db->query("delete from ".$config_table_prefix."reposts where `listing_id`='$listing_id'");
		$db->query("delete from ".$config_table_prefix."actions where `object_id`='$listing_id' and type='auto_repost'");
		$db->query("insert into ".$config_table_prefix."reposts set `listing_id`='$listing_id', `no_reposts`='$no_reposts', `repost_period`='$repost_period', `repost_period_um`='$repost_period_um', `starting_hour`='$starting', `ending_hour`='$ending', `remaining_reposts`='$no_reposts'");

		return 1;
	
	}
	
	function periodic() {
	
		global $db, $config_table_prefix;
		$timestamp = date("Y-m-d H:i:s");
		$sql = "select * from `".$config_table_prefix."periodic_tasks` where `time`<='$timestamp' and `type` = 'auto_repost'";
		$res = $db->query($sql);
		while($task = $db->fetchAssocRes($res) ) {
			
			$this->repostAd($task['id'], $task['object_id'], $task['listing_id']);
			
		}
	
	}
	
	function updateAd($listing_id){
	
		global $db;
		$timestamp = date("Y-m-d H:i:s");
		$db->query("update ".TABLE_ADS." set `date_updated`='$timestamp' where id='$listing_id'");
	}
	
	function repostAd($task_id, $repost_id, $listing_id){
	
		global $db, $config_table_prefix, $config_abs_path;
		require_once $config_abs_path."/classes/users.php";
		$timestamp = date("Y-m-d H:i:s");
		$db->query("update ".TABLE_ADS." set `date_updated`='$timestamp' where id='$listing_id'");
		
		// decrement remaining ads
		$db->query("update `".$config_table_prefix."reposts` set `last_reposted`='$timestamp', remaining_reposts = remaining_reposts-1 where id='$repost_id'");
		
		// if no_reposts = 0 remove repost
		$remaining_reposts = $db->fetchRow("select `remaining_reposts` from `".$config_table_prefix."reposts` where `id`='$repost_id'");
		if($remaining_reposts<=0) $db->query("delete from `".$config_table_prefix."reposts` where `id`='$repost_id'");
		
		// remove periodic task
		$db->query("delete from `".$config_table_prefix."periodic_tasks` where id='$task_id'");
	
		// send email to user
		$user_details = listings::getUserDetails($listing_id);
		$details_link = listings::makeDetailsLink($listing_id);
		$title = cleanStr(listings::getTitle($listing_id));
		
		// send mail to user
		global $config_abs_path;
		require_once $config_abs_path."/classes/mails.php";
		require_once $config_abs_path."/classes/mail_templates.php";

		$mail2send=new mails();
		$mail2send->init($user_details['email'], $user_details['name']);
		$mail2send->setMailTemplate("auto_repost");

		$array_subject = array("ad_id"=>$listing_id, "title"=>$title);

		$array_message = array("ad_id"=>$listing_id, "contact_name"=>$user_details['name'], "details_link"=>$details_link, "title"=>$title);

		$mail2send->composeAndSend("", $array_message, $array_subject);
	
	}

	function addPeriodicTasks($repost_id) {
	
		global $db, $config_table_prefix;
		$repost = $db->fetchAssoc("select * from `".$config_table_prefix."reposts` where id='$repost_id'");
	
		$no_reposts = $repost['no_reposts'];
		$repost_period = $repost['repost_period']; // no hours / days
		$repost_period_um = $repost['repost_period_um'];
		$starting = $repost['starting_hour'];
		$ending = $repost['ending_hour'];
		$user_id = listings::getUser($repost['listing_id']);
	
		$array_times = $this->makeAutoRepostTimes($no_reposts, $repost_period, $repost_period_um, $starting, $ending);
		//_print_r($repost);
		//_print_r($array_times);
		foreach ($array_times as $time) {
			if(!$time['time']) { // repost now!
				$task_id = 0; 
				$this->repostAd($task_id, $repost_id, $repost['listing_id']);
			}
			else 
				$db->query("insert into `".$config_table_prefix."periodic_tasks` set `type`='auto_repost', `object_id`='$repost_id', `listing_id`='{$repost['listing_id']}', `user_id`='$user_id', `time`='".$time['date']."'");
		}
	
	}
	
	function makeAutoRepostTimes($no_reposts, $repost_period, $repost_period_um, $starting='', $ending='') {

		$array_times = array();
		// if $starting is not set then start the next hour :00 
		$time = -1;
		global $appearance_settings;
		$date_format=$appearance_settings["date_format"];

		for ($i = 0; $i<$no_reposts; $i++) {
	
			// first repost will be done at the current time, without the scheduler
			// in that case $now is set to 1 
			$now = 0;
			
	    	if($repost_period_um=='h') $str= " hours";
	    	else $str=" days"; 

			if(is_object($time)) 
				$time = date_add($time, date_interval_create_from_date_string($repost_period.$str));
			else { 
				
				$now = 1;
				
				// first time, created from the current time
				$time_now = date_create(date('Y-m-d H:i:s'));
				$time = date_create(date('Y-m-d H:00:00'));
				
				$diff = $time_now->diff($time);

				if($repost_period_um=='h') {

					// if more than 30 min have passed from the current hour, consider as starting point for the next repost the next hour
					// so if the reposts will be done hourly, then the next one will be made actually after 1 hour + (60-$diff->i)
					if($diff->i>=30) {
						$time = date_add($time, date_interval_create_from_date_string("1 hours"));
					}
					
				} else { // repost period is day
					
				} //  end if($repost_period_um=='h' / 'd')
			} // end if(is_object($time))
			if($starting!=-1) {
			
				$crt_hour = date_format($time, 'H');
				if($starting<$ending) {	
					if($crt_hour<$starting || $crt_hour>$ending) {
				
						$time_str = date_format($time, 'Y')."-".date_format($time, 'm')."-".date_format($time, 'd')." ".$starting.":00:00";

						$time = date_create($time_str);

						// start on starting hour next day
						if($crt_hour>$ending) $time = date_add($time, date_interval_create_from_date_string("1 days"));
							
						// reset the $now value	
						$now = 0;
					}
				} // starting<ending
				else {
	    	
					if($crt_hour<$starting && $crt_hour>$ending) {
						$time_str = date_format($time, 'Y')."-".date_format($time, 'm')."-".date_format($time, 'd')." ".$starting.":00:00";
						$time = date_create($time_str);

						// reset the $now value	
						$now = 0;
					}
				} // end if starting <ending	
			}
			if($now) {
				$array_times[$i] = array ("time"=>"", "date"=> "", "date_formatted"=>"");
			}	
			else 
				$array_times[$i]  = array ("time"=>$time, "date"=> date_format($time, 'Y-m-d H:i:s'), "date_formatted"=>date_format($time, 'l, j M H:i'));
		}

		return $array_times;
	}
	
	function getAutoRepostTimesFormatted($no_reposts, $repost_period, $repost_period_um, $starting='', $ending='') {
	
		$array_times = $this->makeAutoRepostTimes($no_reposts, $repost_period, $repost_period_um, $starting, $ending);
		return array_column($array_times, "date_formatted");
	
	}
	
	
	function Delete($id) {
	
		global $db, $config_table_prefix;
		$db->query("delete from `".$config_table_prefix."reposts` where id='$id'");
		$db->query("delete from `".$config_table_prefix."periodic_tasks` where object_id='$id'");
	
	}

	function Enable($id) {
	
		global $db, $config_table_prefix;
		$db->query("update `".$config_table_prefix."reposts` set `active`=1 where id='$id'");
		$this->addPeriodicTasks($id);
		$listing_id = $db->fetchRow("select `listing_id` from `".$config_table_prefix."reposts` where id='$id'");
		$db->query("update ".TABLE_ACTIONS." set `pending`=0 where `type`='auto_repost' and `object_id`='$listing_id'");
		
	}
	
	function enableForListing($listing_id) {
		
		global $db;
		$db->query("update ".TABLE_ACTIONS." set `pending`=0 where `type`='auto_repost' and `object_id`='$listing_id'");
		$repost_id = $this->listingHasRepost($listing_id);
		$this->Enable($repost_id);
		
	}

	function Disable($id) {
	
		global $db, $config_table_prefix;
		$db->query("update `".$config_table_prefix."reposts` set `active`=1 where id='$id'");
		$db->query("delete from `".$config_table_prefix."periodic_tasks` where object_id='$id'");
	
	}

	function getAll($page, $no_per_page) {
	
		global $db;

		global $appearance_settings, $config_live_site, $seo_settings, $config_table_prefix;
		//$date_format=$appearance_settings["date_format"];
		$date_format='%W, %e %M %H:%i';

		$start=($page-1)*$no_per_page;
		$result=$db->fetchAssocList("select *, date_format(`last_reposted`,'$date_format') as `reposted` from `".$config_table_prefix."reposts` order by `id` desc limit $start, $no_per_page");

		$i=0;
		$array=array();
		foreach($result as $row) {
			$array[$i]=$row;
			$array[$i]['listing_title'] = listings::getTitle($row['listing_id']);
			
			if($seo_settings['enable_mod_rewrite']) {
				$seo = new seo();
				$array[$i]['listing_url']=$seo->makeDetailsLink($row['listing_id'], $array[$i]['listing_title']);
			}
			else $array[$i]['listing_url']=$config_live_site.'/details.php?id='.$row['listing_id'];
			
			$user_details = listings::getUserDetails($row['listing_id']);
			$array[$i]['email'] = $user_details['email'];
			$array[$i]['name'] = $user_details['name'];
			$array[$i]['username'] = $user_details['username'];
			
			$array[$i]['starting_hour_formatted'] = $array[$i]['ending_hour_formatted'] = '';
			if($row['starting_hour']!=-1) $array[$i]['starting_hour_formatted'] = $this->format_hour($row['starting_hour']);
			if($row['ending_hour']!=-1) $array[$i]['ending_hour_formatted'] = $this->format_hour($row['ending_hour']);
			
			$array[$i]['tasks'] = $this->getTasks($row['id']);
			$array[$i]['no_tasks'] = count($array[$i]['tasks']);
			$array[$i]['tasks_str'] = implode("<br>", $array[$i]['tasks']);
			
			$array[$i]['pending'] = $this->getPendingRepostForListing($row['listing_id']);
			
			$i++;
		}
		//_print_r($array);
		return $array;
	}

	function format_hour($hour) {
	
		$ext_str = "&nbsp;AM";
		if($hour>12) { $hour-=12; $ext_str = "&nbsp;PM"; }
		return $hour.$ext_str;
	}
	
	function getNo() {
	
		global $db, $config_table_prefix;
		$no = $db->fetchRow("select count(*) from `".$config_table_prefix."reposts`");
		return $no;
	
	}
	
	function getTasks($repost_id) {
	
		global $db, $config_table_prefix;
		global $appearance_settings;
		$date_format='%W, %e %M %H:%i';//$appearance_settings["date_format_long"];
		$tasks = $db->fetchRowList("select date_format(`time`,'$date_format') as t from ".$config_table_prefix."periodic_tasks where `type`='auto_repost' and `object_id` = $repost_id");
		return $tasks;
	
	}

	function listingHasRepost($listing_id, $active=0) {
	
		global $db, $config_table_prefix;

		$active_str='';
		if($active) $active_str=" and `active`=1";

		$repost=$db->fetchRow("select `id` from `".$config_table_prefix."reposts` where `listing_id`='$listing_id'".$active_str);
		
		return $repost;
	
	}
	
	function getRepostForListing($listing_id) {
	
		global $db;

		global $appearance_settings, $config_live_site, $config_table_prefix;
		$date_format=$appearance_settings["date_format_long"];

		$active_str=" and `active`=1";
		$result=$db->fetchAssoc("select *, date_format(`last_reposted`,'$date_format') as `reposted` from `".$config_table_prefix."reposts` where `listing_id`='$listing_id'".$active_str);
		
		if(!$result) return 0;
		$result['starting_hour_formatted'] = $result['ending_hour_formatted'] = '';
		if($result['starting_hour']!=-1) $result['starting_hour_formatted'] = $this->format_hour($result['starting_hour']);
		if($result['ending_hour']!=-1) $result['ending_hour_formatted'] = $this->format_hour($result['ending_hour']);
		$result['tasks'] = $this->getTasks($result['id']);
		$result['no_tasks'] = count($result['tasks']);
		$result['tasks_str'] = implode("<br>", $result['tasks']);
		return $result;
	
	}
	function getPendingRepostForListing($listing_id) {
		
		global $db;
		$pending_repost = $db->fetchRow("select count(*) from ".TABLE_ACTIONS." where type like 'auto_repost' and `object_id`='$listing_id' and `pending`=1");
		return $pending_repost;
		
	}
}
?>
