<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 8
	* (c) 2014 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class mobile_hsi
{

	public function __construct() {
	
		$this->error = '';
		$this->err = 0;

	}

	function getError() {
	
		return $this->error;

	}

	function addError($str) {

		$this->error.=$str;
		$this->err = 1;

	}

	function setError($str) {

		$this->error=$str;

	}

	function hasError() {

		return $this->err;

	}

	function deleteIcon($size) {

		global $db, $config_table_prefix;
		$db->query("update ".$config_table_prefix."mobile_hsi set `icon".$size."` = '';");
		return 1;

	}

	function check_form() {

		global $lng_mobile_hsi, $lng, $config_abs_path;

		$array_sizes = array(60, 76, 120, 152, 180, 128, 192);

		foreach ($array_sizes as $size) {
		
			if(isset($_FILES['icon'.$size]['name']) && $_FILES['icon'.$size]['name']) {
				$this->icon[$size]=new image('icon'.$size,$config_abs_path.'/images','hsi');
				$this->icon[$size]->setTypes(array("png"));
				if(!$this->icon[$size]->verify()) $this->addError( str_replace("##SIZE##", $size, $lng_mobile_hsi['icon_size']).": ".$this->icon[$size]->getError()."<br/>");
			}
			else $this->icon[$size] = 0; 
		}


	}

	function saveSettings() {

		global $config_table_prefix;
		$this->clean=array();
		$this->check_form();
		if($this->hasError()) return 0;

		$array_sizes = array(60, 76, 120, 152, 180, 128, 192);
		$sql_update = '';

		foreach ($array_sizes as $size) {
		
			if(!$this->icon[$size]) continue;
			
			if($this->icon[$size]->upload()) { 
				$this->clean['icon'][$size]=$this->icon[$size]->getUploadedFile();
			}
			else  $this->addError($this->icon[$size]->getError());
			
			$sql_update.="icon".$size." = '{$this->clean['icon'][$size]}' ,";
		}

		global $db;
		$sql_update = rtrim($sql_update, ",");
		$db->query("update `".$config_table_prefix."mobile_hsi` set ".$sql_update );

		return 1;

	}

	function getIcons() {

		global $db, $config_table_prefix;

		$result = $db->fetchAssoc("select *
			from ".$config_table_prefix."mobile_hsi");

		return $result;

	}

	

}

?>