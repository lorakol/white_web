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
require_once '../classes/priorities.php';
require_once '../classes/config/priorities_config.php';
require_once '../classes/featured_plans.php';
require_once '../classes/config/featured_plans_config.php';
require_once '../classes/config/settings_config.php';
require_once '../classes/validator.php';
require_once '../classes/settings.php';

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);
$smarty->assign("smenu", "visibility");

$array_options=array("featured", "highlited", "priorities", "video", "urgent", "url");	

if(isset($_GET['delete']) && in_array($_GET['delete'], $array_options)) { 
	$sc=new settings_config;
	$sc->deleteExample($_GET['delete']);
	header("Location: extra_visibility_options.php");
	exit(0);
}

$errors_str='';
$priorities_errors_str='';
if(isset($_POST['Submit'])){
	$sc=new settings_config;
	if(!$sc->editVisibilityOptions()) { 
		$errors_str.=$sc->getError();
		$ads_settings=$sc->getTmp();
	}
	else { 
		header("Location: extra_visibility_options.php");
		exit(0);
	}
} 

if(!isset($_POST['Submit']) || $errors_str=='') { 
	$settings_config=new settings_config(); 
	$ads_settings=$settings_config->getAllLangAdsSettings();
}

$priorities=new priorities();
$tmp=array();
if(isset($_POST['Add'])){
	$priorities_config=new priorities_config();
	if(!$priorities_config->add()) { 
		$priorities_errors_str.=$priorities_config->getError();
		$tmp=$priorities_config->getTmp();
	} else { 
		header("Location: extra_visibility_options.php");
		exit(0);
	}
} 

$array_priorities = common::getCachedObject("base_priorities");

$no_priorities = count($array_priorities);
$smarty->assign("array_priorities",$array_priorities);
$smarty->assign("no_priorities",$no_priorities);

//---------------
$fp=new featured_plans();
$tmp_fp=array();
$featured_errors_str='';
if(isset($_POST['Add_fp'])){
	$featured_plans_config=new featured_plans_config();
	if(!$featured_plans_config->add()) { 
		$featured_errors_str.=$featured_plans_config->getError();
		$tmp_fp=$featured_plans_config->getTmp();
	} else { 
		header("Location: extra_visibility_options.php");
		exit(0);
	}
} 

$array_featured_plans = common::getCachedObject("base_featured_plans");

$no_featured_plans = count($array_featured_plans);
$smarty->assign("array_featured_plans",$array_featured_plans);
$smarty->assign("no_featured_plans",$no_featured_plans);

$smarty->assign("ads_settings",$ads_settings);
$smarty->assign("tmp",$tmp);
$smarty->assign("tmp_fp",$tmp_fp);

$smarty->assign("error",$errors_str);
$smarty->assign("priorities_error",$priorities_errors_str);
$smarty->assign("featured_error",$featured_errors_str);

$short_categories=common::getCachedObject("base_short_categories");
$smarty->assign("categories",$short_categories);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

$smarty->display('extra_visibility_options.html');

$db->close();
close();
?>
