<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/spam_prevention/classes/spam_prevention.php';


global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/spam_prevention/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/spam_prevention/lang/eng.php";
require_once $lang_file;

global $lng_sp;
$smarty->assign("lng_sp",$lng_sp);

$sp = new spam_prevention();
$sp_settings = $sp->getSettings();

$error = '';
if(isset($_POST['Submit'])) {

	if(!$sp->saveSettings()) { 
		$errors_str=$sp->getError();
		$smarty->assign("error",$errors_str);
	} else { 
		$sp_settings = $sp->getSettings(1);
	}
	
}

$smarty->assign("sp_settings",$sp_settings);

$groups_list = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups_list);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/spam_prevention/settings.html');

$db->close();
close();
?>