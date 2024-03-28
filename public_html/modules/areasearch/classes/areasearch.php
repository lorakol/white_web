<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class areasearch
{

	var $succeeded = 0;
	var $failed = 0;
	var $error = '';
	var $mod_name = "areasearch";

	public function __construct()
	{

	}

	function getSettings($overwrite=0) {
	
		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		if($overwrite || !$ars_settings = $lc_cache->readCache("mod_areasearch_settings")) {

			global $db;
			global $config_table_prefix;
			$ars_settings = $db->fetchAssoc("select * from ".$config_table_prefix."areasearch_settings");
			$ars_settings['area_list_formatted'] = str_replace(",", "\n", $ars_settings['area_list']);

			$lc_cache->writeCache("mod_areasearch_settings", $ars_settings);

		}
		
		return $ars_settings;
	}

	function saveSettings() {

		global $db;
		global $config_table_prefix;

		$um = escape($_POST['um']);
		if(!$um) $um = 'Km';
		$area_list = trim($_POST['area_list']);
		if($area_list) { 
			$area_list=str_replace("\n", ",", $area_list);
			$area_list=str_replace("\r", "", $area_list);
		}
		// strip multiple signs
		$area_list = preg_replace("/(\,){2,}/",'$1',$area_list);
		$area_list = escape($area_list);
		$db->query("update ".$config_table_prefix."areasearch_settings set `um`='$um', `area_list`='$area_list'");

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_areasearch_settings");

		return 1;
	}

	function distance($zipOne,$zipTwo)
	{
		global $config_table_prefix;
		global $db;

		$res1 = $db->query("SELECT * FROM ".$config_table_prefix."zipcodes WHERE zipcode like '$zipOne'");
	
		if(!$db->numRows($res1)) {
			return "First Zip Code not found";
		} else {
			$row=$db->fetchAssocRes($res1);
			$lat1 = $row['lat'];
			$lon1 = $row['lon'];
		}

		$res2 = $db->query("SELECT * FROM ".$config_table_prefix."zipcodes WHERE zipcode like '$zipTwo'");
	
		if(!$db->numRows($res2)) {
			return "Second Zip Code not found";
		} else {
			$row=$db->fetchAssocRes($res2);
			$lat2 = $row['lat'];
			$lon2 = $row['lon'];
		}

	       /* Convert all the degrees to radians */
		$lat1 = $this->deg_to_rad($lat1);
		$lon1 = $this->deg_to_rad($lon1);
		$lat2 = $this->deg_to_rad($lat2);
		$lon2 = $this->deg_to_rad($lon2);

		/* Find the deltas */
		$delta_lat = $lat2 - $lat1;
		$delta_lon = $lon2 - $lon1;

		/* Find the Great Circle distance */
		$temp = pow(sin($delta_lat/2.0),2) + cos($lat1) * cos($lat2) * pow(sin($delta_lon/2.0),2);

		$EARTH_RADIUS = 3956;
		$distance = $EARTH_RADIUS * 2 * atan2(sqrt($temp),sqrt(1-$temp));
//echo "km:".$distance."<br>";
		$distance = $this->km_to_miles ($distance);
		return $distance;

	}


	function deg_to_rad($deg)
	{
		$radians = 0.0;
		$radians = $deg * M_PI/180.0;
		return($radians);
	}

	function getCoord($zip) {

		global $config_table_prefix, $db;
		$zip = str_replace(" ", "", $zip);
		$res = $db->query("SELECT * FROM ".$config_table_prefix."zipcodes WHERE replace(zipcode, ' ', '') like replace ('$zip', ' ', '')");
		
		$array = array();
		if($db->numRows($res)>0) {
			$row=$db->fetchAssocRes($res);
			$array['lat'] = $row['lat'];
			$array['lon'] = $row['lon'];
			return $array;
		}
		return 0;
	}

	function inradius($zip,$radius)
	{

	global $config_table_prefix, $db;
	//$radius = $this->miles_to_km($radius);

	$zip_nospace = $this->strip_spaces($zip);
	if($zip_nospace!=$zip) $add = "or zipcode like '$zip_nospace'";


	$res = $db->query("SELECT * FROM ".$config_table_prefix."zipcodes WHERE (zipcode like '$zip' $add )");
        if($db->numRows($res)>0) {
		$row=$db->fetchAssocRes($res);
		$lat = $row['lat'];
		$lon = $row['lon'];
		
		$res1=$db->query("SELECT zipcode FROM ".$config_table_prefix."zipcodes WHERE (POW((69.1*(lon-\"$lon\")*cos($lat/57.3)),\"2\")+POW((69.1*(lat-\"$lat\")),\"2\"))<($radius*$radius) " );
		if($db->numRows($res1)>0) {
		$zipArray = array();
                while($row1 = $db->fetchAssocRes($res1)) {
			$zipArray[$i]=$row1["zipcode"];
			$i++;
		} // end while
		} // end if
        } else return 0;

	$array = array();
	$array['lat'] = $lat;
	$array['lon'] = $lon;
	$array['zip'] = $zipArray;

	return $array;
	}


	function miles_to_km ($miles) {
	
		return $miles*1.609;
		
	}

	function km_to_miles ($km) {
	
		return $km/1.609;
		
	}

	function Import() {

		global $db;
		global $lng_areasearch;
		global $config_abs_path;
		global $config_table_prefix;

		global $config_demo;
		if($config_demo==1) { $this->addError($lng['general']['errors']['demo'].'<br />'); return 0; }

		if(!isset($_POST['column_separator']) || !$_POST['column_separator']) { $this->addError($lng_areasearch['errors']['column_separator']); return 0;}

		if((!isset($_POST['country']) || !$_POST['country']) && (!isset($_POST['other_country']) || !$_POST['other_country'])) { $this->addError($lng_areasearch['errors']['country_missing']); return 0;}

		$column_separator = $_POST['column_separator'];
		switch ($column_separator) {
		case '\t':
			$column_separator = "\t";
			break;
		case '\r':
			$column_separator = "\r";
			break;
		case '\n':
			$column_separator = "\n";
			break;
		}

		if(isset($_POST['field_separator']) && $_POST['field_separator']) $field_separator = clean($_POST['field_separator']);
		else $field_separator = '';

		if(isset($_POST['country']) && $_POST['country']) $country = escape($_POST['country']);
		else $country = escape($_POST['other_country']);

		if(!isset($_POST['zip_order']) || !$_POST['zip_order'] || !isset($_POST['lat_order']) || !$_POST['lat_order'] || !isset($_POST['lon_order']) || !$_POST['lon_order']) { $this->addError($lng_areasearch['errors']['invalid_order']); return 0;}

		$zip_order = escape($_POST['zip_order']);
		$lat_order = escape($_POST['lat_order']);
		$lon_order = escape($_POST['lon_order']);

		// upload file
		if(isset($_FILES['import_file']['name']) && $_FILES['import_file']['name']) $file_name = $_FILES['import_file']['name']; 
		else { $this->addError($lng_areasearch['errors']['upload_import_file']); return 0;}

		// check if extension is the type
		$ext = getExtension($file_name);
		if($ext != "csv" && $ext!="txt") { $this->addError($lng_areasearch['errors']['incorrect_file_type']); return 0;}

		$dir = $config_abs_path."/temp/";
		if(!move_uploaded_file($_FILES['import_file']['tmp_name'], $dir.$file_name)) {
			$this->addError($lng_areasearch['errors']['could_not_upload_file']); 
			return 0;
		}

		$fp= @fopen($dir.$file_name, "r") ;
		if(!$fp) {
			$this->addError($lng_areasearch['errors']['could_not_open_file']);
			return 0;
		}

		$no_fields = 3;
		$row = 0;
		if($field_separator) {
		//while (($data = fgetcsv($fp, 4096, $column_separator, $field_separator)) !== FALSE) {
		while ($line = fgets($fp, 4096)) {
			$data = explode($column_separator, $line);
			$num = count($data);
			if($num<=1) continue; // empty line
			if($num<$no_fields) { $this->addError($lng_areasearch['errors']['incorrect_data_count'].$row); return 0; }
			$db->query("INSERT INTO ".$config_table_prefix."zipcodes set `zipcode` = '".trim($this->strip_spaces($data[($zip_order-1)]), $field_separator)."', `country`='$country', `lat` = '".trim($data[($lat_order-1)], $field_separator)."', `lon` = '".trim($data[($lon_order-1)], $field_separator)."'");
			$this->succeeded++;
		}
		} else {
		
		while (($data = fgetcsv($fp, 4096, "$column_separator")) !== FALSE) {
			$num = count($data);
			if($num<=1) continue; // empty line
			if($num<$no_fields) { $this->addError($lng_areasearch['errors']['incorrect_data_count'].$row); return 0; }
			$db->query("INSERT INTO ".$config_table_prefix."zipcodes set `zipcode` = '".$this->strip_spaces($data[($zip_order-1)])."', `country`='$country', `lat` = '".$data[($lat_order-1)]."', `lon` = '".$data[($lon_order-1)]."'");
			$this->succeeded++;
		}
		}
		@fclose($fp);

		return 1;
	}

	function getError() {
	
		return $this->error;

	}

	function addError($str) {

		$this->error.=	$str;

	}

	function setError($str) {

		$this->error =	$str;

	}

	function getSucceeded() {
	
		return $this->succeeded;

	}

	function getZipcodes($page, $ads_per_page=60,$country='') {

		global $db;
		global $config_table_prefix;

		$start=($page-1)*$ads_per_page;
		if($country) $where = " where `country` like '$country'"; else $where='';
		$result = $db->fetchAssocList("select * from ".$config_table_prefix."zipcodes$where limit $start, $ads_per_page");
		return $result;

	}

	function delete($delete) {

		global $db;
		global $config_table_prefix;
		$db->query("delete from ".$config_table_prefix."zipcodes where `zipcode` like '$delete'");
		return 1;

	}

	function deleteCountry($delete) {

		global $db;
		global $config_table_prefix;
		if($delete) $db->query("delete from ".$config_table_prefix."zipcodes where `country` like '$delete'");
		else $db->query("delete from ".$config_table_prefix."zipcodes");
		return 1;

	}

	function getNo($country='') {

		global $db;
		global $config_table_prefix;
		$where='';
		if($country) $where=" where `country` like '$country'";
		$no = $db->fetchRow("select count(*) from ".$config_table_prefix."zipcodes".$where);
		return $no;

	}

	function Add() {

		global $db;
		global $lng_areasearch;
		global $config_abs_path;
		global $config_table_prefix;

		global $config_demo;
		if($config_demo==1) $this->addError($lng['general']['errors']['demo'].'<br />');

		if(!isset($_POST['zipcode']) || !$_POST['zipcode']) $this->addError($lng_areasearch['errors']['zipcode_missing'].'<br>');
		if(!isset($_POST['latitude']) || !$_POST['latitude']) $this->addError($lng_areasearch['errors']['latitude_missing'].'<br>');
		if(!isset($_POST['longitude']) || !$_POST['longitude']) $this->addError($lng_areasearch['errors']['longitude_missing'].'<br>');
		if((!isset($_POST['un_country']) || !$_POST['un_country']) && (!isset($_POST['un_other_country']) || !$_POST['un_other_country'])) $this->addError($lng_areasearch['errors']['country_missing'].'<br>');
	
		if($this->error) return 0;

		$zipcode = $this->strip_spaces(escape($_POST['zipcode']));
		$latitude = escape($_POST['latitude']);
		$longitude = escape($_POST['longitude']);
		if(isset($_POST['un_country']) && $_POST['un_country']) $country = escape($_POST['un_country']);
		else $country = escape($_POST['un_other_country']);
		$res = $db->query("insert into ".$config_table_prefix."zipcodes set `zipcode`='$zipcode', `lat`='$latitude', `lon` = '$longitude', `country`='$country'");

		return 1;
	}

	function initTemplatesVals($smarty) {

		global $smarty;
		$areasearch_settings = areasearch::getSettings();
		$smarty->assign("areasearch_settings", $areasearch_settings);
		$area_list = explode(",",$areasearch_settings['area_list']);
		$smarty->assign("area_list", $area_list);

	}

	function strip_spaces($str) {

		return str_replace(" ", "", $str);

	}

	function getCountries() {

		global $db;
		global $config_table_prefix;
		$arr = $db->fetchRowList("select `country` from ".$config_table_prefix."zipcodes group by country");
		return $arr;
	}

}
?>
