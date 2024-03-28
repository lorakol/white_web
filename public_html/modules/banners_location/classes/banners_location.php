<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class banners_location {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."banners_location";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		if($overwrite || !$banl_settings = $lc_cache->readCache("mod_banl_settings")) {

			global $db;
			$banl_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$lc_cache->writeCache("mod_banl_settings", $banl_settings);

		}
		return $banl_settings;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $lng_banners_location;

		global $languages;

		if( isset($_POST['location_field']) ) $field_id = escape($_POST['location_field']);
		else $this->addError($lng_banners_location['errors']['choose_field']);

		$display_any = checkbox_value("display_any");

		if(!$this->getError()) { 
			$db->query("update `".$this->settings_table."` set `location_field` = '$field_id', `display_any` = '$display_any';");

			// clear cache
			$lc_cache = new cache();
			$lc_cache->clearCache("mod_banl_settings");

			return 1;
		} 


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

}
?>
