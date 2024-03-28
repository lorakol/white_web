<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("social_networks", $modules_array)) return;

function tweet($listing_id) {
	global $config_abs_path;
	require_once($config_abs_path.'/modules/social_networks/classes/social_networks.php');
	$sn = new social_networks;
	global $sn_settings;
	if(!$sn_settings) $sn_settings = $sn->getSettings();
	if($sn_settings['tweet_ads']) {
		$details_link = '';

		global $seo_settings, $config_live_site;
		if($seo_settings['enable_mod_rewrite']) {
			$seo = new seo();
			$details_link = $seo->makeDetailsLink($listing_id);
		}
		else { 
			
			$details_link=$config_live_site.'/details.php?id='.$listing_id;

		}


		$sn->tweetAd($listing_id, $details_link, cleanHtml(listings::getTitle($listing_id)));
	}
}

function postFB($listing_id) {

	global $config_abs_path;
	require_once($config_abs_path.'/modules/social_networks/classes/social_networks.php');
	$sn = new social_networks;
	global $sn_settings;
	if(!$sn_settings) $sn_settings = $sn->getSettings();
	if($sn_settings['fb_post_ads']) {

		require_once($config_abs_path.'/modules/social_networks/fb.php');

		$details_link = '';
		$cat_path='';
		$picture='';
		$location='';

		global $seo_settings, $config_live_site;
		if($seo_settings['enable_mod_rewrite']) {
			$seo = new seo();
			$details_link = $seo->makeDetailsLink($listing_id);
		}
		else { 
			
			$details_link=$config_live_site.'/details.php?id='.$listing_id;

		}

		$l = new listings;
		$listing_array = $l->getListing($listing_id);
		$categ = new categories();
		$category_path = $categ->catPathArray($listing_array['category_id'], array());

		$i=0;
		foreach($category_path as $c) {

			if($i) $cat_path.=" >> ";
			$cat_path.=$c['name'];
			$i++;

		}

		$description=get_start_string($listing_array['description'], 200);

		$pictures = new pictures;
		$picture=$pictures->getPictureThmbURL($listing_id);

		if(!$picture) { 
			global $config_live_site, $ads_settings;
			$nopic=$ads_settings["nopic"];
			$picture=$config_live_site."/images/".$nopic;
			do_action("listing_picture", array(&$picture, $listing_id));
		}
		
		
		global $ads_settings;
		$location='';
		if($ads_settings['location_fields'])
			$location=$l->getLocationStr($listing_array);

		postOnFacebook($listing_id, $details_link, cleanHtml($listing_array['title']), $cat_path, $description, $picture, $location);

	}
}

function verify_access_token() {

	global $config_abs_path;
	require_once($config_abs_path.'/modules/social_networks/classes/social_networks.php');
	$sn = new social_networks;
	$sn->verifyAccessToken();

}

function sn_init_template($smarty) {

	//global $is_mobile;
	//if($is_mobile) return;
	
	global $smarty;
	global $config_abs_path;
	require_once($config_abs_path.'/modules/social_networks/classes/social_networks.php');
	$sn = new social_networks;
	$sn->initTemplatesVals($smarty);

}

function sn_details($smarty) {

	global $config_abs_path;
	require_once($config_abs_path.'/modules/social_networks/classes/social_networks.php');
	$sn = new social_networks;
	global $sn_settings;
	if(!$sn_settings) $sn_settings = $sn->getSettings();
	if(!$sn_settings['enable_pinterest_button']) return;
	
	$bottom_content = $smarty->getTemplateVars('bottom_content');
	if(!$bottom_content) $bottom_content = "";
	
	$bottom_content.='<script async defer src="//assets.pinterest.com/js/pinit.js"></script>';
	
	$smarty->assign('bottom_content', $bottom_content);

}

add_action('inc_cat', 'tweet');
add_action('inc_cat', 'postFB');
add_action('init_template', 'sn_init_template');
add_action('periodic', 'verify_access_token');
add_action('details_page', 'sn_details');

?>