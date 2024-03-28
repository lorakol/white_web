<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/popular_ads/classes/popular_ads.php';


global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
global $config_admin_folder;
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/popular_ads/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/popular_ads/lang/eng.php";
require_once $lang_file;

global $lng_popular_ads;
$smarty->assign("lng_popular_ads",$lng_popular_ads);

$pa = new popular_ads();
$pa_settings = $pa->getSettings();

$info = '';
$error = '';
$pa->autoCheckLang();
if(isset($_POST['Submit'])) {
	if($pa->saveSettings()) {
		$info=$lng_popular_ads['settings_saved'];
		$pa_settings = $pa->getSettings(1);
	} else {
		$pa_settings = $pa->getTmp();
		$error = $pa->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("pa_settings",$pa_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/popular_ads/index.html');

$db->close();
close();
?>