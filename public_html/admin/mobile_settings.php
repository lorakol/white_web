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
require_once '../classes/config/settings_config.php';
require_once '../classes/settings.php';

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);
$smarty->assign("smenu", "mobile");

if(isset($_GET['delete']) && $_GET['delete']=="mobile_header_pic") { 
	$sc=new settings_config;
	$sc->deleteMobileHeaderPic();
	header("Location: mobile_settings.php");
	exit(0);

}

$errors_str='';
$successful = 0;
if(isset($_POST['Submit'])){
	$sc=new settings_config;
	if(!$sc->editMobileSettings()) { 
		$errors_str.=$sc->getError();
		$mobile_settings=$sc->getTmp();
	} else {
		$successful = 1;
	}

} 

if(!isset($_POST['Submit']) || $errors_str=='') { 
	$settings=new settings; 
	$mobile_settings=$settings->getMobileSettings();
}

$smarty->assign("mobile_settings",$mobile_settings);

$templates_dir = dir("../templates_mobile");
$i=0;
global $config_abs_path;
while ($folder = $templates_dir->read()) {
	if($folder != '..' && $folder != '.' && is_dir($config_abs_path."/templates_mobile/".$folder)) { $templates[$i]= $folder; $i++; }
} closedir($templates_dir->handle);

$smarty->assign("templates",$templates);


$smarty->assign("error",$errors_str);
$smarty->assign("successful", $successful);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('mobile_settings.html');

$db->close();
close();
?>
