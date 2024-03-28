<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once '../classes/settings.php';
require_once("..//classes/fields.php");
require_once '../classes/config/settings_config.php';
require_once '../libs/PHPGangsta/GoogleAuthenticator.php';

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","security");
$smarty->assign("lng",$lng);

$edit_settings=new settings_config;

if(isset($_GET['regenerate_2fa']) && $_GET['regenerate_2fa']==1) { 

	$edit_settings->regenerateAdmin2FAKey();
	header("Location: security_settings.php");
	exit(0);
}

$uf = new fields("uf");
$fields = $uf->getFieldsOfType("phone", "", "", " and `groups`!=-1");
$smarty->assign("fields",$fields);
	
$errors_str='';
$successful = 0;

if(isset($_POST['Submit'])){

	if(!$edit_settings->editSecuritySettings()) { 
		$errors_str.=$edit_settings->getError();
		$security_settings=$edit_settings->getTmp();
	}
	else {
		$successful = 1;
	}
} 

$security_settings=settings::getSecuritySettings(); 

$ga = new PHPGangsta_GoogleAuthenticator();
$qr_code_url = $ga->getQRCodeGoogleUrl($security_settings['2fa_site_title'], $security_settings['admin_2fa_secret']);


$smarty->assign("security_settings",$security_settings);
$smarty->assign("qr_code_url",$qr_code_url);
$smarty->assign("error",$errors_str);
$smarty->assign("successful", $successful);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('security_settings.html');

$db->close();
close();

function gcd($n,$m){
if(!$m)return$n;return gcd($m,$n%$m);
}

?>