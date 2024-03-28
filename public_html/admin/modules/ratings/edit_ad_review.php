<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/ratings/classes/ratings.php';
require_once '../../../classes/listings.php';

$id = get_numeric_only("id");

global $db;
global $lng;
global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/ratings/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/ratings/lang/eng.php";
require_once $lang_file;

global $lng_ratings;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_ratings",$lng_ratings);
$smarty->assign("smenu",'ad_reviews');
$smarty->assign("id",$id);
$smarty->assign("type", 'ad');

$ratings = new ratings();

if(isset($_POST['Submit'])) {

	$ratings->edit($id, 'ad');
	global $config_live_site;
	$path = $config_live_site."/".$config_admin_folder."/modules/ratings/";
	header("Location: ".$path."listing_reviews.php");
	exit(0);

}

$rt_settings = $ratings->getSettings();
$review = $ratings->getReview($id, 'ad');
$smarty->assign("review",$review);
$smarty->assign("rt_settings",$rt_settings);
$smarty->assign("details_link", $seo->makeDetailsLink($id, $review['ad_title']));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/ratings/edit_review.html');

$db->close();
close();
?>
