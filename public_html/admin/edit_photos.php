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
require_once "../classes/listings.php";
require_once "../classes/pictures.php";
require_once "../classes/images.php";

global $config_abs_path;
require_once $config_abs_path."/libs/JSON.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","listings");

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id = $_GET['id']; else { header ('Location: manage_listings.php'); exit(0); }

$smarty->assign("lng",$lng);
$smarty->assign("id",$id);

$title = cleanStr(listings::getTitle($id));
$smarty->assign("title",$title);

// get the number of photos allowed for the ad package
$pkg_id = listings::getPackage($id);
$no_photos = packages::getNoPictures($pkg_id);
$smarty->assign("no_photos", $no_photos);

$pics = new pictures();
$crt_photos = $pics->getPicturesFormatted($id);
$smarty->assign("crt_photos", $crt_photos);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('edit_photos.html');

$db->close();
close();
?>
