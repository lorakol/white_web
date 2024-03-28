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
require_once '../../../modules/auto_repost/classes/auto_repost.php';

global $db;
global $lng;

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/auto_repost/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/auto_repost/lang/eng.php";
require_once $lang_file;

$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("smenu",'settings');
$smarty->assign("lng",$lng);
$smarty->assign("lng_repost",$lng_repost);

$rp = new auto_repost();

$groups = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups);

$rp_settings = $rp->getSettings();

if(isset($_POST['Submit'])) {
	$rp->saveSettings();
	$rp_settings = $rp->getSettings(1);
	
}

$smarty->assign("rp_settings",$rp_settings);

global $limited_permissions;
$smarty->assign("limited_permissions",$limited_permissions);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/auto_repost/settings.html');

$db->close();
close();
?>
