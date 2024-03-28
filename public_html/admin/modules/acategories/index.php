<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "../../../classes/categories.php";
require_once '../../../modules/acategories/classes/acategories.php';

global $db;
global $lng;

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/acategories/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/acategories/lang/eng.php";
require_once $lang_file;

global $lng_ac;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_ac",$lng_ac);

$ac = new acategories();

$ac->autoCheckLang();

$ac_settings = $ac->getSettings();

$categories = common::getCachedObject("base_short_categories");
$smarty->assign("categories",$categories);

if(isset($_POST['Submit'])) {
	$ac->saveSettings();
	$ac_settings = $ac->getSettings();
}
$smarty->assign("ac_settings",$ac_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/acategories/index.html');

$db->close();
close();
?>
