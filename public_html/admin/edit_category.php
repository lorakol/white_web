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

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id']; else { header ('Location: manage_categories.php'); exit(0); }
$smarty->assign("id",$id);

$tmp=array();
$cat=new categories();
$cat_config=new categories_config();

$tmp=$cat_config->getCategoryLang($id);

if(isset($_GET['delete_picture'])) {

	$cat_config->deletePicture($id);
	header("Location: edit_category.php?id=".$id);
	exit(0);

}
if(isset($_GET['delete_icon'])) {

	$cat_config->deleteIcon($id);
	header("Location: edit_category.php?id=".$id);
	exit(0);

}
$error='';
if(isset($_POST['Submit'])){

	if(!$cat_config->edit($id)) { 
		$error=$cat_config->getError();
		$tmp=$cat_config->getTmp();
	} else { header ('Location: manage_categories.php'); exit(0); }

}

$short_categories=common::getCachedObject("base_short_categories");
$smarty->assign("array_categories",$short_categories);

$array_sets=fieldsets::getFieldsets();
$smarty->assign("array_sets",$array_sets);

$groups_list = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups_list);

$smarty->assign("tmp",$tmp);
$smarty->assign("error",$error);

$s = new slugs();
$slug = $s->getCategorySlug($id);
$smarty->assign("slug",$slug);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_category.html');

$db->close();
close();
?>
