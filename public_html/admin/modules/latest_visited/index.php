<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/latest_visited/classes/latest_visited.php';


global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/latest_visited/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/latest_visited/lang/eng.php";
require_once $lang_file;

global $lng_latest_visited;
$smarty->assign("lng_latest_visited",$lng_latest_visited);

$lv = new latest_visited();
$lv_settings = $lv->getSettings();

$info = '';
$error = '';
$lv->autoCheckLang();
if(isset($_POST['Submit'])) {
	if($lv->saveSettings()) {
		$info=$lng['settings']['settings_saved'];
		$lv_settings = $lv->getSettings(1);
	} else {
		$lv_settings = $lv->getTmp();
		$error = $lv->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("lv_settings",$lv_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/latest_visited/index.html');

$db->close();
close();
?>