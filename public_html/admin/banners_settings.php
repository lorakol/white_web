<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/banners.php";
require_once "../classes/config/banners_config.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","banners");
$smarty->assign("lng",$lng);

$bc=new banners_config();
$array_banners=$bc->getAllPositions();
$smarty->assign("array_banners",$array_banners);

if(isset($_GET['disable_impressions']) && $_GET['disable_impressions']==1) {
	require_once "../classes/config/settings_config.php";
	$bc->disableImpressionsCount();
	header("Location: banners_settings.php");
	exit(0);
}

if(isset($_GET['enable_impressions']) && $_GET['enable_impressions']==1) {
	require_once "../classes/config/settings_config.php";
	$bc->enableImpressionsCount();
	header("Location: banners_settings.php");
	exit(0);
}

if(isset($_GET['disable_unused']) && $_GET['disable_unused']==1) {
	$bc->disableUnusedPositions();
	header("Location: banners_settings.php");
	exit(0);
}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('banners_settings.html');

$db->close();
close();
?>
