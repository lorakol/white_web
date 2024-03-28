<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $config_abs_path;
require_once $config_abs_path."/modules/acategories/classes/acategories.php";
global $ac_settings;
$ac = new acategories();
$ac_settings = $ac->getSettings();

?>
