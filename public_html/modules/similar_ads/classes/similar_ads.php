<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 8
	* (c) 2014 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class similar_ads {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct() {

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."similar_ads";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		global $crt_lang;
		$lc_cache = new cache();
		if($overwrite || !$sm_settings = $lc_cache->readCache("mod_similar_settings", $crt_lang)) {

			global $db;
			$sm_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$sm_settings['match_fields_array'] = explode(",", $sm_settings['match_fields']);
			$lc_cache->writeCache("mod_similar_settings", $sm_settings, $crt_lang);

		}
		return $sm_settings;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $lng_similar_ads;

		global $languages;
		$str_update = "";
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['title_'.$lang_id]) && $_POST['title_'.$lang_id]) $this->clean['title_'.$lang_id]=escape($_POST['title_'.$lang_id]); else $this->clean['title_'.$lang_id]='';
			
			$str_update.=" `title_$lang_id` = '".$this->clean['title_'.$lang_id]."', ";
		}

		if(is_numeric($_POST['no_ads']) && $_POST['no_ads']>=1) $no_ads = $_POST['no_ads']; else $no_ads = 4;
		if(is_numeric($_POST['no_ads_on_row']) && $_POST['no_ads_on_row']>=1) $no_ads_on_row = $_POST['no_ads_on_row']; else $no_ads_on_row = 4;
		$match_category = checkbox_value("match_category");
		$match_fields = '';
		$i = 0;
		if(isset($_POST['match_fields'])) {
		while($_POST['match_fields'][$i] && $_POST['match_fields'][$i]!='') {
			if($i) $match_fields.=',';
			$match_fields .= escape($_POST['match_fields'][$i]);
			$this->tmp['match_fields'][$i] = $_POST['match_fields'][$i];
			$i++;
		}
		}

		if(!$this->getError()) {
	
			$db->query("update `".$this->settings_table."` set $str_update `no_ads` = '$no_ads', `no_ads_on_row` = '$no_ads_on_row', `match_category` = '$match_category', `match_fields` = '$match_fields';");
			return 1;
		} 

		$this->tmp['title'] = $title;
		$this->tmp['no_ads'] = $no_ads;
		$this->tmp['no_ads_on_row'] = $no_ads_on_row;
		$this->tmp['match_category'] = $match_category;

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_similar_settings");

		return 0;
	}


	function getSimilar($ssettings, $listing_array) {

		global $settings, $db;

		$locations_str="";
		if($settings['enable_locations'])
			$locations_str = locations::makeQueryStr();

		$listing = new listings();
		$ads_per_page = $ssettings['no_ads'];

		$where = " where ".TABLE_ADS.".active like 1 ";

		if($ssettings['match_category']) $where .= " and ".TABLE_ADS.".category_id='".$listing_array['category_id']."'";

		if($ssettings['match_fields']) { 
			$fields = explode(",", $ssettings['match_fields']);
			foreach($fields as $f) {
				if(!$listing_array[$f]) continue;
				$where.=" and ".TABLE_ADS.".$f='".escape($listing_array[$f])."' ";
			}
		}

                $where .= " and ".TABLE_ADS.".id !='".$listing_array['id']."'".$locations_str;


		// solution to avoid order by rand() 

		$total_similar = $db->fetchRow("select count(*) from ".TABLE_ADS." ".$where);

		if($total_similar<=$ads_per_page) {

			$result=$listing->getShortListings($where,"","",0,0);
			return $result;

		}

		// more than $no_featured results
		$t = $total_similar - $ads_per_page;
		$start = rand(0,$t);

		$result=$listing->getShortListings($where,"","",$start,$ads_per_page);
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

		$default_lang = languages::getDefault();
		if(in_array("title", $fields_settings)) $db->query("alter table ".$this->settings_table." change `title` `title_$default_lang` varchar(100) NULL");
		$fields_settings = $db->getTableFields($this->settings_table);

		foreach($languages as $lang) {
			$lang_id = $lang['id'];
			if(!in_array("title_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `title_$lang_id` varchar(100) NULL");
		}
	}

}
?>
