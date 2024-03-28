<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/packages.php";
require_once "../classes/config/packages_config.php";
require_once "../classes/priorities.php";
require_once "../classes/featured_plans.php";
require_once "../classes/categories.php";
require_once "../classes/groups.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

$smarty->assign("lng",$lng);
$smarty->assign("tab","listings");

$package=array();
$errors_str='';
if(isset($_POST['Submit'])){
	$pkg=new packages_config;
	if(!$pkg->add()) { 
		$errors_str=$pkg->getError();
		$package=$pkg->getTmp();
	} else {
		header ('Location: manage_packages.php');
		exit(0);
	}
}

$smarty->assign("package",$package);
$smarty->assign("error",$errors_str);

$groups_list = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups_list);

$array_priorities = common::getCachedObject("base_priorities");
$smarty->assign("array_priorities",$array_priorities);

$array_featured_plans = common::getCachedObject("base_featured_plans");
$smarty->assign("array_featured_plans",$array_featured_plans);

$short_categories=common::getCachedObject("base_short_categories");
$smarty->assign("categories",$short_categories);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_package.html');

$db->close();
close();
?>
