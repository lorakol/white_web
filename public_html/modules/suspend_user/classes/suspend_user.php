<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class suspend_user {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."suspend_user";

	}
	function getSettings() {

		global $db;
		$su_settings = $db->fetchAssoc("select * from ".$this->settings_table);
		return $su_settings;

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

		if(isset($_POST['days']) && is_numeric($_POST['days'])) $this->clean['days'] = $_POST['days']; else $this->clean['days'] =3;

		$db->query("update `".$this->settings_table."` set `days`= '{$this->clean['days']}'");

		return 1;
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

	function suspend($id, $days=0) {
	
		global $db;
		$su_settings = $this->getSettings();
		if(!$days) $days = $su_settings['days'];
		
		$timestamp = date("Y-m-d H:i:s");
		$db->query("update ".TABLE_USERS." set `suspended`='1', active=0, `date_unsuspend` = date_add('$timestamp', interval '{$days}' day) where id='$id'");
		
		return 1;
	
	}

	function ban($id) {
	
		global $db;
		$su_settings = $this->getSettings();
		
		$db->query("update ".TABLE_USERS." set `suspended`='1', active=0 where id='$id'");
		
		return 1;
	
	}

	function unsuspend($id) {
	
		global $db;
		$su_settings = $this->getSettings();
		$db->query("update ".TABLE_USERS." set `suspended`='0', active=1, `date_unsuspend` = null where id='$id'");
		
		return 1;
	
	}
	
	function periodic() {

		global $db;
		$su_settings = $this->getSettings();
		
		$timestamp = date("Y-m-d H:i:s");
	
		$sql = "select id from ".TABLE_USERS." where `active`=0 and `suspended`=1 and date_unsuspend <= '$timestamp'";

		$res = $db->query($sql);
		while($l = $db->fetchRowRes($res) ) {
		    $this->unsuspend($l);
		}
	}
}
?>
