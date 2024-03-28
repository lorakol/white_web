<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class linkify {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."linkify_settings";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings() {

		global $db;
		$lnk_settings = $db->fetchAssoc("select * from ".$this->settings_table);

		foreach ($lnk_settings as $key=>$value) {
			$row[$key] = clean($value);
		}

		$lnk_settings['groups_array'] = explode(",", $lnk_settings['groups']);
		return $lnk_settings;

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

		$this->clean['all'] = checkbox_value("all");
		$this->clean['featured'] = checkbox_value("featured");
		$this->clean['prioritized'] = checkbox_value("prioritized");

		$str_update .= " `all` = '{$this->clean['all']}', `featured` = '{$this->clean['featured']}', `prioritized` = '{$this->clean['prioritized']}', ";
		
		$i = 0;
		$this->clean['groups']="";
		while (isset($_POST['groups'][$i]) && $f=escape($_POST['groups'][$i])){
			if($i) $this->clean['groups'].=',';
			$this->clean['groups'].=$f;
			$i++;
		}
		$str_update .= " `groups` = '{$this->clean['groups']}' ";


		$db->query("update `".$this->settings_table."` set $str_update");


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
