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

$page = get_numeric("page", 1);
$delete = get_numeric("delete");


if($_POST) {

	$tc = new tag_cloud();
	// actions for multiple items
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(tg)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 2);
		if(!is_numeric($id)) continue;
		if (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) $tc->deleteAll($id);
	}

	if ( isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) // IE image submit fix
	{
		$location="tags.php?page=".$page;
		header("Location: ".$location);
		exit(0);
	}
	// end actions for multiple items
}

global $db;
global $lng;
global $lng_tag_cloud;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_tag_cloud",$lng_tag_cloud);
$smarty->assign("page",$page);
$smarty->assign("smenu",'tags');

$tc = new tag_cloud();
//$settings = $tc->getSettings();
//$smarty->assign("settings",$settings);

$no_per_page = 20;
$array_tags = $tc->getAll($page, $no_per_page);
$smarty->assign("array_tags",$array_tags);

$no = $tc->getNo();
$smarty->assign("no",$no);
$smarty->assign("settings",$settings);

$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no);
$paginator->setAdmin(1);
$paginator->addToPath("/modules/tag_cloud");
$paginator->setNoSeo(1);
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/tag_cloud/tags.html');

$db->close();
close();
?>
