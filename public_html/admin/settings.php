<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once '../classes/images.php';
require_once '../classes/packages.php';
require_once '../classes/settings.php';
require_once '../classes/config/settings_config.php';
require_once '../classes/validator.php';
require_once '../classes/fields.php';
require_once '../classes/groups.php';
require_once "../classes/sms_gateways.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);
$smarty->assign("smenu", "general");

global $settings;
$errors_str='';
$successful = 0;

if(isset($_POST['Submit'])){
	$edit_settings=new settings_config;

	require_once '../classes/categories.php';
	require_once '../classes/locations.php';
	require_once '../classes/depending_fields.php';

	if(!$edit_settings->editSettings()) { 
		$errors_str.=$edit_settings->getError();
		$settings=$edit_settings->getTmp();
	}
	else {
		$successful = 1;
	}
} 

if(!isset($_POST['Submit']) || $errors_str=='') { 

	$settings_cl=new settings_config(); 
	$settings=$settings_cl->getAllLangSettings(); 
}

$smarty->assign("settings",$settings);
$smarty->assign("error",$errors_str);
$smarty->assign("successful", $successful);

$smarty->assign("gmaps",1);

$pkg = new packages;
$plans = $pkg->getAdBasedPlans();
$smarty->assign("plans",$plans);

$cf = new fields("cf");
$fields = $cf->getFieldsOfType("menu,depending");
$smarty->assign("fields",$fields);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('settings.html');

$db->close();
close();
?>
