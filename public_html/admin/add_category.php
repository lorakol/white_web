<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/categories.php";
require_once "../classes/config/categories_config.php";
require_once "../classes/images.php";
require_once "../classes/fieldsets.php";
require_once "../classes/groups.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);

$error='';
$tmp=array();
$cat=new categories();
$cat_config=new categories_config();
if(isset($_POST['Submit'])){
	if(!$cat_config->add()) { 
		$error=$cat_config->getError();
		$tmp=$cat_config->getTmp();
	} else { 
		header ('Location: manage_categories.php');
		exit(0);
	}
}

$array_subcats=array();
$short_categories=common::getCachedObject("base_short_categories");
$smarty->assign("array_categories",$short_categories);

$array_sets=fieldsets::getFieldsets();
$smarty->assign("array_sets",$array_sets);

$groups_list = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups_list);

$smarty->assign("tmp",$tmp);
$smarty->assign("error",$error);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_category.html');

$db->close();
close();
?>
