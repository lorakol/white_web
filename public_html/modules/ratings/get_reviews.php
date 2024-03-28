<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "include.php";
require_once "classes/ratings.php";

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);


$id = get_numeric_only("id");
$page = get_numeric("page", 1);
if(isset($_GET['type']) && in_array($_GET['type'], array("user", "ad"))) $type = $_GET['type']; else $type = 'user';
$no_pages = get_numeric("no_pages", 1);

$rc = new ratings();
$rs = $rc->getSettings();

if($type=="ad") { $no_per_page = $rs['ar_no_on_page']; $prefix="lr_"; }
else { $no_per_page = $rs['no_on_page']; $prefix="ur_"; }

$reviews_array = $rc->getReviews($id, $page, $type);

$smarty = new Smarty;
$smarty = smartyShowDBVal($smarty);
$smarty->assign("lng",$lng);

// seo settings, allows to you modify search engine friendly links
global $seo;
$seo = new seo();
$seo->init($smarty);
$smarty->registerObject('seo', $seo, null, false);

global $config_live_site;
$smarty->assign("live_site",$config_live_site);
$smarty->assign("ratings_settings",$rs);


$str = "";
foreach ($reviews_array as $v) {
	$smarty->assign("v", $v);
	$str .= $smarty->fetch("modules/ratings/review.html");
}


global $config_live_site;
$smarty->assign("live_site", $config_live_site);
$smarty->assign("page", $page);
$smarty->assign("id", $id);
$smarty->assign("type", $type);
$smarty->assign($prefix."no_pages", $no_pages);

$str .= $smarty->fetch("modules/ratings/".$prefix."paginator.html");
$str.="<div class=\"clearfix\"></div>";

//echo $str;
global $config_abs_path;
require_once $config_abs_path."/libs/JSON.php";

echo json_encode($str);

$db->close();
if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
//close();
?>