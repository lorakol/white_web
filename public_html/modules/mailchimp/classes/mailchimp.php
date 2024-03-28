<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class mailchimp {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."mailchimp";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		if($overwrite || !$mcp_settings = $lc_cache->readCache("mod_mcp_settings")) {

			global $db;
			$mcp_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$lc_cache->writeCache("mod_mcp_settings", $mcp_settings);

		}
		return $mcp_settings;

	}

	function check_form () {

		global $lng;
		global $lng_mailchimp;

		global $crt_usr, $settings;

		if( empty($_POST['api_key'])) $this->addError($lng_mailchimp['error']['api_key']."<br/>");
		if( empty($_POST['list_id'])) $this->addError($lng_mailchimp['error']['list_id']."<br/>");

		return 1;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $lng_mailchimp;

		$this->check_form();

		if($this->getError()) return 0;

		$this->clean['api_key']  = escape($_POST['api_key']);
		$this->clean['list_id']  = escape($_POST['list_id']);
		
		$this->clean['subscribe_on_register'] = checkbox_value("subscribe_on_register");
		$this->clean['subscribe_on_contact'] = checkbox_value("subscribe_on_contact");
		
		$db->query("update `".$this->settings_table."` set `api_key`='{$this->clean['api_key']}', `list_id`='{$this->clean['list_id']}', `subscribe_on_register`='{$this->clean['subscribe_on_register']}', `subscribe_on_contact`='{$this->clean['subscribe_on_contact']}' ;");

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_mcp_settings");

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
