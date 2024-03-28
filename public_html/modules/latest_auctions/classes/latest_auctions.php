<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class latest_auctions {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."latest_auctions";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		if($overwrite || !$la_settings = $lc_cache->readCache("mod_la_settings")) {

			global $db;
			$la_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$lc_cache->writeCache("mod_la_settings", $la_settings);

		}
		return $la_settings;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $lng_latest_auctions;

		global $languages;
		$str_update = "";
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['title_'.$lang_id]) && $_POST['title_'.$lang_id]) $this->clean['title_'.$lang_id]=escape($_POST['title_'.$lang_id]); else $this->clean['title_'.$lang_id]='';
			
			$str_update.=" `title_$lang_id` = '".$this->clean['title_'.$lang_id]."', ";
		}

		if(is_numeric($_POST['no_ads']) && $_POST['no_ads']>=1) $no_ads = $_POST['no_ads']; else $no_ads = 6;

		if(!$this->getError()) {
	
			$db->query("update `".$this->settings_table."` set $str_update `no_ads` = '$no_ads';");
			return 1;
		} 

		$this->tmp['title'] = $title;
		$this->tmp['no_ads'] = $no_ads;

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_la_settings");

		return 0;
	}


	function getAuctions($la_settings, $where_str = '') {

		global $settings, $ads_settings;
		
		if(!$ads_settings['enable_auctions']) return array();
		
		$locations_str="";
		if($settings['enable_locations'])
			$locations_str = locations::makeQueryStr();

		$listing = new listings();
		$start=0;
		$ads_per_page = $la_settings['no_ads'];
		$where = " where ".TABLE_ADS.".active = 1 and `auction`=1 ";
                $where .= $where_str.$locations_str;
		$order_by_str="order by `date_updated` desc ";
		$result=$listing->getShortListings($where,$order_by_str,'',$start,$ads_per_page);

		global $config_abs_path, $crt_usr;
		require_once $config_abs_path."/classes/auctions.php";
		$ac = new auctions;
		$i = 0;
		foreach($result as $row) {
		
		    $result[$i]['auction'] = $ac->getAuctionForAd($row['id']);
		    $i++;
		}

		return $result;

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
		$changed=0;

		$default_lang = languages::getDefault();
		if(in_array("title", $fields_settings)) { 
		  $db->query("alter table ".$this->settings_table." change `title` `title_$default_lang` varchar(100) NULL");
		  $changed=1;
		}
		$fields_settings = $db->getTableFields($this->settings_table);

		foreach($languages as $lang) {
			$lang_id = $lang['id'];
			if(!in_array("title_".$lang['id'], $fields_settings)) { 
			  $db->query("alter table ".$this->settings_table." add `title_$lang_id` varchar(100) NULL");
			  $changed=1;
			}
		}

		if($changed) {
		  // clear cache
		  $lc_cache = new cache();
		  $lc_cache->clearCache("mod_la_settings");
		}
	
	}

}
?>
