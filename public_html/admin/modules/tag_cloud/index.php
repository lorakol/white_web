<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "../../../classes/paginator.php";
require_once '../../../modules/tag_cloud/classes/tag_cloud.php';

global $db;
global $lng;
global $lng_tag_cloud;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_tag_cloud",$lng_tag_cloud);
$smarty->assign("smenu",'index');

$tc = new tag_cloud();
$tc_settings = $tc->getSettings();

$info = '';
$error = '';
$tc->autoCheckLang();
if(isset($_POST['Submit'])) {
	$tc->saveSettings();
	$info=$lng_tag_cloud['settings_saved'];
	$smarty->assign("info",$info);
	$tc_settings = $tc->getSettings(1);
}

if(isset($_POST['Add'])) {
	$tc->addExclude();
	$tc_settings = $tc->getSettings();
}

$smarty->assign("tc_settings",$tc_settings);

$db->close();
if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

$smarty->display('modules/tag_cloud/index.html');
close();
?>
