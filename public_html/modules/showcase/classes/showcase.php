<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class showcase {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."showcase_settings";

	}
	function getSettings() {

		global $db;
		$sw_settings = $db->fetchAssoc("select * from ".$this->settings_table);
		$sw_settings['price_formatted'] = format_price($sw_settings['price']);
		return $sw_settings;

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

		if(isset($_POST['price']) && is_numeric($_POST['price'])) $this->clean['price'] = $_POST['price']; else $this->clean['price'] =0;
		if(isset($_POST['no_on_page']) && is_numeric($_POST['no_on_page'])) $this->clean['no_on_page'] = $_POST['no_on_page']; else $this->clean['no_on_page'] =5;

		$db->query("update `".$this->settings_table."` set `no_on_page`= '{$this->clean['no_on_page']}', `price`= '{$this->clean['price']}'");

		return 1;
	}

	function initTemplatesVals($smarty) {

		global $smarty;
		$sw_settings = $this->getSettings();
		$smarty->assign("sw_settings", $sw_settings);

		global $crt_lang, $config_abs_path,$lng_sw;
		$lang_file = $config_abs_path."/modules/showcase/lang/$crt_lang.php";
		if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/showcase/lang/eng.php";
		require_once $lang_file;

		$smarty->assign("lng_sw",$lng_sw);
		
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

	function enableShowcase($id) {
	
		global $db;
		$sw_settings = $this->getSettings();
		$timestamp = date("Y-m-d H:i:s");
		$db->query("update ".TABLE_USERS." set `showcase`='1' where id='$id'");
		
		$res_actions = $db->query("update ".TABLE_ACTIONS." set pending=0 where type like 'showcase' and object_id=$id");
		
		$this->addOption($id);
		
		return 1;
	
	}
	
	function addOption($id) {

		global $db;
		$db->query("delete from ".TABLE_OPTIONS." where `object_id` = $id and `option` like 'showcase'");

		$timestamp = date("Y-m-d H:i:s");

		$sw_settings = $this->getSettings();
	
		$str_expires = " `date_expires` = null";
	
		$db->query("insert into ".TABLE_OPTIONS." set `object_id` = '$id', `option` = 'showcase', `date_added` = '$timestamp', $str_expires ");
		
	}

	function removeOption($id) {
	
		global $db;
		$db->query("delete from ".TABLE_OPTIONS." where `object_id` = $id and `option` like 'showcase'");
		
	}

	function addToShowcase($id) {
	
	    global $db;
	    $db->query("update ".TABLE_ADS." set `showcase`=1 where id='$id'");
	}

	function removeFromShowcase($id) {
	
	    global $db;
	    $db->query("update ".TABLE_ADS." set `showcase`=0 where id='$id'");
	}
	
	function getShowcaseAds($user_id) {
	
	    global $db;
	    
	    $sw_settings = $this->getSettings();
	    $where=" where `showcase`=1 and `user_id`='$user_id'";
	    $l = new listings();
	    $showcase_ads = $l->getShortListings($where, "order by rand()", "", 0, $sw_settings['no_on_page']);
	    return $showcase_ads;

	}


}
?>
