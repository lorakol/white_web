<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("banners_location", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/banners_location/classes/banners_location.php";

function banners_location_init_template($smarty) {

	global $smarty;
	global $bloc_settings, $settings;
	$bl = new banners_location();
	$bloc_settings = $bl->getSettings();
	global $blocation_field;
	$blocation_field = $bloc_settings['location_field'];	
	$smarty->assign('blocation_field', $blocation_field);

	if($settings['enable_locations']) {
		$array_loc = explode(",", $settings['location_fields']);
		if(in_array($blocation_field, $array_loc) && isset($_COOKIE['location_'.$blocation_field]) && $_COOKIE['location_'.$blocation_field]) {
			$smarty->assign('bloc',$_COOKIE['location_'.$blocation_field]);
		}
	}

}

function search_banners_location($smarty, $post_array) {

	global $smarty;
	global $blocation_field, $settings;

	if(isset($post_array[$blocation_field])) $smarty->assign('bloc',$post_array[$blocation_field]);
	
	if($settings['enable_locations']) {
		$array_loc = explode(",", $settings['location_fields']);
		if(in_array($blocation_field, $array_loc) && isset($_COOKIE['location_'.$blocation_field]) && $_COOKIE['location_'.$blocation_field]) {
			$smarty->assign('bloc',$_COOKIE['location_'.$blocation_field]);
		}
	}

}

function details_banners_location($smarty, $id, $listing_array) {

	global $smarty;
	global $blocation_field, $settings;
	
	$smarty->assign('bloc',$listing_array[$blocation_field]);

	if($settings['enable_locations']) {
		$array_loc = explode(",", $settings['location_fields']);
		if(in_array($blocation_field, $array_loc) && isset($_COOKIE['location_'.$blocation_field]) && $_COOKIE['location_'.$blocation_field]) {
			$smarty->assign('bloc',$_COOKIE['location_'.$blocation_field]);
		}
	}

}

add_action('search1', 'search_banners_location');
add_action('details_page', 'details_banners_location');
add_action('init_template', 'banners_location_init_template');

?>