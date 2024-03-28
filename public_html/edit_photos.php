<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/images.php";
require_once "classes/pictures.php";
require_once "classes/packages.php";

global $config_abs_path;
require_once $config_abs_path."/libs/JSON.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);

$id = get_numeric_only("id");
$smarty->assign("id",$id);
$smarty->assign("section","account");

global $crt_usr;
$listing = new listings;
if(!$crt_usr && !$settings['nologin_enabled']) { header("Location: ".$config_live_site."/login.php?loc=edit_photos.php?id=".$id); exit(0); }
else if(!$crt_usr && $settings['nologin_enabled']) {
	if(!isset($_GET['key'])){ header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }
	$key = escape($_GET['key']);
	if(!$listing->correctKey($id, $key)) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }
	$smarty->assign("key",$key);
} else {
if($crt_usr!=listings::getUser($id)) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }
}

global $ads_settings;
$pending_edited = 0; 
if($ads_settings['pending_edited']  && listings::wasListingPostedAsPending($id)) $pending_edited=1;
$smarty->assign("pending_edited",$pending_edited);

// get the number of photos allowed for the ad package
$pkg_id = listings::getPackage($id);
$no_photos = packages::getNoPictures($pkg_id);
$smarty->assign("no_photos", $no_photos);

$pics = new pictures();
$crt_photos = $pics->getPicturesFormatted($id);
$smarty->assign("crt_photos", $crt_photos);

if($pending_edited) {

	$_SESSION['pictures'] = $pics->getPictures($id);

}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('edit_photos.html');

$db->close();
close();
?>
