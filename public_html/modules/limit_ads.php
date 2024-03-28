<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("limit_ads", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/limit_ads/classes/limit_ads.php";

function checkPostAdsLimit($listing_id) {

	$user_id = listings::getUser($listing_id);
	$limit = new limit_ads();
	$limit_settings = $limit->getSettings();

	if(!$limit_settings['exclude_prioritized'])
		$no_listings = users::getNoListings($user_id);
	else {
		global $db;
		$no_listings = $db->fetchRow('select count(*) from '.TABLE_ADS.' where user_id="'.$user_id.'" and `priority`=0');
	}

	while($no_listings>$limit_settings['max_ads']) {
		
		deleteOlderUserListing($user_id, $limit_settings);
		$no_listings--;
	
	}

}

function deleteOlderUserListing($user_id, $limit_settings) {

	global $db;
	if(!$limit_settings['exclude_prioritized']) {
		$listing_id = $db->fetchRow("select `id` from ".TABLE_ADS." where `user_id`='$user_id' order by `date_updated` limit 1");
		}
	else {	
		$listing_id = $db->fetchRow("select `id` from ".TABLE_ADS." where `user_id`='$user_id' and `priority`=0 order by `date_updated` limit 1");
		}
	$l = new listings();
	$l->delete($listing_id);

}

add_action('end_post_ad', 'checkPostAdsLimit');

?>