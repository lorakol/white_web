<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
class tag_cloud {

	var $table;
	var $settings_table;


	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."tag_cloud_searches";
		$this->settings_table = $config_table_prefix."tag_cloud";

	}

	function initTemplatesVals($smarty) {

	}

	function delete($id) {

		global $db;

		$word = $db->fetchRow("select `word` from `".$this->table."` where `id` = '$id' ");

		$res_del=$db->query("delete from ".$this->table." where `id` = '$id'");

		// decrement for this word for all possible existing words
		$db->query("update `".$this->table."` set `no` = `no`-1 where `word` like '".escape($word)."' ");

		return 1;
	}

	function deleteAll($id) {

		global $db;

		$word = $db->fetchRow("select `word` from `".$this->table."` where `id` = '$id' ");
		$db->query('delete from '.$this->table.' where `word` like "'.escape($word).'"');
//echo $word; exit(0);
		return 1;
	}

	function add($string) {

		global $db;

		$tc_settings = $this->getSettings();

		// get slashes back
		$string = str_replace("_", "/", $string);

		if($tc_settings['split_tags']) {
			// explode in words
			$keywords = preg_split('/\P{L}+/u', $string);
		}
		else $keywords = array($string);

		// set default timezone
		setTimezone();

		// add to database
		foreach ($keywords as $key) {
			
			$key = trim($key);
			if(strstr($key, "http://") || strstr($key, "https://")) continue;
			$exclude = $this->prepareExcludeStr($tc_settings['exclude']);
			$array_exclude = explode(",", $exclude);

			if(strlen($key)<$tc_settings['min_letters'] || in_array($key, $array_exclude)) continue;

			$timestamp = date("Y-m-d H:i:s");

			// check if already exists
			$no = 1;
			$exists = $db->fetchRow("select count(*) from `".$this->table."` where `word` like '$key' ");
			if($exists)  {
				$no = $no+$exists;
				$db->query("update `".$this->table."` set `no` = `no`+1 where `word` like '$key' ");
			}
			$db->query("insert into `".$this->table."` set `word` = '$key', `date` = '$timestamp', `no`='$no'");

		}

		return 1;

	}

	function prepareExcludeStr($str) {

		$exclude = str_replace('\n',' ',$str);
		$exclude = str_replace('\r',' ',$exclude);
		$exclude = preg_replace("/ +/", " ", $exclude);
		$exclude = str_replace(" ", "", $exclude);
		return $exclude;
	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered
		global $crt_lang;
		$lc_cache = new cache();
		if($overwrite || !$tc_settings = $lc_cache->readCache("mod_tc_settings", $crt_lang)) {

			global $db;
			$tc_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$lc_cache->writeCache("mod_tc_settings", $tc_settings, $crt_lang);

		}
		return $tc_settings;

	}

	function getTitle() {

		global $db, $crt_lang;
		$title = $db->fetchRow("select `title_$crt_lang` from ".$this->settings_table);
		return $title;

	}

	function getPeriod() {

		global $db;
		$period = $db->fetchRow("select `period` from ".$this->settings_table);
		return $period;

	}

	function saveSettings() {

		global $db;

		global $languages;
		$str_update = "";
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['title_'.$lang_id]) && $_POST['title_'.$lang_id]) $this->tmp['title_'.$lang_id]=escape($_POST['title_'.$lang_id]); else $this->tmp['title_'.$lang_id]='';

			$str_update.=" `title_$lang_id` = '".$this->tmp['title_'.$lang_id]."', ";
		}

		$split_tags = checkbox_value("split_tags");
		if(is_numeric($_POST['period']) && $_POST['period']>=1) $period = $_POST['period']; else $period = 0;
		if(is_numeric($_POST['min_letters']) && $_POST['min_letters']>=1) $min_letters = $_POST['min_letters']; else $min_letters = 1;
		$exclude = escape($_POST['exclude']);
		if(isset($_POST['no_tags']) && $_POST['no_tags']>0) $no_tags = escape($_POST['no_tags']); else $no_tags = 50;

		$exclude = $this->prepareExcludeStr($exclude);

		global $config_table_prefix;
		$db->query("update `".$this->settings_table."` set $str_update `period` = '$period', `min_letters` = '$min_letters', `exclude` = '$exclude', `no_tags` = '$no_tags', `split_tags` = '$split_tags';");

		// delete already existing exclude words:
		$array_exclude = explode(",", $exclude);
		foreach($array_exclude as $ex) {
			$res = $db->query("delete from ".$this->table." where word like '$ex'");
		}

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_tc_settings");

		return 1;
	}

	function getTags() {

		global $db;
		$settings = $this->getSettings();

		$keywords = $db->fetchAssocList("select distinct `word`, `no` from ".$this->table." order by `no` desc limit 0, ".$settings['no_tags']);

		$no = count($keywords);
		if(!$no) return array();

		$max = $keywords[0]['no'];

		shuffle($keywords);

		$i = 0;
		foreach($keywords as $key) {
			$percent = floor(($key['no'] / $max) * 100);
    			// determine the class for this term based on the percentage
			if ($percent <20)
			{
				$keywords[$i]['class'] = 'tc_smallest';
			} elseif ($percent>= 20 && $percent <40) {
				$keywords[$i]['class'] = 'tc_small';
			} elseif ($percent>= 40 && $percent <60) {
				$keywords[$i]['class'] = 'tc_medium';
			} elseif ($percent>= 60 && $percent <80) {
				$keywords[$i]['class'] = 'tc_large';
			} else {
				$keywords[$i]['class'] = 'tc_largest';
			}
			$i++;
		}

		return $keywords;
	}

	function periodic() {

		global $db;

		$period = $this->getPeriod();
		if(!$period) return 1;

		$current_date = date("Y-m-d");

		$dn1 = $period+1;
		$date_x_days_from_now_start = $db->fetchRow("select date_sub('$current_date', INTERVAL $dn1 DAY)");
		$date_x_days_from_now_end = $db->fetchRow("select date_sub('$current_date', INTERVAL $period DAY)");

		$sql = "select id from ".$this->table." where `date` between '$date_x_days_from_now_start' and '$date_x_days_from_now_end'";

		$res = $db->query($sql);
		while($t = $db->fetchRowRes($res) ) {

			$this->delete($t);

		}

		return 1;

	}

	function getAll($page,$no_per_page) {

		global $db;

		global $appearance_settings;
		$date_format=$appearance_settings["date_format"];

		$start=($page-1)*$no_per_page;
		$result=$db->fetchAssocList("select `word`, id, no from ".$this->table." group by `word` order by `date` desc limit $start, $no_per_page");
		return $result;
	}

	function getNo() {

		global $db;
		$no=$db->fetchRow("select count(distinct `word`) from ".$this->table);
		return $no;

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
