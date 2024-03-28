<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/credits.php";
require_once "../classes/groups.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id = $_GET['id']; else { header ('Location: payment_settings.php'); exit(0); }

$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);
$smarty->assign("id",$id);

$cr=new credits();
$cr_pkg=$cr->getPackageLang($id);
$errors_str='';
if(isset($_POST['Submit'])){
	if(!$cr->editPackage($id)) { 
		$errors_str=$cr->getError();
		$cr_pkg=$cr->getTmp();
	} else { 
		header("Location: payment_settings.php?processor=credits");
		exit(0);
	}
}

$smarty->assign("cr_pkg",$cr_pkg);
$smarty->assign("error",$errors_str);

$groups_list = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups_list);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_credits_package.html');

$db->close();
close();
?>
