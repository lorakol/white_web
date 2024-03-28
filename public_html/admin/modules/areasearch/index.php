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
require_once '../../../modules/areasearch/classes/areasearch.php';

$page = get_numeric("page", 1);
if(isset($_GET['delete'])) $delete = escape($_GET['delete']) ; else $delete='';
if(isset($_GET['country'])) $country = escape($_GET['country']) ; else $country='';

global $db;
global $lng;
global $lng_areasearch;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_areasearch",$lng_areasearch);
$smarty->assign("page",$page);
$smarty->assign("country",$country);

$areas = new areasearch();
$ars_settings = $areas->getSettings();

if($delete) {
	$areas->delete($delete);
	header("Location: index.php?page=".$page);
	exit(0);
}

$info = '';
$error = '';
if(isset($_POST['Submit'])) {
	$areas->saveSettings();
	$info=$lng_areasearch['settings_saved'];
	$smarty->assign("info",$info);
	$ars_settings = $areas->getSettings(1);
}

if(isset($_POST['Import'])) {
	$result = $areas->Import();
	if($result) $info=$areas->getSucceeded().' '.$lng_areasearch['records_added'];
	else $error = $areas->getError();
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

if(isset($_POST['Add'])) {
	$add_error='';
	$result = $areas->Add();
	if($result) $info=$lng_areasearch['record_added'];
	else $add_error = $areas->getError();
	$smarty->assign("info",$info);
	$smarty->assign("add_error",$add_error);
}

if(isset($_POST['Delete'])) {
	$areas->deleteCountry(escape($_POST['delete_country']));
	$info_delete = $lng_areasearch['zipcodes_deleted'];
	$smarty->assign("info_delete",$info_delete);
	header("Location: index.php");
	exit(0);
}

$countries = $areas->getCountries();
$smarty->assign("countries",$countries);

$zipcodes = $areas->getZipcodes($page,60,$country);
$no_records = $areas->getNo($country);
$smarty->assign("zipcodes",$zipcodes);
$smarty->assign("no_records",$no_records);
$smarty->assign("ars_settings",$ars_settings);

$no_per_page = 60;
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_records);
$paginator->setAdmin(1);
$paginator->addToPath("/modules/areasearch");
$paginator->setNoSeo(1);
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/areasearch/index.html');

$db->close();
close();
?>
