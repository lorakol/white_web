<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class spam_prevention {

	var $table;
	var $log_table;
	var $no_logs;

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."spam_prevention";
		$this->log_table = $config_table_prefix."spam_prevention_log";
		$this->user_info_table = $config_table_prefix."sp_user_info";
		$this->error = array();
		$this->info = '';
		$this->no_logs = 0;
		$this->error=null; 
		$this->ABIPConfidence='';
		$this->SFSIPConfidence='';
		$this->SFSEmailConfidence='';
		$this->IPQSEmailConfidence='';
		$this->IPQSConfidence='';
		$this->SFSIPSpam=0;
		$this->ABIPSpam=0;
		$this->IPQSIPSpam=0;
		$this->SFSEmailSpam=0;
		$this->IPQSEmailSpam=0;
		$this->last_data=array();
	}

	function setInfo($str){

		$this->info = $str;

	}
	function getError() {
	
		return $this->error;

	}

	function addError($str) {

		$this->error.=	$str;

	}

	function getInfo() {

		return $this->info;

	}

	function checkSettings() {
	
		global $lng_sp;
		if(checkbox_value("use_abip") && (!isset($_POST["abip_api_key"]) || !$_POST["abip_api_key"])) 
			$this->addError($lng_sp['error']['abip_api_key'].'<br />');
		if(checkbox_value("use_ipqs") && (!isset($_POST["ipqs_api_key"]) || !$_POST["ipqs_api_key"])) 
			$this->addError($lng_sp['error']['ipqs_api_key'].'<br />');
	}
	
	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		$this->checkSettings();
		if($this->getError()!='') return 0;
		
		global $db;
		$this->clean=array();

		$str_update = '';

		$array_checkboxes = array("check_registration", "check_contact_forms", "check_comments", "check_reviews", "sfs_block_tor_ips", "sfs_block_networks", "add_waiting_time", "use_sfs", "use_abip", "use_ipqs", "ipqs_public_access_points", "ipqs_lighter_penalties", "ipqs_ip_fast", "ipqs_email_fast", "ipqs_add_user_info", "ipqs_block", "limit_accesses", "limit_same_page_accesses", "ipqs_info_on_users_list");

		foreach ($array_checkboxes as $field) {

			$this->clean[$field] = checkbox_value($field);
			$str_update.=" `$field` = '".$this->clean[$field]."', ";
		}

		if(isset($_POST["sfs_block_limit"]) && is_numeric($_POST["sfs_block_limit"]) && $_POST["sfs_block_limit"]>0 && $_POST["sfs_block_limit"]<=100) $this->clean["sfs_block_limit"]=$_POST["sfs_block_limit"]; else $this->clean["sfs_block_limit"]=50;
		$str_update.=" `sfs_block_limit` = '".$this->clean["sfs_block_limit"]."', ";

		if(isset($_POST["abip_block_limit"]) && is_numeric($_POST["abip_block_limit"]) && $_POST["abip_block_limit"]>0 && $_POST["abip_block_limit"]<=100) $this->clean["abip_block_limit"]=$_POST["abip_block_limit"]; else $this->clean["abip_block_limit"]=50;
		$str_update.=" `abip_block_limit` = '".$this->clean["abip_block_limit"]."', ";

		if(isset($_POST["ipqs_block_limit"]) && is_numeric($_POST["ipqs_block_limit"]) && $_POST["ipqs_block_limit"]>0 && $_POST["ipqs_block_limit"]<=100) $this->clean["ipqs_block_limit"]=$_POST["ipqs_block_limit"]; else $this->clean["ipqs_block_limit"]=80;
		$str_update.=" `ipqs_block_limit` = '".$this->clean["ipqs_block_limit"]."', ";

		if(isset($_POST["abip_api_key"]) && $_POST["abip_api_key"]) $this->clean["abip_api_key"]=$_POST["abip_api_key"];
		$str_update.=" `abip_api_key` = '".$this->clean["abip_api_key"]."', ";

		if(isset($_POST["ipqs_api_key"]) && $_POST["ipqs_api_key"]) $this->clean["ipqs_api_key"]=$_POST["ipqs_api_key"];
		$str_update.=" `ipqs_api_key` = '".$this->clean["ipqs_api_key"]."', ";

		if(isset($_POST["ipqs_strictness"]) && $_POST["ipqs_strictness"]) $this->clean["ipqs_strictness"]=$_POST["ipqs_strictness"];
		$str_update.=" `ipqs_strictness` = '".$this->clean["ipqs_strictness"]."', ";

		if(isset($_POST["ipqs_timeout"]) && is_numeric($_POST["ipqs_timeout"]) && $_POST["ipqs_timeout"]>0 && $_POST["ipqs_timeout"]<=60) $this->clean["ipqs_timeout"]=$_POST["ipqs_timeout"]; else $this->clean["ipqs_timeout"]=2;
		$str_update.=" `ipqs_timeout` = '".$this->clean["ipqs_timeout"]."', ";
		
		if(isset($_POST["block_for"]) && is_numeric($_POST["block_for"]) && $_POST["block_for"]>0) $this->clean["block_for"]=$_POST["block_for"]; else $this->clean["block_for"]=60;
		$str_update.=" `block_for` = '".$this->clean["block_for"]."'";

		if(isset($_POST["waiting_time"]) && is_numeric($_POST["waiting_time"]) && $_POST["waiting_time"]>0) $this->clean["waiting_time"]=$_POST["waiting_time"]; else $this->clean["waiting_time"]=10;
		$str_update.=", `waiting_time` = '".$this->clean["waiting_time"]."'";

		if(isset($_POST["limit_acc_block_for"]) && is_numeric($_POST["limit_acc_block_for"]) && $_POST["limit_acc_block_for"]>0) $this->clean["limit_acc_block_for"]=$_POST["limit_acc_block_for"]; else $this->clean["limit_acc_block_for"]=1;
		$str_update.=", `limit_acc_block_for` = '".$this->clean["limit_acc_block_for"]."'";

		if(isset($_POST["limit_acc_more_than_times"]) && is_numeric($_POST["limit_acc_more_than_times"]) && $_POST["limit_acc_more_than_times"]>0) $this->clean["limit_acc_more_than_times"]=$_POST["limit_acc_more_than_times"]; else $this->clean["limit_acc_more_than_times"]=100;
		$str_update.=", `limit_acc_more_than_times` = '".$this->clean["limit_acc_more_than_times"]."'";

		if(isset($_POST["limit_spa_more_than_times"]) && is_numeric($_POST["limit_spa_more_than_times"]) && $_POST["limit_spa_more_than_times"]>0) $this->clean["limit_spa_more_than_times"]=$_POST["limit_spa_more_than_times"]; else $this->clean["limit_spa_more_than_times"]=10;
		$str_update.=", `limit_spa_more_than_times` = '".$this->clean["limit_spa_more_than_times"]."'";

		if(isset($_POST["limit_acc_in_minutes"]) && is_numeric($_POST["limit_acc_in_minutes"]) && $_POST["limit_acc_in_minutes"]>0) $this->clean["limit_acc_in_minutes"]=$_POST["limit_acc_in_minutes"]; else $this->clean["limit_acc_in_minutes"]=1;
		$str_update.=", `limit_acc_in_minutes` = '".$this->clean["limit_acc_in_minutes"]."'";

		
		if(isset($_POST["limit_acc_count_from_pages"]) && $_POST["limit_acc_count_from_pages"]==1) {
			$details = checkbox_value("limit_acc_details");
			$index = checkbox_value("limit_acc_index");
			$listings = checkbox_value("limit_acc_listings");
			
			if($details) $this->clean["limit_acc_count_from_pages"] = "details|";
			if($index) $this->clean["limit_acc_count_from_pages"] .= "index|";
			if($listings) $this->clean["limit_acc_count_from_pages"] .= "listings|";
			
			$this->clean["limit_acc_count_from_pages"] = trim($this->clean["limit_acc_count_from_pages"], "|");
			
		} else $this->clean["limit_acc_count_from_pages"]=0;
		$str_update.=", `limit_acc_count_from_pages` = '".$this->clean["limit_acc_count_from_pages"]."'";
		
		if(isset($_POST['choose_group']) && $_POST['choose_group']=="choose")
		{
			$this->clean['waiting_groups']='';
			$i=0;
			while (isset($_POST['waiting_groups'][$i])){
				$group=escape($_POST['waiting_groups'][$i]);
				if($i) $this->clean['waiting_groups'].=',';
				$this->clean['waiting_groups'].=$group;
				$i++;
			}
		} else $this->clean['waiting_groups']='0';
		$str_update.=", `waiting_groups` = '".$this->clean["waiting_groups"]."'";
		
		$db->query("update ".$this->table." set ".$str_update);

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_spam_prevention");
		
		return 1;

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		global $crt_lang;
		if($overwrite || !$sp_settings = $lc_cache->readCache("mod_spam_prevention", $crt_lang)) {

			global $db;
			$sp_settings = $db->fetchAssoc("select * from ".$this->table);
			
			$sp_settings['waiting_groups_array'] = explode(",", $sp_settings['waiting_groups']);
			if($sp_settings['limit_acc_count_from_pages']!='0') {
				$sp_settings['limit_acc_count_from_pages_array'] = explode("|", $sp_settings['limit_acc_count_from_pages']);
			}
			$lc_cache->writeCache("mod_spam_prevention", $sp_settings, $crt_lang);

		}
		return $sp_settings;

	}

	function initTemplatesVals($smarty) {

	}

	function deleteLogsOlderThan($date) {

		global $db;
		$db->query("delete from ".$this->log_table." where `date` < '$date'");

	}
	
	function spamCheck($ip='', $email='', $type) {
 	//$ip='222.186.173.238';
 	//$email='zz16@kunio45.dev256.xyz';

		$sp_settings = $this->getSettings();
	
		if($sp_settings['use_sfs'])
			$this->SFSSpamCheck($sp_settings, $ip, $email, $type);
		if($sp_settings['use_abip'])	
			$this->ABIPSpamCheck($sp_settings, $ip, $type);
		if($sp_settings['use_ipqs'])	
			$this->IPQSSpamCheck($sp_settings, $ip, $email, $type);

		$sp_ret = array();

		// block email
		// email will just be added to block list
		// SFS and IPQS only
		if($this->SFSEmailSpam || $this->IPQSEmailSpam) {
		
			$this->addToLog('', $email, $this->SFSEmailConfidence, '', $this->IPQSEmailConfidence, $type);
		
			// block email
			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_emails.php";
			$be = new blocked_emails();
						
			$info = 'Spam Prevention Module:';
			if($this->SFSEmailSpam) $info.=" Stopforumspam.org,";
			if($this->IPQSEmailSpam) $info.=" IPQualityScore.com";
			$info = trim($info, ",");
			$info = trim($info);

			$be->add($email, $info);
		}
					
		// block ip 
		// ip will be added to block list but it will also return an answer so it can be redirected to access declined page
		// SFS and ABIP
		$is_spam = 0;
		if($this->SFSIPSpam || $this->ABIPSpam || $this->IPQSIPSpam) {
		
			$this->addToLog($ip, '', $this->SFSIPConfidence, $this->ABIPConfidence, $this->IPQSIPConfidence, $type);
			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_ips.php";
			$bi = new blocked_ips();
					
			$info = 'Spam Prevention Module:';
			if($this->SFSIPSpam) $info.=" Stopforumspam.org,";
			if($this->ABIPSpam) $info.=" Abuseipdb.com ,";
			if($this->IPQSIPSpam) $info.=" IPQualityScore.com";
			$info = trim($info, ",");
			$info = trim($info);
			
			if($sp_settings['block_for']==0) 
				$is_spam = $bi->add($ip, $info);
			else
				$is_spam = $bi->addTemporary($ip, $sp_settings['block_for'], $info);
		}
		
		global $lng;
		if($is_spam) $sp_ret = array("field"=>"alert_window", "error" => $lng['general']['access_restricted']);

		return $sp_ret;
	}
	
	
	function SFSSpamCheck($sp_settings, $ip='', $email='', $type) {

		$url = $this->createSFSBaseURL($sp_settings);
	    
		if(isset($ip) && $ip) $url.="&ip=$ip";
		if(isset($email) && $email) $url.="&email=$email";
	

		if(_isCurl()) {
 
			$ch = curl_init();
		
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

			if(curl_error($ch)) return 0;
		
			$data = curl_exec($ch);
			curl_close($ch);

		} else 
			$data = file_get_contents($url);
	      
		if($data) {
	// test data
	//$data = '{"success":1,"email":{"lastseen":"2016-02-24 08:27:00","frequency":1568,"appears":1,"confidence":99.67},"ip":{"lastseen":"2016-02-24 08:27:00","frequency":203,"appears":1,"confidence":97.54}}';
			$response = (array)json_decode($data, true);

			if($email) {
	 
				if( isset($response['email']) && $response['email']['appears']==1 && $sp_settings['sfs_block_limit']<=$response['email']['confidence']) { 
	    
					$this->setSFSEmailSpam();
					$this->setSFSEmailConfidence($response['email']['confidence']);
		 
				} // end spam==1
			} // end if email

			if($ip) {
	 
				if( isset($response['ip']) && $response['ip']['appears']==1 && $sp_settings['sfs_block_limit']<=$response['ip']['confidence']) { 
				
					$this->setSFSIPSpam();
					$this->setSFSIPConfidence($response['ip']['confidence']);
				
				} // end spam=1
			} // end if ip
	 
		} // end if $data
	 
	}
	
 	function ABIPSpamCheck($sp_settings, $ip='', $type) {

		$url = "https://api.abuseipdb.com/api/v2/check?ipAddress=".urlencode($ip);
	    

		if(_isCurl()) {
 
			$ch = curl_init();
		
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Key: '.$sp_settings['abip_api_key'],
				'Accept: application/json'
			));
			
			if(curl_error($ch)) return 0;
		
			$data = curl_exec($ch);
			curl_close($ch);

		}
	      
		if($data) {
			$response = (array)json_decode($data, true);

			if( $sp_settings['abip_block_limit']<=$response['data']['abuseConfidenceScore']) { 
				
				$this->setABIPSpam();
				$this->setABIPConfidence($response['data']['abuseConfidenceScore']);
				
			} // end spam=1
	 
		} // end if $data
	 
	}
	
 	function IPQSSpamCheck($sp_settings, $ip='', $email='', $type) {

		// ip check
		// if block or ipqs_add_user_info
		if($sp_settings['ipqs_block'] || $sp_settings['ipqs_add_user_info']) {
		$url = $this->createIPQSBaseURL($sp_settings, 'ip', $ip);
	    
		if(_isCurl()) {
 
			$ch = curl_init();
		
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			if(curl_error($ch)) return 0;
		
			$data = curl_exec($ch);
			curl_close($ch);

		} else 
			$data = file_get_contents($url);
	      
		if($data) {

			$ip_result = (array)json_decode($data, true);

			if(isset($ip_result['success']) && $ip_result['success'] === true){
	 
				if($sp_settings['ipqs_block'] && ($ip_result['fraud_score'] >= $sp_settings['ipqs_block_limit'])) { 
				
					$this->setIPQSIPSpam();
					$this->setIPQSIPConfidence((int)$ip_result['fraud_score']);
				
				} // end spam=1
				
			} // end if success
	 
		} // end if $data
		} // end if block or ipqs_add_user_info
		
		// check email address
		// if block
		if($sp_settings['ipqs_block']) {
		
		$url = $this->createIPQSBaseURL($sp_settings, 'email', $email);

		$data = null;

		if(_isCurl()) {
 
			$ch = curl_init();
		
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			if(curl_error($ch)) return 0;
		
			$data = curl_exec($ch);
			curl_close($ch);

		} else 
			$data = file_get_contents($url);
	      
		if($data) {

			$email_result = (array)json_decode($data, true);
//_print_r($email_result);
			if(isset($email_result['success']) && $email_result['success'] === true){
	 
				if($email_result['recent_abuse']==1) {
				
					$this->setIPQSEmailSpam();
					$this->setIPQSEmailConfidence(100);
				
				} // end spam=1
			} // end if success
	 
		} // end if $data
		} // end if block
		
		if($sp_settings['ipqs_add_user_info'] && isset($ip_result))
			$this->addUserInfo($ip, $ip_result);
		
	}
	
	function addUserInfo($ip, $result) {

		global $db;
		if(empty($result)) return;
		
		$selected_ip_details = array(
		"proxy"=>$result['proxy'],
		"vpn"=>$result['vpn'],
		"tor"=>$result['tor'],
		"isp"=>$result['ISP'],
		"country_code"=>$result['country_code'],
		"region"=>$result['region'],
		"city"=>$result['city'],
		"is_crawler"=>$result['is_crawler'],
		"mobile"=>$result['mobile'],
		"fraud_score"=>$result['fraud_score'],
		"bot_status"=>$result['bot_status']// Premium Account Feature - Indicates if bots or non-human traffic has 
											//recently used this IP address to engage in automated fraudulent behavior. 
											//Provides stronger confidence that the IP address is suspicious.
		);

		$ip_details = json_encode($selected_ip_details);
		
		$db->query("delete from ".$this->user_info_table." where `ip`='$ip'");
		$db->query("insert into ".$this->user_info_table." set `ip`='$ip', `ip_details` = '$ip_details'");
	
	}

	function getUserInfo($ip) {

		global $db;
		$result = $db->fetchAssoc("select * from ".$this->user_info_table." where `ip`='$ip'");
		if(!$result) return array();
		$user_info = (array)json_decode($result['ip_details'], true);

		return $user_info;
		
	}
	
	function setSFSIPConfidence($confidence) {
		$this->SFSIPConfidence = $confidence;
	}
	
	function setABIPConfidence($confidence) {
		$this->ABIPConfidence = $confidence;
	}

	function setIPQSIPConfidence($confidence) {
		$this->IPQSIPConfidence = $confidence;
	}

	function setSFSEmailConfidence($confidence) {
		$this->SFSEmailConfidence = $confidence;
	}

	function setIPQSEmailConfidence($confidence) {
		$this->IPQSEmailConfidence = $confidence;
	}
	
	function setSFSIPSpam() {
		$this->SFSIPSpam = 1;
	}

	function setABIPSpam() {
		$this->ABIPSpam = 1;
	}

	function setIPQSIPSpam() {
		$this->IPQSIPSpam = 1;
	}

	function setSFSEmailSpam() {
		$this->SFSEmailSpam = 1;
	}

	function setIPQSEmailSpam() {
		$this->IPQSEmailSpam = 1;
	}

	function createSFSBaseURL($sp_settings) {

	  $url = "http://api.stopforumspam.org/api?f=json";
	  
	  if(!$sp_settings['sfs_block_tor_ips']) $url.="&notorexit";
	  if(!$sp_settings['sfs_block_networks']) $url.="&nobadip";
	  
	  return $url;
  
	}
	function createIPQSBaseURL($sp_settings, $type, $request) {

		// type = ip or email
		if($type=="ip") {
		
			$user_agent = $_SERVER['HTTP_USER_AGENT']; 
			
			$user_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
			
			// Set the strictness for this query. (0 (least strict) - 3 (most strict)), default 1
			$strictness = $sp_settings['ipqs_strictness'];
			
			$fast = $sp_settings['ipqs_ip_fast'];

			// You may want to allow public access points like coffee shops, schools, corporations, etc...
			$allow_public_access_points = $sp_settings['ipqs_public_access_points'];

			// Reduce scoring penalties for mixed quality IP addresses shared by good and bad users.
			$lighter_penalties = $sp_settings['ipqs_lighter_penalties'];
			
			// Create parameters array.
			$parameters = array(
				'user_agent' => $user_agent,
				'user_language' => $user_language,
				'strictness' => $strictness,
				'fast' => $fast,
				'allow_public_access_points' => $allow_public_access_points,
				'lighter_penalties' => $lighter_penalties
			);
			
		}
		else { // email type
			/*
			* Set the maximum number of seconds to wait for a reply
			* from an email service provider. If speed is not a concern 
			* or you want higher accuracy we recommend setting this in 
			* the 20 - 40 second range in some cases. Any results which 
			* experience a connection timeout will return the "timed_out" 
			* variable as true. Default value is 7 seconds.
			*/
			$timeout = $sp_settings['ipqs_timeout'];
			
			/*
			* If speed is your major concern set this to true, 
			* but results will be less accurate.
			*/
			$fast = $sp_settings['ipqs_email_fast'];
			
			$parameters = array(
				'timeout' => $timeout,
				'fast' => $fast
			);
		}
		
		// Format Parameters
		$formatted_parameters = http_build_query($parameters);	  
		
		$url = sprintf(
			'https://www.ipqualityscore.com/api/json/'.$type.'/%s/%s?%s', 
			$sp_settings['ipqs_api_key'],
			$request, 
			$formatted_parameters
		);
	  
 	  return $url;
  
	}

	function addToLog($ip='', $email='', $confidence_sfs, $confidence_abip, $confidence_ipqs, $type) {
	
	    global $db;
	    $timestamp = date("Y-m-d H:i:s");
	    $db->query("insert into ".$this->log_table." set `date`='$timestamp', `email`='$email', `ip`='$ip', `confidence_sfs`='$confidence_sfs', `confidence_abip`='$confidence_abip', `confidence_ipqs`='$confidence_ipqs', `type`='$type'");
	    return;
	
	}

	function getNo() {
	
		global $db;
		$no=$db->fetchRow('select count(*) from '.$this->log_table);
		return $no;

	}

	function searchLogs($post_array, $page, $no_per_page) {

		global $db;
		$start=($page-1)*$no_per_page;
		$sp_settings = $this->getSettings();

		$found = 0; $where = '';
		$ext_join = ''; $join_users = '';

		foreach($post_array as $key=>$value) {
			if( !$key || $value=='' ) continue;
			
			switch($key) {
				case "ip": 
				case "email": 
				case "type": 
					if($found) $where.=" and "; else $where = " where ";
					$where .= " ".$this->log_table.".`$key` = '$value' ";
					$found = 1;
				break;
				case "date_from": 
					if($found) $where.=" and "; else $where = " where ";
					$where .= " ".$this->log_table.".`date` >= '$value' ";
					$found = 1;
				break;

				case "date_to": 
					if($found) $where.=" and "; else $where = " where ";
					$where .= " ".$this->log_table.".`date` <= '$value' ";
					$found = 1;
				break;
				case "confidence_from": 
					if($found) $where.=" and "; else $where = " where ";
					
					if($sp_settings['use_sfs'] && $sp_settings['use_abip'])
						$where .= " (".$this->log_table.".`confidence_sfs` >= '$value' or ".$this->log_table.".`confidence_abip` >= '$value') ";
					elseif($sp_settings['use_sfs'])	
						$where .= " ".$this->log_table.".`confidence_sfs` >= '$value' ";
					else 	
						$where .= " ".$this->log_table.".`confidence_abip` >= '$value' ";
					$found = 1;
				break;

				case "confidence_to": 
					if($found) $where.=" and "; else $where = " where ";
					if($sp_settings['use_sfs'] && $sp_settings['use_abip'])
						$where .= " (".$this->log_table.".`confidence_sfs` <= '$value' or ".$this->log_table.".`confidence_abip` <= '$value' ) ";
					elseif($sp_settings['use_sfs'])	
						$where .= " ".$this->log_table.".`confidence_sfs` <= '$value' ";
					else
						$where .= " ".$this->log_table.".`confidence_abip` <= '$value' ";
					$found = 1;
				break;

			}
		}

		$no_logs = $this->getNoLogs($where);
		$this->setNoLogs($no_logs);
		
		global $appearance_settings;
		$date_format=$appearance_settings["date_format_long"];

		$result=$db->fetchAssocList("select *, date_format(".$this->log_table.".`date`,'$date_format') as `date_nice` from ".$this->log_table.$where." order by `date` desc limit $start, $no_per_page");

		return $result;

	}
	
	
	function getNoLogs($where){

		global $db, $settings;
		$sql = "select count(*) 
		from ".$this->log_table.$where;
		$no_logs = $db->fetchRow($sql);

		return $no_logs;
	}

	function setNoLogs($no) {

		$this->no_logs = $no;

	}

	function noLogs() {

		return $this->no_logs;

	}

	function getLogId($id) {
	
		global $db;
		$result = $db->fetchAssoc("select * from ".$this->log_table." where id='$id'" );
		return $result;
		
	}
	
	function unblock($id) {
	
		$logId = $this->getLogId($id);
		
		// unblock email
		if($logId['email']) {

			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_emails.php";
			$be = new blocked_emails();
			$be->deleteEmail($logId['email']);
		
		}
	
		// unblock ip
		if($logId['ip']) {
		
			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_ips.php";
			$bi = new blocked_ips();
			$bi->deleteIP($logId['ip']);

		}

	}

	function whitelist($id) {
	
		$logId = $this->getLogId($id);
		
		// unblock email
		if($logId['email']) {

			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_emails.php";
			$be = new blocked_emails();
			$be->addToWhitelist($logId['email']);
		
		}
	
		// unblock ip
		if($logId['ip']) {
		
			global $config_abs_path;
			require_once $config_abs_path."/classes/blocked_ips.php";
			$bi = new blocked_ips();
			$bi->addToWhitelist($logId['ip']);

		}

	}

	function getDelayInSeconds($crt_usr, $sp_settings) {
	
		global $db;
		$delay = $sp_settings['waiting_time'];
		$current_date = date("Y-m-d H:i:s");
		$seconds = $db->fetchRow("SELECT timestampdiff(SECOND, `date_added`, '$current_date') as seconds from ".TABLE_ADS." where user_id=$crt_usr order by `date_added` desc limit 1 ");

		if(!isset($seconds) || !$seconds) return 0;
		if($seconds/60>$delay) return 0;
		
		return ($delay*60)-$seconds;
	
	}
	
	function getDelayInSecondsNologin($ip, $sp_settings) {
	
		global $db;
		$delay = $sp_settings['waiting_time'];
		$current_date = date("Y-m-d H:i:s");
		$seconds = $db->fetchRow("SELECT timestampdiff(SECOND, `date_added`, '$current_date') as seconds from ".TABLE_ADS." left join ".TABLE_ADS_EXTENSION." on ".TABLE_ADS.".id=".TABLE_ADS_EXTENSION.".id where ip='$ip' order by `date_added` desc limit 1 ");
		
		if(!isset($seconds) || !$seconds) return 0;
		if($seconds/60>$delay) return 0;
		
		return ($delay*60)-$seconds;
	
	}

	function removeOlderAccesses($sp_settings, $ip='') {
	
		global $db, $config_table_prefix;
		$timestamp = date("Y-m-d H:i:s");
		$ip_str='';
		if($ip) $ip_str = " `ip` like '$ip' and";
		$db->query("delete from `".$config_table_prefix."sp_ip_accesses` where ".$ip_str." date_add(`time`, interval {$sp_settings['limit_acc_in_minutes']} minute) < '$timestamp'");

	}
	
	function addAccess($sp_settings, $ip) {
	
		global $db, $config_table_prefix;
		$timestamp = date("Y-m-d H:i:s");
		
		$str_spa="";
		if($sp_settings['limit_same_page_accesses']) {
		
			$crt_url = $_SERVER['REQUEST_URI'];
			
			$this->last_data = $db->fetchAssoc("select `last_url`, `count_same_url` from `".$config_table_prefix."sp_ip_accesses` where `ip`='$ip'");
			if(!empty($this->last_data)) {
				$last_url = $this->last_data['last_url'];
				$count_same_url = $this->last_data['count_same_url'];
				if($last_url!=$crt_url) {
					$str_spa=", `last_url`='$crt_url', `count_same_url`=1";
					$db->query("update `".$config_table_prefix."sp_ip_accesses` set `last_url`='$crt_url', `count_same_url`=1 where `ip`='$ip'");
				}
				else {
					$this->last_data['count_same_url']+=1;
					$db->query("update `".$config_table_prefix."sp_ip_accesses` set `count_same_url`={$this->last_data['count_same_url']} where `ip`='$ip'");
					$str_spa=", `last_url`='$crt_url', `count_same_url`={$this->last_data['count_same_url']}";
				}
			} // if(!empty($this->last_data))
			else {
					$str_spa=", `last_url`='$crt_url', `count_same_url`=1";
					$db->query("update `".$config_table_prefix."sp_ip_accesses` set `last_url`='$crt_url', `count_same_url`=1 where `ip`='$ip'");
					
			}
		
		}
		
		$db->query("insert into `".$config_table_prefix."sp_ip_accesses` set `ip` = '$ip', `time` = '$timestamp'".$str_spa);
	
	}
    function checkAccesses($sp_settings, $ip) {

   		global $db, $config_table_prefix, $lng_sp;
		$timestamp = date("Y-m-d H:i:s");

		$block = 0; $info='';$type='';
		if($sp_settings['limit_accesses']) {

			$accesses = $db->fetchRow("select count(*) from `".$config_table_prefix."sp_ip_accesses` where `ip` like '$ip' and date_add(`time`, interval {$sp_settings['limit_acc_in_minutes']} minute) >= '$timestamp'");

			if($accesses > $sp_settings['limit_acc_more_than_times']) {
				$block = 1;
				$info = $lng_sp['accesses_limit_reached'];
				$type='accesses';
			}
		}
		
		if($sp_settings['limit_same_page_accesses']) {

			$crt_url = $_SERVER['REQUEST_URI'];
			$last_url = $this->last_data['last_url'];
			$count_same_url = $this->last_data['count_same_url'];

			if($crt_url==$last_url && $count_same_url>$sp_settings['limit_spa_more_than_times']) {
				$block = 1;
				$info = $lng_sp['same_page_accesses_limit_reached'];
				$type='sp_accesses';
			}
		}
		
		if($block) {
			$bi = new blocked_ips();
			
			$bi->addTemporary($ip, $sp_settings['limit_acc_block_for'], $info);
		
			$this->addToLog($ip, '', 0, 0, 0, $type);
		} // end if block
		
	}

	function periodic() {

		$sp_settings = $this->getSettings();
		if($sp_settings['limit_accesses']) 
			$this->removeOlderAccesses($sp_settings);
			
	}
}
?>
