<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class loancalc {

	var $table;
	var $settings_table;

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."loancalc";
		$this->settings_table = $config_table_prefix."loancalc_settings";

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		global $crt_lang;
		$lc_cache = new cache();
		if($overwrite || !$lc_settings = $lc_cache->readCache("mod_lc_settings", $crt_lang)) {

			global $db;
			$lc_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$lc_cache->writeCache("mod_lc_settings", $lc_settings, $crt_lang);

		}
		
		$lc_settings['array_categories_list'] = explode(",", $lc_settings['categories_list']);

		return $lc_settings;

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

	function setInfo($str){

		$this->info = $str;

	}

	function getInfo() {

		return $this->info;

	}

	function getTmp() {
	
		return $this->tmp;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		$this->clean=array();

		$clean['use_trade_in'] = checkbox_value("use_trade_in");

		$str_update = "`use_trade_in` = ".$clean['use_trade_in'];

		$default_array = array("default_ir", "default_term", "default_tax", "default_down");
		foreach($default_array as $key) {

			if(isset($_POST[$key]) && is_numeric($_POST[$key]) && $_POST[$key]>0) $clean[$key] = $_POST[$key]; else $clean[$key]=0;
			$str_update .= ", `$key` = ".$clean[$key];
		}

		//if(isset($_POST['title'])) $clean['title'] = escape($_POST['title']); else $clean['title'] = '';

		global $languages;
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['title_'.$lang_id]) && $_POST['title_'.$lang_id]) $this->tmp['title_'.$lang_id]=escape($_POST['title_'.$lang_id]); else $this->tmp['title_'.$lang_id]='';

			if(isset($_POST['description_'.$lang_id]) && $_POST['description_'.$lang_id]) $this->tmp['description_'.$lang_id]=escape($_POST['description_'.$lang_id]); else $this->tmp['description_'.$lang_id]='';
			
			$str_update.=", `title_$lang_id` = '".$this->tmp['title_'.$lang_id]."' ";
			$str_update.=", `description_$lang_id` = '".$this->tmp['description_'.$lang_id]."' ";
		}

		if(isset($_POST['currency'])) $clean['currency'] = escape($_POST['currency']); else $clean['currency'] = '';

		if(isset($_POST['categories'])) {
			$this->clean['categories_list'] = clean($_POST['categories']);
			$str_update.=", `categories_list` = '".$this->clean['categories_list']."'";
		}

		$db->query("update ".$this->settings_table." set ".$str_update.", `currency` = '".$clean['currency']."'");

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_lc_settings");

		return 1;
	}

	function autoCheckLang() {
		
		global $languages;
		global $db;
		$fields_settings = $db->getTableFields($this->settings_table);

		$default_lang = languages::getDefault();
		if(in_array("title", $fields_settings)) $db->query("alter table ".$this->settings_table." change `title` `title_$default_lang` varchar(100) NULL");
		$fields_settings = $db->getTableFields($this->settings_table);

		if(in_array("description", $fields_settings)) $db->query("alter table ".$this->settings_table." change `description` `description_$default_lang` text");
		$fields_settings = $db->getTableFields($this->settings_table);

		foreach($languages as $lang) {

			$lang_id = $lang['id'];

			if(!in_array("title_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `title_$lang_id` varchar(100) NULL");

			if(!in_array("description_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `description_$lang_id` text");
		}
	}

}
?>