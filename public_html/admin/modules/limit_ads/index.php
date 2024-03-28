<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/limit_ads/classes/limit_ads.php';

global $db;
global $lng;

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/limit_ads/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/limit_ads/lang/eng.php";
require_once $lang_file;

global $lng_ac;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_limit",$lng_limit);

$limit = new limit_ads();

$limit_settings = $limit->getSettings();

$packages = common::getCachedObject("base_short_plans");
$smarty->assign("packages",$packages);

if(isset($_POST['Submit'])) {
	$limit->saveSettings();
	$limit_settings = $limit->getSettings();
}
$smarty->assign("limit_settings",$limit_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/limit_ads/index.html');

$db->close();
close();
?>
