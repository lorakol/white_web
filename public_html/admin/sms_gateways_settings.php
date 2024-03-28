<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";

global $config_abs_path;
require_once($config_abs_path."/classes/sms_gateways.php");

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("smenu","sms_gateways");
$smarty->assign("lng",$lng);


global $settings;
$errors_str='';
$successful = 0;

if(isset($_POST['Submit'])){
	$edit_settings=new sms_gateways;

	if(!$edit_settings->editGeneralSettings()) { 
		$errors_str.=$edit_settings->getError();
		$settings=$edit_settings->getTmp();
	}
	else {
		$successful = 1;
	}
} 

if(!isset($_POST['Submit']) || $errors_str=='') { 

	$settings_cl=new sms_gateways(); 
	$settings=$settings_cl->getGeneralSettings(); 
}

$smarty->assign("smsg_settings", $settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('sms_gateways_settings.html');

$db->close();
close();

?>