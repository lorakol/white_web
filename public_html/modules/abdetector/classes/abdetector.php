<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class abdetector {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."abd_settings";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings() {

		global $db;
		$abd_settings = $db->fetchAssoc("select * from ".$this->settings_table);
		return $abd_settings;

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
			if(isset($_POST['message_'.$lang_id]) && $_POST['message_'.$lang_id]) $this->tmp['message_'.$lang_id]=escape($_POST['message_'.$lang_id]); else $this->tmp['message_'.$lang_id]='';

			$str_update.=" `message_$lang_id` = '".$this->tmp['message_'.$lang_id]."',";
		}

		$str_update = trim($str_update, ",");

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
		if(in_array("message", $fields_settings)) $db->query("alter table ".$this->settings_table." change `message` `message_$default_lang` text");
		$fields_settings = $db->getTableFields($this->settings_table);

		foreach($languages as $lang) {
			$lang_id = $lang['id'];
			if(!in_array("message_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `message_$lang_id` text");
		}
	}

}
?>
