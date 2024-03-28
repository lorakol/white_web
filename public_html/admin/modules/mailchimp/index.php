<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/mailchimp/classes/mailchimp.php';


global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/mailchimp/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/mailchimp/lang/eng.php";
require_once $lang_file;

global $lng_mailchimp;
$smarty->assign("lng_mailchimp",$lng_mailchimp);

$mcp = new mailchimp();
$mcp_settings = $mcp->getSettings();

$info = '';
$error = '';
if(isset($_POST['Submit'])) {
	if($mcp->saveSettings()) {
		$info=$lng['settings']['settings_saved'];
		$mcp_settings = $mcp->getSettings(1);
	} else {
		$mcp_settings = $mcp->getTmp();
		$error = $mcp->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("mcp_settings",$mcp_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/mailchimp/index.html');

$db->close();
close();
?>