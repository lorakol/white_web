<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class ratings {

	var $table;
	var $settings_table;

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."ratings";
		$this->settings_table = $config_table_prefix."ratings_settings";
		$this->error = array();
		$this->info = '';

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered
		global $crt_lang;
		$lc_cache = new cache();
		if($overwrite || !$rt_settings = $lc_cache->readCache("mod_ratings_settings", $crt_lang)) {

			global $db;
			$rt_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$rt_settings['array_allowed_html'] = explode(",", $rt_settings['allowed_html']);
			$rt_settings['ar_array_allowed_html'] = explode(",", $rt_settings['ar_allowed_html']);
			$rt_settings['groups_array'] = explode(",", $rt_settings['groups']);
			$lc_cache->writeCache("mod_ratings_settings", $rt_settings, $crt_lang);

		}
		return $rt_settings;

	}

	function initTemplatesVals($smarty) {

		//$ratings_settings = $this->getSettings();
		//$smarty->assign("ratings_settings", $ratings_settings);

	}

	function deleteListing($id) {

		global $db;
		$db->query("delete from ".$this->table." where listing_id = $id");
		return 1;

	}

	function getRating($id) {

		global $db;
		$result=$db->fetchAssoc('select * from '.$this->table.' where `id`="'.$id.'"');
		return $result;

	}

	function getNo() {

		global $db;
		$no=$db->fetchRow('select count(*) from '.$this->table);
		return $no;

	}

	function getNoReviews($type='user') {

		global $db, $config_table_prefix;
		if($type=="user") $rtable = 'user_ratings';
		else $rtable = 'ratings';
		$no=$db->fetchRow("select count(*) from ".$config_table_prefix.$rtable);
		return $no;

	}

	function getNoActiveReviews($oid, $type='user') {

		global $db, $config_table_prefix;
		if($type=="user") {
			$rtable = 'user_ratings';
			$fid = "user_id";
		}
		else {
			$rtable = 'ratings';
			$fid = "ad_id";
		}
		$no=$db->fetchRow("select count(*) from ".$config_table_prefix.$rtable." where `$fid`='$oid' and `active`=1");
		return $no;

	}

	function getVoted($id, $type='ad') {

		global $config_table_prefix;
		$ip = getRemoteIp();
		global $db;

		$ratings_settings = $this->getSettings();

		if($ratings_settings['allow']==0) return 0;

		if($type=="user") { $table = "user_ratings"; $fid="user_id"; } else { $table="ratings"; $fid="ad_id"; }

		// val==1 once per ip
		$where = "";
		if($ratings_settings['allow']==1) $where.=" where `$fid` = '$id' and `ip` like '$ip'";

		// val==2 once per ip a day
		$timestamp = date("Y-m-d H:i:s");
		if($ratings_settings['allow']==2) $where.=" where `$fid` = '$id' and `ip` like '$ip' and '$timestamp' < date_add(`date`, interval '1' day)";

		// val==3 once per ip a month
		if($ratings_settings['allow']==3) $where.=" where `$fid` = '$id' and `ip` like '$ip' and '$timestamp' < date_add(`date`, interval '30' day)";

		// val==4 once per ip a year
		if($ratings_settings['allow']==4) $where.=" where `$fid` = '$id' and `ip` like '$ip' and '$timestamp' < date_add(`date`, interval '365' day)";

		$voted = $db->fetchRow("select `rating` from ".$config_table_prefix.$table.$where);

		return $voted;

	}


	function getError() {

		return $this->error;

	}

	function addError($err_field, $err_text) {

		array_push($this->error, array("field"=> $err_field, "error" => $err_text));

	}

	function setError($err_field, $err_text) {

		$this->error =  array("field"=> $err_field, "error" => $err_text);

	}

	function setInfo($str){

		$this->info = $str;

	}

	function getInfo() {

		return $this->info;

	}

	function addRating($id, $rating, $ip) {

		global $db;
		global $config_table_prefix;

		if($this->getVoted($id)) return 0;

		$this->clean['date']=date('Y-m-d H:i:s');
		$db->query("insert into ".$config_table_prefix."ratings set `ip` = '$ip', `ad_id` = '$id', `rating` = '$rating', `date` = '".$this->clean['date']."'");

		// calculate the new rating value
		$votes = $db->fetchAssoc("select `rating`, `no_ratings` from ".TABLE_ADS." where id='$id'");
		$crt_vote = $votes['rating'];
		$no_votes = $votes['no_ratings'];

		$new_rating = ($crt_vote*$no_votes + $rating) / ( $no_votes + 1 );
		$no_votes++;
		$db->query("update ".TABLE_ADS." set `rating` = '$new_rating', `no_ratings` = '$no_votes' where id='$id'");

		return 1;

	}

	function addUserRating($id, $rating, $ip) {

		global $db;
		global $config_table_prefix;

		if($this->getVoted($id, "user")) return 0;

		$this->clean['date']=date('Y-m-d H:i:s');
		$db->query("insert into ".$config_table_prefix."user_ratings set `ip` = '$ip', `user_id` = '$id', `rating` = '$rating', `date` = '".$this->clean['date']."'");

		// calculate the new rating value
		$votes = $db->fetchAssoc("select `rating`, `no_ratings` from ".TABLE_USERS." where id='$id'");
		$crt_vote = $votes['rating'];
		$no_votes = $votes['no_ratings'];

		$new_rating = ($crt_vote*$no_votes + $rating) / ( $no_votes + 1 );
		$no_votes++;
		$db->query("update ".TABLE_USERS." set `rating` = '$new_rating', `no_ratings` = '$no_votes' where id='$id'");

		return 1;

	}

	function check_form ( $ratings_settings, $crt_usr, $type='user' ) {

		global $lng, $lng_ratings;
		global $crt_usr, $settings;

		$prefix='';
		if($type=='ad') $prefix = 'ar_';

		if( $type=="user" && empty($_POST['user_id'])) { $this->addError("user_id", $lng_ratings['error']['user_id_missing']); return 0; }

		// check if same user
		if($ratings_settings['cannot_rate_oneself'] && $_POST['user_id']==$crt_usr) { $this->addError("user_id", $lng_ratings['you_cannot_rate_your_user']); return 0; }

		if(empty($_POST['rating'])) $this->addError("rating", $lng_ratings['error']['rating_missing']);

		if( $ratings_settings[$prefix.'use_title']==1 && empty($_POST['ratings_title'])) $this->addError("ratings_title", $lng_ratings['error']['title_missing']);

		if($ratings_settings[$prefix.'use_name']==1 && empty($_POST['ratings_name'])) $this->addError("ratings_name", $lng_ratings['error']['name_missing']);

		if(empty($_POST['ratings_content'])) $this->addError("ratings_content", $lng_ratings['error']['content_missing']);

		else if($ratings_settings[$prefix.'badwords_check']) {

			$badword=new badwords();
			if($badword->check(escape($_POST['ratings_content'])) || ( $ratings_settings[$prefix.'use_title'] && !empty($_POST['ratings_title']) && $badword->check(escape($_POST['ratings_title']))))
				$this->addError("user_id", $lng_ratings['errors']['badwords']);

		}

		if( $ratings_settings[$prefix.'use_email']==1 && empty($_POST['ratings_email']))
			$this->addError("ratings_email", $lng_ratings['error']['email_missing']);

		if($ratings_settings[$prefix.'use_email'] && !empty($_POST['ratings_email']) && !validator::valid_email($_POST['ratings_email']))
			$this->addError("ratings_email", $lng_ratings['error']['invalid_email']);

		if( $ratings_settings[$prefix.'use_website'] && $ratings_settings[$prefix.'use_website']==1 && empty($_POST['ratings_website']))
			 $this->addError("ratings_website", $lng_ratings['error']['website_missing']);

		if(!empty($_POST['ratings_website']) && !validator::valid_url($_POST['ratings_website']))
			$this->addError("ratings_website", $lng_ratings['error']['invalid_website']);

		if($ratings_settings['captcha']==1 || ($ratings_settings['captcha']==2 && !$crt_usr)) {
			global $config_abs_path;
			require_once $config_abs_path."/include/captcha.php";

			if($settings['enable_recaptcha']) $field = 'recaptcha_div_rev'; else $field = 'number';

			$error = checkCaptcha();
 			if($error) $this->addError($field, $error);

		}

		return 1;
	}

	function addReview() {

		global $db;
		global $lng_ratings, $lng;
		$this->clean=array();

		$ratings_settings = $this->getSettings();

		// get auth information
		checkAuth();

		global $crt_usr, $is_admin;
		if(!$crt_usr) $crt_usr=0;

		$type='user';
		if(isset($_POST['aid']) && is_numeric($_POST['aid'])) $type="ad";

		$this->check_form($ratings_settings, $crt_usr, $type);

		if($this->getError()) return 0;

		$table=''; $str = ''; $prefix = '';
		if($type=='ad') {
			$table = TABLE_ADS;
			$rtable = 'ratings';
			$fid = escape($_POST['aid']);
			$uid = escape($_POST['user_id']);
			$str=", `ad_id` = ".$fid;
			$user_et = "new_ad_review";
			$admin_et = "admin_new_ad_review";
			$prefix = 'ar_';
		}
		else {
			$table = TABLE_USERS;
			$rtable = 'user_ratings';
			$fid = escape($_POST['user_id']);
			$uid = $fid;
			$str=", `user_id` = ".$fid;
			$user_et = "new_review";
			$admin_et = "admin_new_review";
		}

		if(!empty($_POST['ratings_email'])) $this->clean['email'] = escape($_POST['ratings_email']); else $this->clean['email']='';

		if(!empty($_POST['ratings_website'])) $this->clean['website'] = escape($_POST['ratings_website']); else $this->clean['website']='';

		$this->clean['rating'] = escape($_POST['rating']);
		if( $ratings_settings[$prefix.'use_title']) $this->clean['title'] = escape($_POST['ratings_title']); else $this->clean['title'] = '';
		if(!empty($_POST['ratings_name'])) $this->clean['name'] = escape($_POST['ratings_name']); else $this->clean['name']='';
		$this->clean['content'] = escape($_POST['ratings_content']);

		// strip not allowed html
		$this->clean['content'] = strip_tags($this->clean['content'], tags_list($ratings_settings['allowed_html']));

		$active = 0;
		if($ratings_settings[$prefix.'admin_verification']==0 || ($ratings_settings[$prefix.'admin_verification']==2 && $crt_usr)) $active=1;

		global $config_table_prefix;
		$this->clean['date']=date('Y-m-d H:i:s');
		$db->query('insert into '.$config_table_prefix.$rtable.' set `rating`="'.$this->clean['rating'].'", `name` = "'.$this->clean['name'].'", `title` = "'.$this->clean['title'].'", `content` = "'.$this->clean['content'].'", `email` =  "'.$this->clean['email'].'", `website` =  "'.$this->clean['website'].'", `poster_id` = "'.$crt_usr.'", `ip` = "'.getRemoteIp().'", `date` = "'.$this->clean['date'].'", `active` = '.$active.$str.';');

		if($active==1) {

			$this->setInfo($lng_ratings['info']['review_added']);

			// calculate the new rating value
			$votes = $db->fetchAssoc("select `rating`, `no_ratings` from ".$table." where id='".$fid."'");
			$crt_vote = $votes['rating'];
			$no_votes = $votes['no_ratings'];

			$new_rating = ($crt_vote*$no_votes + $this->clean['rating']) / ( $no_votes + 1 );
			$no_votes++;
			$db->query("update ".$table." set `rating` = '$new_rating', `no_ratings` = '$no_votes' where id='".$fid."'");

		}
		else $this->setInfo($lng_ratings['info']['review_pending']);

		if($active) {
			if($uid || $type=="ad") {
			// send mail to owner
			global $config_abs_path;
			require_once $config_abs_path."/classes/mails.php";
			require_once $config_abs_path."/classes/mail_templates.php";

			global $settings;
			if($uid) {
				$owner_info = $db->fetchAssoc("select `{$settings['contact_name_field']}`, `email` from ".TABLE_USERS." where id='$uid'");
			} else {
				$owner_info = $db->fetchAssoc("select `mgm_name` as `{$settings['contact_name_field']}`, `mgm_email` as `email` from ".TABLE_ADS_EXTENSION." where `id` = '".$fid."'");
			}

			// send email
			$mail2send=new mails();
			$mail2send->init($owner_info['email'], $owner_info[$settings['contact_name_field']]);

			$array_subject = array("rating"=>cleanStr($this->clean['rating']), "contact_name"=>$owner_info[$settings['contact_name_field']], "sender_name"=>cleanStr($this->clean['name']), "sender_email"=>cleanStr($this->clean['email']), "title" => cleanStr($this->clean['title']));

			$array_message = array("rating"=>cleanStr($this->clean['rating']), "contact_name"=>$owner_info[$settings['contact_name_field']], "sender_name"=>cleanStr($this->clean['name']), "sender_email"=>cleanStr($this->clean['email']), "sender_website"=>cleanStr($this->clean['website']), "message" => nl2br(cleanStr($this->clean['content'])), "title" => cleanStr($this->clean['title']));

			if($type=="ad") {
				$ad_title = cleanStr(listings::getTitle($fid));
				$array_subject['ad_title'] = $ad_title;
				$array_subject['ad_id'] = $fid;
				$array_message['ad_title'] = $ad_title;
				$array_message['ad_id'] = $fid;
			}

			$sent = $mail2send->composeAndSend($user_et, $array_message, $array_subject);

			if($sent) $info=$lng['contact']['message_sent'];
			else $info=$lng['contact']['sending_message_failed'];
			} //end if $uid
		}
		else {

			// send mail to admin
			global $config_abs_path;
			require_once $config_abs_path."/classes/mails.php";
			require_once $config_abs_path."/classes/mail_templates.php";

			global $settings;

			if($uid) $owner_info = $db->fetchAssoc("select `{$settings['contact_name_field']}`, `email` from ".TABLE_USERS." where id='".$uid."'");
			else {

				$owner_info = array();
				$user_info = listings::getOwnerInfo($fid);
				$owner_info['email'] = $user_info['mgm_email'];
				$owner_info[$settings['contact_name_field']] = $user_info['mgm_name'];
			}

			// send email
			$mail2send=new mails();
			$mail2send->init();

			$array_subject = array("rating"=>$this->clean['rating'], "contact_name"=>$owner_info[$settings['contact_name_field']], "email"=>$owner_info['email'], "sender_name"=>$this->clean['name'], "sender_email"=>$this->clean['email'], "title" => $this->clean['title']);

			$array_message = array("rating"=>$this->clean['rating'], "contact_name"=>$owner_info[$settings['contact_name_field']], "email"=>$owner_info['email'], "sender_name"=>$this->clean['name'], "sender_email"=>$this->clean['email'], "sender_website"=>$this->clean['website'], "message" => nl2br($this->clean['content']), "title" => $this->clean['title']);

				if($type=="ad") {
				$ad_title = cleanStr(listings::getTitle($fid));
				$array_subject['ad_title'] = $ad_title;
				$array_subject['ad_id'] = $fid;
				$array_message['ad_title'] = $ad_title;
				$array_message['ad_id'] = $fid;
			}

			$sent = $mail2send->composeAndSend($admin_et, $array_message, $array_subject);


		}

		return 1;

	}

	function edit($id, $type='user') {

		global $db;
		$this->clean=array();

		if($type=="user") {
			$rtable = 'user_ratings';
			$prefix = '';
		}
		else {
			$rtable = 'ratings';
			$prefix = 'ar_';
		}

		if(isset($_POST['email'])) $this->clean['email'] = escape($_POST['email']); else $this->clean['email']='';
		if(isset($_POST['website'])) $this->clean['website'] = escape($_POST['website']); else $this->clean['website']='';

		if(isset($_POST['name'])) $this->clean['name'] = escape($_POST['name']); else $this->clean['name']='';
		if( $ratings_settings[$prefix.'use_title']) $this->clean['title'] = escape($_POST['title']); else $this->clean['title'] ='';
		$this->clean['content'] = escape($_POST['content']);

		global $config_table_prefix;
		$db->query('update '.$config_table_prefix.$rtable.' set `name` = "'.$this->clean['name'].'",  `title` = "'.$this->clean['title'].'", `content` = "'.$this->clean['content'].'",  `email` =  "'.$this->clean['email'].'", `website` = "'.correct_href($this->clean['website']).'" where id='.$id.';');

		return 1;

	}


	function saveSettings() {

		global $config_demo;

		$this->clean = array();

		if($config_demo==1) {
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		$checkboxes = array("require_login", "rate_listings", "rate_users", "cannot_rate_oneself", "enable_reviews", "badwords_check", "html_editor", "ar_enable_reviews", "ar_badwords_check", "ar_html_editor", "enable_latest_listing_reviews", "enable_latest_user_reviews");
		foreach($checkboxes as $f) {
			$clean[$f] = checkbox_value($f);
		}

		$inputs = array("allow", "logo_field", "use_name", "use_email", "use_website", "allowed_html", "admin_verification", "captcha", "ar_logo_field", "ar_use_name", "ar_use_email", "ar_use_website", "ar_allowed_html", "ar_admin_verification", "ar_captcha", "no_on_page", "ar_no_on_page", "use_title", "ar_use_title", "no_latest_listing_reviews", "no_latest_user_reviews");
		foreach($inputs as $f) {
			$clean[$f] = escape($_POST[$f]);
		}

		global $config_table_prefix;
		$sql = "update ".$config_table_prefix."ratings_settings set ";

		$first = 1;
		foreach($inputs as $f) {
			if(!$first) $sql.=", ";
			$sql.=" `$f` = '{$clean[$f]}'";
			$first = 0;
		}

		foreach($checkboxes as $f) {
			$sql.=", `$f` = '{$clean[$f]}'";
		}

		$i = 0;
		$this->clean['groups'] = '';
		while (isset($_POST['groups'][$i]) && $f=escape($_POST['groups'][$i])){
			if($i) $this->clean['groups'].=',';
			$this->clean['groups'].=$f;
			$i++;
		}
		$sql .= ", `groups` = '{$this->clean['groups']}'";

		global $languages;
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['terms_'.$lang_id]) && $_POST['terms_'.$lang_id]) $this->clean['terms_'.$lang_id]=escape($_POST['terms_'.$lang_id]); else $this->clean['terms_'.$lang_id]='';

			if(isset($_POST['ar_terms_'.$lang_id]) && $_POST['ar_terms_'.$lang_id]) $this->clean['ar_terms_'.$lang_id]=escape($_POST['ar_terms_'.$lang_id]); else $this->clean['ar_terms_'.$lang_id]='';

			if(isset($_POST['latest_listing_reviews_title_'.$lang_id]) && $_POST['latest_listing_reviews_title_'.$lang_id]) $this->clean['latest_listing_reviews_title_'.$lang_id]=escape($_POST['latest_listing_reviews_title_'.$lang_id]); else $this->clean['latest_listing_reviews_title_'.$lang_id]='';

			if(isset($_POST['latest_user_reviews_title_'.$lang_id]) && $_POST['latest_user_reviews_title_'.$lang_id]) $this->clean['latest_user_reviews_title_'.$lang_id]=escape($_POST['latest_user_reviews_title_'.$lang_id]); else $this->clean['latest_user_reviews_title_'.$lang_id]='';

			$sql.=", `terms_$lang_id` = '".$this->clean['terms_'.$lang_id]."', `ar_terms_$lang_id` = '".$this->clean['ar_terms_'.$lang_id]."', `latest_listing_reviews_title_$lang_id` = '".$this->clean['latest_listing_reviews_title_'.$lang_id]."', `latest_user_reviews_title_$lang_id` = '".$this->clean['latest_user_reviews_title_'.$lang_id]."' ";

		}

		global $db;
		$db->query($sql);

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_ratings_settings");

		return 1;
	}

	function Disable($id, $type='user') {


		global $db, $config_table_prefix;

		if($type=="user") {
			$rtable = 'user_ratings';
			$id_field = 'user_id';
			$table = TABLE_USERS;
		}
		else {
			$rtable = 'ratings';
			$id_field = 'ad_id';
			$table = TABLE_ADS;
		}

		$res_del=$db->query('update '.$config_table_prefix.$rtable.' set `active`=0 where `id`="'.$id.'"');
		$arr = $db->fetchAssoc("select `$id_field`, `rating` from ".$config_table_prefix.$rtable." where id='$id'");
		$rid = $arr[$id_field];

		$rating = $arr['rating'];

		// calculate the new rating value
		$votes = $db->fetchAssoc("select `rating`, `no_ratings` from ".$table." where id='$rid'");
		$crt_vote = $votes['rating'];
		$no_votes = $votes['no_ratings'];

		$new_rating = ($crt_vote*$no_votes - $rating) / ( $no_votes - 1 );
		$no_votes--;
		$db->query("update ".$table." set `rating` = '$new_rating', `no_ratings` = '$no_votes' where id='$rid'");

	}

	function Enable($id, $type='user') {


		global $db, $config_table_prefix;
		if($type=="user") {
			$rtable = 'user_ratings';
			$id_field = 'user_id';
			$table = TABLE_USERS;
		}
		else {
			$rtable = 'ratings';
			$id_field = 'ad_id';
			$table = TABLE_ADS;
		}

		$res_del=$db->query('update '.$config_table_prefix.$rtable.' set `active`=1 where `id`="'.$id.'"');
		$arr = $db->fetchAssoc("select `$id_field`, `rating` from ".$config_table_prefix.$rtable." where id='$id'");
		$rid = $arr[$id_field];
		$rating = $arr['rating'];

		// calculate the new rating value
		$votes = $db->fetchAssoc("select `rating`, `no_ratings` from ".$table." where id='$rid'");
		$crt_vote = $votes['rating'];
		$no_votes = $votes['no_ratings'];

		$new_rating = ($crt_vote*$no_votes + $rating) / ( $no_votes + 1 );
		$no_votes++;
		$db->query("update ".$table." set `rating` = '$new_rating', `no_ratings` = '$no_votes' where id='$rid'");

	}

	function Delete($id, $type='user') {

		//$this->Disable($id);
		global $db;
		global $config_table_prefix;

		if($type=="user")
			$rtable = 'user_ratings';
		else $rtable = 'ratings';

		$this->Disable($id, $type);

		$db->query("delete from ".$config_table_prefix.$rtable." where id='$id'");

	}

	function Block($id, $type='user') {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$ip=$this->getIp($id);
		$res=$db->query('delete from '.TABLE_BLOCKED_IPS.' where ip like "'.$ip.'"');
		$res1=$db->query('insert into '.TABLE_BLOCKED_IPS.' values ("'.$ip.'")');

	}

	function Unblock($id, $type='user') {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$ip=$this->getIp($id, $type);
		$res=$db->query('delete from '.TABLE_BLOCKED_IPS.' where ip like "'.$ip.'"');

	}

	function getIp($id, $type='user') {

		global $db;
		global $config_table_prefix;
		if($type=="user")
			$rtable = 'user_ratings';
		else $rtable = 'ratings';

		$result=$db->fetchRow('select `ip` from '.$config_table_prefix.$rtable.' where `id`="'.$id.'"');

		return $result;

	}

	function getReview($id, $type='user') {

		global $db;
		global $appearance_settings;
		global $config_table_prefix;
		$date_format=$appearance_settings["date_format"];

		if($type=="user")
		$result=$db->fetchAssoc("select ".$config_table_prefix."user_ratings.*, ".TABLE_USERS.".store, ".TABLE_USERS.".username, date_format(".$config_table_prefix."user_ratings.`date`,'$date_format') as `date_nice` from ".$config_table_prefix."user_ratings left join ".TABLE_USERS." on ".TABLE_USERS.".id = ".$config_table_prefix."user_ratings.`user_id` where ".$config_table_prefix."user_ratings.`id`=$id");
		else // ads review
		{
			global $crt_lang, $ads_settings;
			$title_var ="title";
			if($ads_settings['translate_title_description'])
				$title_var = "title_$crt_lang";

			$result=$db->fetchAssoc("select ".$config_table_prefix."ratings.*, ".TABLE_ADS.".`$title_var` as `ad_title`, date_format(".$config_table_prefix."ratings.`date`,'$date_format') as `date_nice` from ".$config_table_prefix."ratings left join ".TABLE_ADS." on ".TABLE_ADS.".id = ".$config_table_prefix."ratings.`ad_id` where ".$config_table_prefix."ratings.`id`=$id");

		}

		if(isset($result['description'])) $result['description'] = cleanStr($result['description']);
		if(isset($result['title'])) $result['title'] = cleanStr($result['title']);
		if(isset($result['ad_title'])) $result['ad_title'] = cleanStr($result['ad_title']);
		if(isset($result['name'])) $result['name'] = cleanStr($result['name']);

		return $result;

	}

	// get reviews for site frontend
	// details page or user listings page
	function getReviews($oid, $page=1, $type='user') {

		global $db;
		global $config_table_prefix;

		global $appearance_settings;
		$date_format=$appearance_settings["date_format_long"];

		if($type=="user") {
			$rtable = 'user_ratings';
			$id_field = 'user_id';
			$prefix="";
		}
		else {
			$rtable = 'ratings';
			$id_field = 'ad_id';
			$prefix="ar_";
		}

		$sett = $this->getSettings();
		$str_logo = '';
		$str_logo_join = '';

		if($sett['logo_field']) {
			$str_logo= ", ".TABLE_USERS.".`".$sett['logo_field']."` as `logo`";
			$str_logo_join = " LEFT JOIN ".TABLE_USERS." on ".TABLE_USERS.".`id` = ".$config_table_prefix.$rtable.".`poster_id`";
		}

		$rev_per_page = $sett[$prefix.'no_on_page'];
		$start=($page-1)*$rev_per_page;

		$result=$db->fetchAssocList("select ".$config_table_prefix.$rtable.".*, date_format(".$config_table_prefix.$rtable.".`date`,'$date_format') as `date_nice`$str_logo from ".$config_table_prefix.$rtable." $str_logo_join where ".$config_table_prefix.$rtable.".`active`=1 and `$id_field`=$oid order by ".$config_table_prefix.$rtable.".`date` desc limit ".$start.", ".$rev_per_page);

		$i=0;
		$array=array();
		foreach($result as $row) {
			$array[$i]=$row;
			$array[$i]['content'] = str_replace("\n", "<br/>",$array[$i]['content']);
			$i++;
		}

		return $array;

	}

	// get reviews for admin side
	function getAll($page,$no_per_page, $type='user') {

		global $db;

		global $appearance_settings, $settings;
		$date_format=$appearance_settings["date_format"];

		//_print_r($settings);
		global $config_table_prefix;
		$start=($page-1)*$no_per_page;

		if($type=="user")
		$result=$db->fetchAssocList("select ".$config_table_prefix."user_ratings.*, ".TABLE_USERS.".`{$settings['contact_name_field']}`, ".TABLE_USERS.".`email` as `user_email`, ".TABLE_USERS.".`store`, date_format(".$config_table_prefix."user_ratings.`date`,'$date_format') as `date_nice`, ( ".TABLE_BLOCKED_IPS.".ip is not null ) as blocked from ".$config_table_prefix."user_ratings
		LEFT JOIN ".TABLE_USERS." on ".$config_table_prefix."user_ratings.user_id = ".TABLE_USERS.".`id`
		LEFT JOIN ".TABLE_BLOCKED_IPS." on ".$config_table_prefix."user_ratings.ip = ".TABLE_BLOCKED_IPS.".ip
		order by ".$config_table_prefix."user_ratings.`date` desc limit $start, $no_per_page");
		else {

			global $crt_lang, $ads_settings;
			$title_var ="title";
			if($ads_settings['translate_title_description'])
				$title_var = "title_$crt_lang";

			$result=$db->fetchAssocList("select ".$config_table_prefix."ratings.*, ".TABLE_ADS.".`$title_var` as `ad_title`, date_format(".$config_table_prefix."ratings.`date`,'$date_format') as `date_nice`, ( ".TABLE_BLOCKED_IPS.".ip is not null ) as blocked from ".$config_table_prefix."ratings
			LEFT JOIN ".TABLE_ADS." on ".$config_table_prefix."ratings.ad_id = ".TABLE_ADS.".`id`
			LEFT JOIN ".TABLE_BLOCKED_IPS." on ".$config_table_prefix."ratings.ip = ".TABLE_BLOCKED_IPS.".ip
			order by ".$config_table_prefix."ratings.`date` desc limit $start, $no_per_page");
		}

		$i=0;
		$array=array();
		foreach($result as $row) {
			$array[$i]=$row;
			$array[$i]['content'] = str_replace("\n", "<br/>",$array[$i]['content']);
			if($array[$i]['poster_id']) $array[$i]['poster_username'] = users::getUsername($array[$i]['poster_id']);
			if( $type=="user" && $array[$i]['user_id']) $array[$i]['username'] = users::getUsername($array[$i]['user_id']);
			$i++;
		}

		return $array;
	}

	function autoCheckLang() {

		global $languages;
		global $db;
		$fields_settings = $db->getTableFields($this->settings_table);
		$default_lang = languages::getDefault();

		if(in_array("terms", $fields_settings)) {
			$db->query("alter table ".$this->settings_table." change `terms` `terms_$default_lang` text");
		}
		if(in_array("ar_terms", $fields_settings)) {
			$db->query("alter table ".$this->settings_table." change `ar_terms` `ar_terms_$default_lang` text");
		}
		if(in_array("latest_listing_reviews_title", $fields_settings)) {
			$db->query("alter table ".$this->settings_table." change `latest_listing_reviews_title` `latest_listing_reviews_title_$default_lang` varchar(200)");
		}
		if(in_array("latest_user_reviews_title", $fields_settings)) {
			$db->query("alter table ".$this->settings_table." change `latest_user_reviews_title` `latest_user_reviews_title_$default_lang` varchar(200)");
		}

		$fields_settings = $db->getTableFields($this->settings_table);

		foreach($languages as $lang) {

			$lang_id = $lang['id'];
			if(!in_array("terms_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `terms_$lang_id` text");
			if(!in_array("ar_terms_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `ar_terms_$lang_id` text");
			if(!in_array("latest_listing_reviews_title_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `latest_listing_reviews_title_$lang_id` varchar(200)");
			if(!in_array("latest_user_reviews_title_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `latest_user_reviews_title_$lang_id` varchar(200)");

		}

	}

	function deleteListingRatings($id) {

		if(!$id) return;
		global $db, $config_table_prefix;
		$db->query("delete from ".$config_table_prefix."ratings where ad_id = $id");

	}

	function deleteUserRatings($id) {

		if(!$id) return;
		global $db, $config_table_prefix;
		$db->query("delete from ".$config_table_prefix."user_ratings where user_id = $id");

	}

	function getLatestListingReviews($no_reviews, $rs_settings) {

			global $db, $appearance_settings, $config_table_prefix, $settings;
			$date_format=$appearance_settings["date_format"];
			$reviews = $db->fetchAssocList("select ".$config_table_prefix."ratings.*, date_format(".$config_table_prefix."ratings.`date`,'$date_format') as `date_nice`,
			".TABLE_ADS.".title
			from ".$config_table_prefix."ratings
			left join ".TABLE_ADS." on ".TABLE_ADS.".id = ".$config_table_prefix."ratings.`ad_id`
			order by ".$config_table_prefix."ratings.`date` desc limit $no_reviews");

			$logo_field = $rs_settings['ar_logo_field'];
			$contact_name_field = $settings['contact_name_field'];

			$logo_str="";
			if(!empty($logo_field)) {
				$logo_str = ", `$logo_field`";
			} // end if logo

			$i = 0;
			global $db;
			foreach($reviews as $r) {

					// get user logo
					if($r['poster_id']) {

						$arr = $db->fetchAssoc("select `$contact_name_field`, `store` $logo_str from ".TABLE_USERS." where `id`='{$r['poster_id']}'");
						if(!empty($logo_field)) {
								$reviews[$i]['logo_folder'] = $logo_field;
								$reviews[$i]['logo'] = $arr[$logo_field];
								$reviews[$i]['store'] = $arr['store'];
						}
						$reviews[$i]['contact_name'] = $arr[$contact_name_field];

					}
					$i++;
			}// end foreach

			return $reviews;

	}

	function getLatestUserReviews($no_reviews, $rs_settings) {

			global $db, $appearance_settings, $config_table_prefix, $settings;
			$contact_name_field = $settings['contact_name_field'];
			$logo_field = $rs_settings['logo_field'];

			$date_format=$appearance_settings["date_format"];
			$reviews = $db->fetchAssocList("select ".$config_table_prefix."user_ratings.*,
			date_format(".$config_table_prefix."user_ratings.`date`,'$date_format') as `date_nice`,
			".TABLE_USERS.".username, ".TABLE_USERS.".`$contact_name_field` as `user_contact`
			from ".$config_table_prefix."user_ratings
			left join ".TABLE_USERS." on ".TABLE_USERS.".id = ".$config_table_prefix."user_ratings.`user_id`
			order by ".$config_table_prefix."user_ratings.`date` desc limit $no_reviews");

			$logo_str="";
			if(!empty($logo_field)) {
				$logo_str = ", `$logo_field`";
			} // end if logo

			$i = 0;
			global $db;
			foreach($reviews as $r) {

					// get user logo
					if($r['poster_id']) {

						$arr = $db->fetchAssoc("select `$contact_name_field`, `store` $logo_str from ".TABLE_USERS." where `id`='{$r['poster_id']}'");
						if(!empty($logo_field)) {
								$reviews[$i]['logo_folder'] = $logo_field;
								$reviews[$i]['logo'] = $arr[$logo_field];
								$reviews[$i]['store'] = $arr['store'];
						}
						$reviews[$i]['contact_name'] = $arr[$contact_name_field];

					}
					$i++;
			}// end foreach

			return $reviews;

	}

}
?>
