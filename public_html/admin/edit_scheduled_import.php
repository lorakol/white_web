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

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id = $_GET['id']; else { header ('Location: scheduled_imports.php'); exit(0); }

$smarty->assign("tab","tools");
$smarty->assign("smenu", "scheduled_imports");
$smarty->assign("lng",$lng);
$smarty->assign("id",$id);

$si=new scheduled_imports;
$simport = $si->getScheduledImport($id);

$errors_str='';
if(isset($_POST['Submit'])){
	if(!$si->edit($id)) { 
		$errors_str=$si->getError();
		$simport=$si->getTmp();
	} else { 
		header("Location: scheduled_imports.php");
		exit(0);
	}
}
$smarty->assign("simport",$simport);

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

$u = new users;
$group = $u->getGroup($simport['user_id']);
$categories=common::getCachedObject("base_short_categories", array("group" => $group));
$smarty->assign("categories",$categories);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_scheduled_import.html');

$db->close();
close();
?>
