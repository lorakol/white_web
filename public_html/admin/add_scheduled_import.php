<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once '../classes/scheduled_imports.php';
require_once '../classes/users.php';
require_once '../classes/import_export.php';
require_once '../classes/packages.php';
require_once '../classes/categories.php';

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

$smarty->assign("lng",$lng);
$smarty->assign("tab","tools");
$smarty->assign("smenu", "scheduled_imports");

$simport=array();
$errors_str='';
if(isset($_POST['Submit'])){
	$si=new scheduled_imports;
	if(!$si->add()) { 
		$errors_str=$si->getError();
		$simport=$si->getTmp();
	} else {
		header ('Location: scheduled_imports.php');
		exit(0);
	}
}

$smarty->assign("simport",$simport);
$smarty->assign("error",$errors_str);

$ie = new import_export();
$templates = $ie->getAdTemplates();
$smarty->assign("templates",$templates);

$usr = new users();
$no_users = $usr->getNo();
if($no_users<=100) {
	$users = $usr->getAll();
	$smarty->assign("users",$users);
}
$smarty->assign("no_users",$no_users);

$plans = common::getCachedObject("base_short_plans");
$smarty->assign("plans",$plans);

$categories=common::getCachedObject("base_short_categories");
$smarty->assign("categories",$categories);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_scheduled_import.html');

$db->close();
close();
?>
