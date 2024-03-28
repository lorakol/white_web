<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("claim_listing", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/claim_listing/classes/claim_listing.php";
require_once $config_abs_path."/modules/claim_listing/include.php";

function detailsClaimListing($smarty, $listing_id) {

	global $lng_claim_listing;
	$smarty->assign("lng_claim_listing", $lng_claim_listing);

}

add_action('details_page', 'detailsClaimListing');

?>