<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $config_abs_path;
require_once $config_abs_path."/modules/banners_location/classes/banners_location.php";
require_once $config_abs_path."/classes/fields.php";

global $appearance_settings, $config_admin_folder;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/banners_location/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/banners_location/lang/eng.php";
require_once $lang_file;

global $field_name;
global $bl_settings;

$bl = new banners_location();
$bl_settings = $bl->getSettings();

$cf = new fields('cf');
$field_name = cleanStr($cf->getNameByCaption($bl_settings['location_field']));

?>