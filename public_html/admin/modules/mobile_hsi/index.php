<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/mobile_hsi/classes/mobile_hsi.php';
global $config_abs_path;
require_once $config_abs_path.'/classes/images.php';

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $appearance_settings, $config_admin_folder;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/mobile_hsi/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/mobile_hsi/lang/eng.php";
require_once $lang_file;

$mhsi = new mobile_hsi();
$icons = $mhsi->getIcons();

if(isset($_GET['delete']) && is_numeric($_GET['delete'])) { 
	$mhsi->deleteIcon($_GET['delete']);
	header("Location: index.php");
	exit(0);

}


global $lng_news;
$smarty->assign("lng_mobile_hsi",$lng_mobile_hsi);

$error='';
$successful = 0;

if(isset($_POST['Submit']) && $_POST['Submit']) {

	$error='';
	if(!$mhsi->saveSettings()) { 

		$error=$mhsi->getError();
		$smarty->assign("error", $error);

	}
	else {
		$successful = 1;
	}

}

if(!isset($_POST['Submit']) || $error=='') { 

	$icons = $mhsi->getIcons();

}

$smarty->assign("icons", $icons);
$smarty->assign("successful", $successful);
$smarty->assign("error", $error);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/mobile_hsi/index.html');

$db->close();
close();
?>