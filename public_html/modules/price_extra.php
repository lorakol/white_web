<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("price_extra", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/price_extra/classes/price_extra.php";

function pe_init_template($smarty, $self_noext) {

	if(!in_array($self_noext, array("index", "new_listing", "edit_listing", "details", "store", "alerts", "recent_ads", "listings", "user_listings", "favorites", "review_pending_edited", "manage_listings", "my_listings", "compare", "featured_ads") )) return;

	global $smarty;

	$pe = new price_extra();
	$pe_settings = $pe->getSettings();

	$smarty->assign("pe_settings",$pe_settings);

    global $lng_pe, $crt_lang, $config_abs_path;
	if(file_exists($config_abs_path."/modules/price_extra/lang/".$crt_lang.".php"))
		require_once $config_abs_path."/modules/price_extra/lang/".$crt_lang.".php";
	else require_once $config_abs_path."/modules/price_extra/lang/eng.php";
    $smarty->assign("lng_pe",$lng_pe);
    
    if($self_noext=="details") {
    
		if(isset($_GET['id'])) $listing_id = escape($_GET['id']);
		else if(isset($_GET['listing_slug']) && $_GET['listing_slug'])
			$listing_id = slugs::getListingId(escape($_GET['listing_slug']));
    
		global $seo_settings, $self_noext;
		if($seo_settings['enable_mod_rewrite']) {

			$seo = new seo();
			$loc = $seo->makeDetailsLink($listing_id);
		}
		else $loc=$self_noext.'.php?id='.$listing_id;

		global $config_live_site;
		$offer_login_link = $config_live_site."/login.php?loc=".$loc;
    
		$smarty->assign("offer_login_link",$offer_login_link);
	}
}

function pe_add_language($lang_id) {

	$pe = new price_extra();
	$pe->addLang($lang_id);
	
}

function pe_delete_language($lang_id) {

	$pe = new price_extra();
	$pe->deleteLang($lang_id);
	
}

function pe_post_ad($ad_id) {


	$pe = new price_extra();
	$pe->postAd($ad_id);
	return;

}

function pe_edit_ad($ad_id) {


	$pe = new price_extra();
	$pe->editAd($ad_id);
	return;

}

function pe_get_fieldsets(&$result) {

    global $config_abs_path;
    require_once $config_abs_path."/classes/categories.php";
    $i=0;
    foreach ($result as $row) {
      $result[$i]['fieldset'] = categories::getFieldset($row['category_id']);
      $i++;
    }
    
}

function pe_check_price_field($field, $set, &$err) {

	if(!$field['required']) return;

	$pe = new price_extra();
	$pe_settings = $pe->getSettings();

	// module not active for this field with this fieldset
	if(!isset($pe_settings[$set])) return;
	
	$ok = $pe->checkPriceValueEntered();
	$err = !$ok;
	return;

}

function deletePEListing($ad_id) {

	global $db, $config_table_prefix;
	$db->query("delete from ".$config_table_prefix."price_extra_offers where ad_id=$ad_id");

}

function deletePEUser($user_id) {

	global $db;
	$db->query("delete from ".$config_table_prefix."price_extra_offers where user_id=$user_id");

}

function getPEOffers(&$result) {

	global $db, $config_table_prefix, $config_abs_path;
	require_once $config_abs_path."/classes/users.php";
	$i=0;
	foreach($result as $res) {
		$result[$i]['no_offers'] = $db->fetchRow("select count(*) from ".$config_table_prefix."price_extra_offers where ad_id={$res['id']}");
		if($result[$i]['no_offers']>0) {
			$result[$i]['offers'] = $db->fetchAssocList("select * from ".$config_table_prefix."price_extra_offers where ad_id={$res['id']}");
			$j = 0;
			foreach($result[$i]['offers'] as $off) {
				$result[$i]['offers'][$j]['offer_curr'] = add_currency($off['offer'], $off['currency']);
				$result[$i]['offers'][$j]['contact_name'] = users::getContactName($off['user_id']);
				$result[$i]['offers'][$j]['contact_email'] = users::getEmail($off['user_id']);
				$j++;
			}
		}
		$i++;
	}

}

add_action('add_language', 'pe_add_language');
add_action('delete_language', 'pe_delete_language');
add_action('init_template', 'pe_init_template');
add_action('init_admin_template', 'pe_init_template');
add_action('end_post_ad', 'pe_post_ad');
add_action('end_edit_ad', 'pe_edit_ad');
add_action('short_listings_result', 'pe_get_fieldsets');
add_action('detailed_listings_result', 'pe_get_fieldsets');
add_action('check_price_field', 'pe_check_price_field');
add_action("delete_listing", 'deletePEListing');
add_action("delete_user", 'deletePEUser');
add_action("detailed_listings_result", 'getPEOffers')

?>