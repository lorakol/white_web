<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "classes/comments.php";
require_once "../../classes/categories.php";
require_once "../../classes/pictures.php";

$id = get_numeric_only("id");
$page = get_numeric("page", 1);
$no_pages = get_numeric("no_pages", 1);

$comm = new comments;
$comments_settings = $comm->getSettings();
$comments_array = $comm->getComments($id, $page, $comments_settings['comments_on_page']);

$smarty = new Smarty;
$smarty = smartyShowDBVal($smarty);

// seo settings, allows to you modify search engine friendly links
global $seo;
$seo = new seo();
$seo->init($smarty);
$smarty->registerObject('seo', $seo, null, false);

global $config_live_site, $crt_usr, $lng;
$smarty->assign("live_site",$config_live_site);
$smarty->assign("comments_settings",$comments_settings);
$smarty->assign("crt_usr",$crt_usr);
$smarty->assign("lng",$lng);

$listing_id = get_numeric("id", 0);
$listing = new listings;
$listing_array = $listing->getListing($id);
$smarty->assign("listing",$listing_array);

$str = "";
foreach ($comments_array as $v) {
	$smarty->assign("v", $v);
	$str .= $smarty->fetch("modules/comments/comment.html");
}

global $config_live_site;
$smarty->assign("live_site", $config_live_site);
$smarty->assign("page", $page);
$smarty->assign("id", $id);
$smarty->assign("cm_no_pages", $no_pages);
$str .= $smarty->fetch("modules/comments/paginator.html");
$str.="<div class=\"clearfix\"></div>";

//echo $str;
global $config_abs_path;
require_once $config_abs_path."/libs/JSON.php";

echo json_encode($str);

$db->close();
if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

?>
