<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once '../classes/import_export.php';
require_once '../classes/listings.php';
require_once '../classes/users.php';
require_once '../classes/images.php';
require_once "../classes/validator.php";
require_once '../classes/packages.php';
require_once '../classes/groups.php';

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","tools");
$smarty->assign("lng",$lng);
$smarty->assign("smenu", "import");

$ie = new import_export;
$ie->setPurpose("import");
$ad_templates = $ie->getAdTemplatesStr();
$user_templates = $ie->getUserTemplatesStr();
$smarty->assign("ad_templates",$ad_templates);
$smarty->assign("user_templates",$user_templates);

$templates = $ie->getAdTemplates();
$smarty->assign("templates",$templates);

$plans = common::getCachedObject("base_short_plans");
$smarty->assign("plans",$plans);

$short_categories=common::getCachedObject("base_short_categories");
$smarty->assign("categories",$short_categories);

$usr = new users();
$no_users = $usr->getNo();
if($no_users<=100) {
	$users = $usr->getAll();
	$smarty->assign("users",$users);
}
$smarty->assign("no_users",$no_users);

$gr = new groups;
$groups = $gr->getShortGroups();
$smarty->assign("groups", $groups);

$error_csv=''; $info_csv ='';
$post=0;
$csv_import_id = 0;
$xml_import_id = 0;

if(isset($_POST['CSV_import'])){

	$ie->setType("csv");
	$ie->setData($_POST['csv_import_type']);
	$csv_import_id = $ie->Import(); 
	$error_csv = $ie->getError();
	$smarty->assign("data",$_POST['csv_import_type']);

} 

$error_xml=''; $info_xml ='';
if(isset($_POST['XML_import'])){

	$ie->setType("xml");
	$ie->setData($_POST['xml_import_type']);
	$xml_import_id = $ie->Import(); 
	$error_xml = $ie->getError();
	$smarty->assign("data",$_POST['xml_import_type']);

} 

$smarty->assign("error_xml",$error_xml);
$smarty->assign("info_xml",$info_xml);

$smarty->assign("error_csv",$error_csv);
$smarty->assign("info_csv",$info_csv);

$smarty->assign("csv_import_id",$csv_import_id);
$smarty->assign("xml_import_id",$xml_import_id);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('import.html');

$db->close();
close();
?>
