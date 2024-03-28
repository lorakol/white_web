<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/rss.php";
require_once '../classes/config/rss_config.php';
require_once "../classes/groups.php";
require_once "../classes/fields.php";

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","tools");
$smarty->assign("lng",$lng);
$smarty->assign("smenu","rss");

$rss = new rss_config();
$error='';
if(isset($_POST['Submit'])){
	if(!$rss->add()) { 
		$error=$rss->getError();
		$tmp=$rss->getTmp();
		$smarty->assign("tmp",$tmp);
	} else { 
		header ('Location: rss.php');
		exit(0);
	}
}

$short_categories=common::getCachedObject("base_short_categories");
$smarty->assign("categories",$short_categories);

$packages = common::getCachedObject("base_short_plans");
$smarty->assign("packages",$packages);

$gr = new groups;
$groups = $gr->getShortGroups();
$smarty->assign("groups", $groups);

$uf = new fields("uf");
$fields = $uf->getFieldsOfType("", "file,image,youtube,google_maps,terms,user_email,username,password");
$smarty->assign("fields",$fields);

$logo_fields = $uf->getFieldsOfType("image");
$smarty->assign("logo_fields",$logo_fields);

$smarty->assign("error",$error);
$smarty->display('add_rss.html');

$db->close();
close();
?>
