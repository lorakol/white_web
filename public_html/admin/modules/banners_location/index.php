<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/banners_location/classes/banners_location.php';
require_once "../../../classes/fields.php";
require_once "../../../classes/depending_fields.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);


global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/banners_location/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/banners_location/lang/eng.php";
require_once $lang_file;

$smarty->assign("lng_banners_location",$lng_banners_location);

$bl = new banners_location();
$bl_settings = $bl->getSettings();

$cf = new fields("cf");
$fields = $cf->getIndividualFields();
$smarty->assign("fields",$fields);
//_print_r($fields);
$info = '';
$error = '';
if(isset($_POST['Submit'])) {
	if($bl->saveSettings()) {
		$info=$lng_browse_location['settings_saved'];
		$bl_settings = $bl->getSettings(1);
	} else {
		$bl_settings = $bl->getTmp();
		$error = $bl->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("bl_settings",$bl_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/banners_location/index.html');

$db->close();
close();
?>
