<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class browse_location {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."browse_location";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		global $crt_lang;
		$lc_cache = new cache();
		if($overwrite || !$bl_settings = $lc_cache->readCache("mod_bl_settings", $crt_lang)) {

			global $db;
			$bl_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$lc_cache->writeCache("mod_bl_settings", $bl_settings, $crt_lang);

		}
		return $bl_settings;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $lng_browse_location;

		global $languages;
		$str_update = "";
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['title_'.$lang_id]) && $_POST['title_'.$lang_id]) $this->tmp['title_'.$lang_id]=escape($_POST['title_'.$lang_id]); else $this->tmp['title_'.$lang_id]='';
			
			$str_update.=" `title_$lang_id` = '".$this->tmp['title_'.$lang_id]."', ";
		}

		if(is_numeric($_POST['no_rows']) && $_POST['no_rows']>=1) $no_rows = $_POST['no_rows']; else $no_rows = 3;
		$arr_types = array("single", "double");
		if(isset($_POST['type']) && in_array($_POST['type'], $arr_types)) $type = $_POST['type']; else $_POST['type'] = "double";

		$field_id = '';

		if($type=="single") {
			if( isset($_POST['location_field']) && is_numeric($_POST['location_field']) ) $field_id = $_POST['location_field'];
			else $this->addError($lng_browse_location['errors']['choose_field']);
		}

		if($type=="double") {
			if( isset($_POST['location_fields']) && is_numeric($_POST['location_fields']) ) { 
				$field_id = $_POST['location_fields'];
			}
			else $this->addError($lng_browse_location['errors']['choose_field']);
		}

		if(!$this->getError()) { 
			$db->query("update `".$this->settings_table."` set $str_update `no_rows` = '$no_rows', `type` = '$type', `field_id` = '$field_id';");
		} 

		$this->tmp['no_rows'] = $no_rows;
		$this->tmp['type'] = $type;

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_bl_settings");
		$lc_cache->clearCache("mod_bl_locations");


		return 1;
	}

	function getBrowseValues($type, $field_id, $no_rows) {

		global $db;
		$result = array();
		if(!$field_id) return;
		global $crt_lang;
		global $settings;

		// single
		if($type == "single") {

			global $config_abs_path;
			require_once($config_abs_path.'/classes/fields.php');

			$cf = new fields("cf");
			$result['caption'] = $cf->getCaption($field_id);

			$elements = $cf->getElementsArray($field_id);
			sort($elements);
			$no_el = count($elements);
			$result['no_elements'] = $no_el;

			$j = 0;
			foreach ($elements as $el) {
				$result['elements'][$j]['el'] = $el;
				// encoded version for url subdomains
				$result['elements'][$j]['encoded_el'] = _urlencode($el, 1, 0, 1);
				$j++;
			}

			$no_each_row = ceil($no_el/$no_rows);
			$result['no_each_row'] = $no_each_row;
			if($no_each_row) {
				if($no_el%$no_each_row) $add = 1; else $add =0;
				$rows = $no_el/$no_each_row + $add;
				$result['percent'] = 100/$rows;
			} else $result['percent'] = 100;

		} else { // double

			global $config_abs_path;
			require_once($config_abs_path.'/classes/depending_fields.php');
			$df = new depending_fields();
			$dep = $df->getDependingField($field_id);
			$table1 = $dep['table1'];
			$table2 = $dep['table2'];
			$result['table1'] = $dep['table1'];
			$result['master_caption'] = $dep['caption1'];
			$result['caption'] = $dep['caption2'];
			global $config_table_prefix;
			
			$arr_table1 = $db->fetchAssocList("select * from ".$config_table_prefix.$table1." where `lang_id` = '$crt_lang' order by `name`");

			$i = 0;
			foreach ($arr_table1 as $row_tab1) {
				$result['values'][$i]['name'] = $row_tab1['name'];
				$result['values'][$i]['encoded_name'] = _urlencode($row_tab1['name']);
				$result['values'][$i]['id'] = $row_tab1['id'];
				$elements = $db->fetchRowList("select `name` from ".$config_table_prefix.$table2." where `dep` = '".$row_tab1['id']."' and `lang_id`='$crt_lang'");
				sort($elements);
				$no_el = count($elements);

				$j = 0;
				$result['values'][$i]['elements'] = array();
				foreach ($elements as $el) {
					$result['values'][$i]['elements'][$j]['el'] = $el;
					// encoded version for url subdomains
					$result['values'][$i]['elements'][$j]['encoded_el'] = _urlencode($el, 1, 0, 1);
					$j++;
				}
				
				$result['values'][$i]['no_elements'] = $no_el;
				$no_each_row = ceil($no_el/$no_rows);
				$result['values'][$i]['no_each_row'] = $no_each_row;
				if($no_each_row) {
					if($no_el%$no_each_row) $add = 1; else $add =0;
					$rows = $no_el/$no_each_row + $add;
					$result['values'][$i]['percent'] = 100/$rows;
				} else $result['values'][$i]['percent'] = 100;
				$i++;
			}
			
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
