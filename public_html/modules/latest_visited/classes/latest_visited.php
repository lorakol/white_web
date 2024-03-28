<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class latest_visited {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."latest_visited";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		if($overwrite || !$lv_settings = $lc_cache->readCache("mod_lv_settings")) {

			global $db;
			$lv_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$lc_cache->writeCache("mod_lv_settings", $lv_settings);

		}
		return $lv_settings;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $lng_latest_visited;

		global $languages;
		$str_update = "";
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['title_'.$lang_id]) && $_POST['title_'.$lang_id]) $this->clean['title_'.$lang_id]=escape($_POST['title_'.$lang_id]); else $this->clean['title_'.$lang_id]='';
			
			$str_update.=" `title_$lang_id` = '".$this->clean['title_'.$lang_id]."', ";
		}

		if(is_numeric($_POST['no_ads']) && $_POST['no_ads']>=1) $no_ads = $_POST['no_ads']; else $no_ads = 6;
		if(is_numeric($_POST['no_extended']) && $_POST['no_extended']>=1) $no_extended = $_POST['no_extended']; else $no_extended = 100;
		if(is_numeric($_POST['days_keep']) && $_POST['days_keep']>=1) $days_keep = $_POST['days_keep']; else $days_keep = 60;
		$show_on_index = checkbox_value("show_on_index");
		$show_on_search = checkbox_value("show_on_search");
		$show_on_details = checkbox_value("show_on_details");
		$show_extended = checkbox_value("show_extended");

		if(!$this->getError()) {
	
			$db->query("update `".$this->settings_table."` set $str_update `no_ads` = '$no_ads', `show_on_search`=$show_on_search, `show_on_details`=$show_on_details, `show_on_index`=$show_on_index, `show_extended`=$show_extended, `no_extended`=$no_extended, `days_keep`=$days_keep ;");
			return 1;
		} 

		$this->tmp['title'] = $title;
		$this->tmp['no_ads'] = $no_ads;
		$this->tmp['no_extended'] = $no_extended;
		$this->tmp['show_on_index'] = $show_on_index;
		$this->tmp['show_on_search'] = $show_on_search;
		$this->tmp['show_on_details'] = $show_on_details;
		$this->tmp['show_extended'] = $show_extended;
		$this->tmp['days_keep'] = $days_keep;

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_lv_settings");

		return 0;
	}


	function getLatestVisited($where_str, $page, $no_per_page) {

		
		if(isset($_COOKIE['ox_latest_visited_id']) && $_COOKIE['ox_latest_visited_id']) { 
			$lv_id = $_COOKIE['ox_latest_visited_id'];
		}
		
		global $settings, $ads_settings, $config_table_prefix;
		
		$locations_str="";
		if($settings['enable_locations'])
			$locations_str = locations::makeQueryStr();

		$listing = new listings();
		$start=($page-1)*$no_per_page;
		$where = " where ".TABLE_ADS.".active = 1";
		$where .= $where_str.$locations_str;
		$order_by_str = "order by ".$config_table_prefix."latest_visited_ads.`date`";
		
		$join = "right join `".$config_table_prefix."latest_visited_ads` on ".$config_table_prefix."ads.id = ".$config_table_prefix."latest_visited_ads.ad_id";
		
		$result=$listing->getShortListings($where,$order_by_str,'desc',$start, $no_per_page, '', '', $join);
		return $result;

	}
	
	function getNoLatestVisited(){ 
	
	
		if(isset($_COOKIE['ox_latest_visited_id']) && $_COOKIE['ox_latest_visited_id']) { 
			$lv_id = $_COOKIE['ox_latest_visited_id'];
		}
		
		global $settings, $ads_settings, $config_table_prefix;
		
		$locations_str="";
		if($settings['enable_locations'])
			$locations_str = locations::makeQueryStr();

		$listing = new listings();
		
		$where = " where ".TABLE_ADS.".active = 1";
		$where .= $locations_str;
		
		$join = "right join `".$config_table_prefix."latest_visited_ads` on ".$config_table_prefix."ads.id = ".$config_table_prefix."latest_visited_ads.ad_id";

		$no = $listing->getNoShortListings($where, $join);
		return $no;
	
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
		  $lc_cache->clearCache("mod_lv_settings");
		}
	
	}

	function periodic() {
	
		$lv = new latest_visited();
		$lv_settings = $lv->getSettings();

		global $db, $config_table_prefix;
		
		$days = $lv_settings['days_keep'];
		$current_date = date("Y-m-d");

		$dn1 = $days+1;
		$date_x_days_before = $db->fetchRow("select date_sub('$current_date', INTERVAL $dn1 DAY)");

		$db->query("delete from ".$config_table_prefix."latest_visited_ads where `date` < '$date_x_days_before'");
		
		
	}

	function add($lv_settings, $id, $ad_id) {
	
		global $db, $config_table_prefix;
		
		if(!$id) $id = $this->makeId();
		$exists = $db->fetchRow("select count(*) from ".$config_table_prefix."latest_visited_ads where id=$id and `ad_id`=$ad_id");
		if(!$exists) { 
			$timestamp = date("Y-m-d H:i:s");
			$db->query("insert into ".$config_table_prefix."latest_visited_ads set id=$id, `ad_id`=$ad_id, `date`='$timestamp'");
			if($lv_settings['no_extended']!=0 && $exists>$lv_settings['no_extended']) {
				$to_delete = $exists-$lv_settings['no_extended'];
				$db->query("delete from ".$config_table_prefix."latest_visited_ads where id=$id order by `date` desc limit $to_delete");
			}
			
		}
		return $id;
	
	}
	
	function makeId() {
		global $db, $config_table_prefix;
		$last = $db->fetchRow("select id from ".$config_table_prefix."latest_visited_ads order by id desc limit 1");
		if(!$last) return 1;
		return $last+1;
	}

	function deleteAd($ad_id) {
	
		global $db, $config_table_prefix;
		
		$db->query("delete from ".$config_table_prefix."latest_visited_ads where `ad_id`=$ad_id");
		return ;
	
	}

}
?>
