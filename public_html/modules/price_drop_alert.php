<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("price_drop_alert", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/price_drop_alert/classes/price_drop_alert.php";
require_once $config_abs_path."/modules/price_drop_alert/include.php";

function price_drop_alert($ad_id) {

	$pd = new price_drop_alert();
	$pd->checkAlerts($ad_id);

}

function detailsPriceAlert($smarty, $listing_id) {

	global $lng_price_drop_alert;
	$smarty->assign("lng_price_drop_alert", $lng_price_drop_alert);
	
	$has_alert = 0;
	$pd = new price_drop_alert();
	global $crt_usr;
	if($crt_usr) {
		$has_alert = $pd->hasAlert($listing_id, $crt_usr);
	}
	$smarty->assign("has_alert", $has_alert);

}

add_action('end_edit_ad', 'price_drop_alert');
add_action('details_page', 'detailsPriceAlert');

?>