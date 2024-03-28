<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 7.0
	* (c) 2011 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
class pedigree {

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."pedigree_settings";

	}

	function check_form($id='') {

		return 1;

	}

	function add($type, $table, $clean) {

		global $db;
		global $languages;

		if($type=="cf") $fields_array = array("fieldset", "caption", "type", "order_no", "validation_type", "required", "editable", "advanced_search", "quick_search");
		else  $fields_array = array("type", "caption", "order_no", "validation_type", "required", "editable", "groups");

		$fields_array_lang = array("name", "error_message", "info_message");

		$sql = "insert into ".$table." SET ";
		$i=0;
		foreach ($fields_array as $f) {
			if($i) $sql.=", ";
			$sql.=" `$f` = '".$clean["$f"]."'";
			$i++;
		}
		$sql .= ";";

		$res=$db->query($sql);
		$id=$db->insertId();

		// for all languages
		foreach ( $languages as $lang) {

			$lang_id = $lang['id'];
			$sql_lang = "insert into ".$table."_lang SET `id` = $id, `lang_id`='$lang_id' ";
			foreach ($fields_array_lang as $f) {

				if(isset($clean[$f][$lang_id])) $sql_lang.=", `$f` = '".$clean[$f][$lang_id]."'";

			}
			$sql_lang .= ";";
			$res=$db->query($sql_lang);
		}

		if($type=='cf') $alt_table = TABLE_ADS;
		else $alt_table=TABLE_USERS;

		$array_p = array("s", "d", "ss", "sd", "sss", "ssd", "sds", "sdd", "ds", "dd", "dss", "dsd", "dds", "ddd");

		foreach ($array_p as $p) {

			$res_alter=$db->query("alter table `$alt_table` add `pedigree_$p` varchar(100)");

		}

		return 1;

	}

	function delete($type, $caption) {

		global $db;

		if($type=='cf') $alt_table = TABLE_ADS;
		else $alt_table=TABLE_USERS;

		$array_p = array("s", "d", "ss", "sd", "sss", "ssd", "sds", "sdd", "ds", "dd", "dss", "dsd", "dds", "ddd");

		foreach ($array_p as $p) {

			$db->query("alter table ".$alt_table." drop `pedigree_".$p."`");

		}
		return 1;
	}

	function check_form_fields($sett, &$tmp) {

		$ok=1;

		if($sett['required']) {

			if(!isset($_POST['pedigree_s']) || !$_POST['pedigree_s'] || !isset($_POST['pedigree_d']) || !$_POST['pedigree_d']) $ok=0;

		}

		$array_p = array("s", "d", "ss", "sd", "sss", "ssd", "sds", "sdd", "ds", "dd", "dss", "dsd", "dds", "ddd");
		foreach ($array_p as $p) {

			$tmp['pedigree_'.$p] = clean($_POST['pedigree_'.$p]);

		}

		return $ok;
	}

	function add_fields() {

		$sql = '';

		$array_p = array("s", "d", "ss", "sd", "sss", "ssd", "sds", "sdd", "ds", "dd", "dss", "dsd", "dds", "ddd");
		foreach ($array_p as $p) {

			$sql.=", `pedigree_$p` = '".escape($_POST["pedigree_".$p])."'";

		}

		return $sql;

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

	function getSettings() {

		global $db;
		$settings = $db->fetchAssoc("select * from ".$this->settings_table);
		return $settings;

	}


	function saveSettings() {

		global $db;
		$this->clean=array();

		$str_update = '';

		$array_fields = array("sire_field", "dam_field");

		$no = count($array_fields);
		$i=1;
		foreach ($array_fields as $field) {

			$this->clean[$field] = escape($_POST[$field]);
			$str_update.=" `$field` = '".$this->clean[$field]."'";
			if($i<$no) $str_update.=", ";
			$i++;
		}

		$db->query("update ".$this->settings_table." set ".$str_update);

	}

	function getAdvSearch($table, $str) {

		$sql=" (";
		$array_p = array("s", "d", "ss", "sd", "sss", "ssd", "sds", "sdd", "ds", "dd", "dss", "dsd", "dds", "ddd");
		$i = 0;

		foreach ($array_p as $p) {

			if($i) $sql.=" or ";
			$sql.="$table.`pedigree_$p` like '%".$str."%'";
			$i++;

		}

		$sql.=")";
		return $sql;
	}

	function getFieldsArray() {

		$array_p = array("pedigree_s", "pedigree_d", "pedigree_ss", "pedigree_sd", "pedigree_sss", "pedigree_ssd", "pedigree_sds", "pedigree_sdd", "pedigree_ds", "pedigree_dd", "pedigree_dss", "pedigree_dsd", "pedigree_dds", "pedigree_ddd");
		return $array_p;

	}

	function getSearchType() {

		// 1 = exact match
		// 2 = partial match
		return 2;

	}

}
?>
