<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 8
	* (c) 2014 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class connect {

	public function __construct() {
		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."connect_settings";
		$this->error = '';
 	}
	function getSettings ($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		if($overwrite || !$connect_settings = $lc_cache->readCache("mod_connect_settings")) {

			global $db;
			global $config_table_prefix, $config_live_site;
			$connect_settings = $db->fetchAssoc("select * from ".$this->settings_table);

			$pos = strpos($config_live_site, "/", 8);
			if($pos) $connect_settings['realm'] = substr($config_live_site,0,$pos);
			else $connect_settings['realm'] = $config_live_site;

			$lc_cache->writeCache("mod_connect_settings", $connect_settings);

		}
		return $connect_settings;

	}

	function initTemplatesVals($smarty) {

		global $lng_connect;
		global $crt_lang, $config_abs_path;
		if(file_exists($config_abs_path.'/modules/connect/lang/'.$crt_lang.'.php'))
			require_once($config_abs_path.'/modules/connect/lang/'.$crt_lang.'.php');
		else 
			require_once($config_abs_path.'/modules/connect/lang/eng.php');

		global $smarty;
		$connect_settings = connect::getSettings();
		$smarty->assign("connect_settings", $connect_settings);
		$smarty->assign("lng_connect", $lng_connect);

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $lng_connect;

		$enable_facebook_login = checkbox_value('enable_facebook_login');
		$enable_google_login = checkbox_value('enable_google_login');
		$enable_openid_login = checkbox_value('enable_openid_login');
		$facebook_app_id = escape($_POST['facebook_app_id']);
		$google_client_id = escape($_POST['google_client_id']);
		if($enable_facebook_login) {
			if(!$facebook_app_id) $this->addError($lng_connect['error']['enter_app_id']."<br/>");
		}
		
		if($enable_google_login) {
			if(!$google_client_id) $this->addError($lng_connect['error']['enter_google_client_id']."<br/>");
		}
		$contact_field = escape($_POST['contact_field']);
		$group_id = escape($_POST['group_id']);

		if(!$this->getError()) { 

			$db->query("update `".$this->settings_table."` set `enable_facebook_login` = '$enable_facebook_login', `enable_google_login` = '$enable_google_login', `enable_openid_login` = '$enable_openid_login', `facebook_app_id` = '$facebook_app_id', `google_client_id` = '$google_client_id', `contact_field` = '$contact_field', `group_id`='$group_id';");
			return 1;
		} 

		$this->tmp['enable_facebook_login'] = $enable_facebook_login;
		$this->tmp['enable_google_login'] = $enable_google_login;
		$this->tmp['enable_openid_login'] = $enable_openid_login;
		$this->tmp['facebook_app_id'] = $facebook_app_id;
		$this->tmp['google_client_id'] = $google_client_id;
		$this->tmp['contact_field'] = $contact_field;
		$this->tmp['group_id'] = $group_id;

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_connect_settings");

		return 0;
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
/*
	function validAccount($user,$passhash) {

		if(!$user) return 0;

		global $db;
		$res=$db->query("select * from ".TABLE_USERS." where `username` like '$user' and (`password` like '$passhash' or auth_provider is not null ) and `active`=1");
		if($db->numRows($res)) return 1;
		return 0;

	}
*/

}
?>
