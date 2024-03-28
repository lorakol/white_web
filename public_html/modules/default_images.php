<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("default_images", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/default_images/classes/default_images.php";

function getListingBigThmb(&$result) {

	//global $result;
	if($result['images']) return; // if there is an image no need to set a default no image

	global $db, $is_mobile;
	$di = new default_images();
	$bigThmbArr = $di->getBigThmb($result['category_id']);

	if($is_mobile) $bigThmb = $bigThmbArr['big_thmb_mobile'];
	else  $bigThmb = $bigThmbArr['big_thmb'];

	if($bigThmb) $result['big_nopic'] = "/images/".$bigThmb;

}

function getListingSmallThmbNoRes(&$picture, $ad_id) {
	
	$category_id = listings::getCategory($ad_id);

	global $db, $config_live_site;
	$di = new default_images();
	$thmbArr = $di->getThmb($category_id);

	if($is_mobile) $thmb = $thmbArr['thmb_mobile'];
	else  $thmb = $thmbArr['thmb'];

	if($thmb) $picture = $config_live_site."/images/".$thmb;

}

function getListingsThmb(&$result) {

	//global $result;

	global $db, $is_mobile;
	$di = new default_images();
	$i =0;

	foreach($result as $arr) {

		if($arr['picture']) { $i++; continue; } // if there is an image no need to set a default no image

		$thmbArr = $di->getThmb($arr['category_id']);
		if(!$thmbArr) { $i++; continue; }

		if($is_mobile) $thmb = $thmbArr['thmb_mobile'];
		else $thmb = $thmbArr['thmb'];

		if($thmb) $result[$i]['image'] = "/images/".$thmb;

		$i++;

	}

}

add_action('listing_picture', 'getListingSmallThmbNoRes');
add_action('listing_result', 'getListingBigThmb');
add_action('short_listings_result', 'getListingsThmb');
add_action('detailed_listings_result', 'getListingsThmb');

?>