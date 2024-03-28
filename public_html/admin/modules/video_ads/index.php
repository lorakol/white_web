<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/video_ads/classes/video_ads.php';


global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/video_ads/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/video_ads/lang/eng.php";
require_once $lang_file;

global $lng_video_ads;
$smarty->assign("lng_video_ads",$lng_video_ads);

$va = new video_ads();
$va_settings = $va->getSettings();

$info = '';
$error = '';
$va->autoCheckLang();
if(isset($_POST['Submit'])) {
	if($va->saveSettings()) {
		$info=$lng_video_ads['settings_saved'];
		$va_settings = $va->getSettings(1);
	} else {
		$va_settings = $va->getTmp();
		$error = $va->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("va_settings",$va_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/video_ads/index.html');

$db->close();
close();
?>