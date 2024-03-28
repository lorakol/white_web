<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class limit_ads {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."limit_settings";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings() {

		global $db;
		$limit_settings = $db->fetchAssoc("select * from ".$this->settings_table);
		return $limit_settings;

	}

	function saveSettings() {

		global $config_demo, $lng;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;

		$max_ads = escape($_POST['max_ads']);
		$exclude_prioritized = checkbox_value("exclude_prioritized");

		$db->query("update `".$this->settings_table."` set `max_ads`='$max_ads', `exclude_prioritized`='$exclude_prioritized'");

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

}
?>
