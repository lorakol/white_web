<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class extra_visits {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."ev_settings";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings() {

		global $db;
		$ev_settings = $db->fetchAssoc("select * from ".$this->settings_table);

		return $ev_settings;

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

		if(isset($_POST['no']) && is_numeric($_POST['no']))

			$this->clean['no'] = $_POST['no'];
			
		else 
			$this->clean['no']=10;
			
		$str_update.=" `no` = '".$this->clean['no']."'";

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

	function addFakeVisits($listing_id) {

	    $ev_settings = $this->getSettings();
	    $no = rand(0, $ev_settings['no']-1);
	    
	    if($no==0) return;

	    global $db;
	    $db->query("update ".TABLE_ADS." set `viewed` = `viewed` + ".$no." where `id`='$listing_id'");

	    return;
	
	}

}
?>
