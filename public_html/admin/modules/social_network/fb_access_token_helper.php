<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "../../include/lists.php";
require_once '../../../modules/social_networks/classes/social_networks.php';

global $config_abs_path;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/admin/modules/social_networks/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/admin/modules/social_networks/lang/eng.php";
require_once $lang_file;

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_sn",$lng_sn);

$sn = new social_networks();
$sn_settings = $sn->getSettings();

$info = '';
$error = '';

if(!$sn_settings['fb_appid'] || !$sn_settings['fb_secret']) {
	$error = $lng_sn['error']['get_fb_access_token'];
}

// check if curl is installed
if(!_isCurl()) {
	$error = $lng_sn['error']['curl_not_installed'];
}

$smarty->assign("sn_settings",$sn_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/social_networks/fb_access_token_helper.html');

$db->close();
close();
?>
