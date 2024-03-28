<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class bump {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."bump_settings";

	}
	function getSettings() {

		global $db;
		$ba_settings = $db->fetchAssoc("select * from ".$this->settings_table);
		$ba_settings['price_formatted'] = format_price($ba_settings['price']);
		return $ba_settings;

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
		if(isset($_POST['duration']) && is_numeric($_POST['duration'])) $this->clean['duration'] = $_POST['duration']; else $this->clean['duration'] =3;
		$this->clean['change_posting_date'] = checkbox_value("change_posting_date");

		$db->query("update `".$this->settings_table."` set `duration`= '{$this->clean['duration']}', `price`= '{$this->clean['price']}', `change_posting_date`= '{$this->clean['change_posting_date']}'");

		return 1;
	}

	function initTemplatesVals($smarty) {

		global $smarty;
		$settings = $this->getSettings();
		$smarty->assign("ba_settings", $settings);

		global $crt_lang, $config_abs_path, $lng_ba;
		$lang_file = $config_abs_path."/modules/bump/lang/$crt_lang.php";
		if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/bump/lang/eng.php";
		require_once $lang_file;
		
		$smarty->assign("lng_ba",$lng_ba);
		
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

	function bumpAd($id, $days=0) {
	
		global $db;
		$ba_settings = $this->getSettings();
		$timestamp = date("Y-m-d H:i:s");
		if($ba_settings['change_posting_date']) $str_date = ", `date_added`='$timestamp', `date_updated`='$timestamp'";
		$db->query("update ".TABLE_ADS." set `priority`='100' $str_date where id='$id'");
		
		$res_actions = $db->query("update ".TABLE_ACTIONS." set pending=0 where type like 'bump' and object_id=$id");
		
		$this->addOption($id, $days);
		
		return 1;
	
	}
	
	function addOption($id, $days=0) {
	
		global $db;
		$db->query("delete from ".TABLE_OPTIONS." where `object_id` = $id and `option` like 'bump'");

		$timestamp = date("Y-m-d H:i:s");

		$ba_settings = $this->getSettings();
		if($days) $days_expires = $days;
		else $days_expires = $ba_settings['duration'];

		if($days_expires) $str_expires = " `date_expires` = date_add('$timestamp', interval '$days_expires' day)";
	
		else $str_expires = " `date_expires` = ''";
	
		$db->query("insert into ".TABLE_OPTIONS." set `object_id` = '$id', `option` = 'bump', `date_added` = '$timestamp', $str_expires ");
		
	}
	
}
?>
