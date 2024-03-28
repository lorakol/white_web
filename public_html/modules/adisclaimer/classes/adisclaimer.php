<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class adisclaimer {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."ad_settings";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings() {

		global $db;
		$ad_settings = $db->fetchAssoc("select * from ".$this->settings_table);

		foreach ($ad_settings as $key=>$value) {
			$row[$key] = clean($value);
		}

		return $ad_settings;

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
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['disclaimer_'.$lang_id]) && $_POST['disclaimer_'.$lang_id]) $this->tmp['disclaimer_'.$lang_id]=escape($_POST['disclaimer_'.$lang_id]); else $this->tmp['disclaimer_'.$lang_id]='';
			
			$str_update.=" `disclaimer_$lang_id` = '".$this->tmp['disclaimer_'.$lang_id]."', ";
		}

		if(isset($_POST['cookie_availability']) && is_numeric($_POST['cookie_availability'])) $this->clean['cookie_availability'] = $_POST['cookie_availability']; else $this->clean['cookie_availability'] =30;
		$str_update.=" `cookie_availability`= '{$this->clean['cookie_availability']}'";

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

	function autoCheckLang() {
		
		global $languages;
		global $db;
		$fields_settings = $db->getTableFields($this->settings_table);

		$default_lang = languages::getDefault();
		if(in_array("disclaimer", $fields_settings)) $db->query("alter table ".$this->settings_table." change `disclaimer` `disclaimer_$default_lang` text");
		$fields_settings = $db->getTableFields($this->settings_table);

		foreach($languages as $lang) {
			$lang_id = $lang['id'];
			if(!in_array("disclaimer_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `disclaimer_$lang_id` text");
		}
	}

}
?>
