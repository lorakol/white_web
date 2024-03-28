<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("legacy_links_compat", $modules_array)) return;

function setLegacyCanonical(&$page_info, $smarty) {

	// return if using legacy links
	global $seo_settings;
	
	if($seo_settings['sef_legacy_mode']) return;
	if(!$seo_settings['enable_mod_rewrite']) return;

	// return if canonical link already set
	if($page_info['canonical']) return;

	$seo = new seo();
	
	global $self_noext;
	switch($self_noext) {
		case "details":
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) break;
			$page_info['canonical'] = $seo->makeDetailsLink(escape($_GET['id']));
			break;

		case "listings":

			$str = rtrim(trim($_SERVER['REQUEST_URI'], "/"), "/");
			$arr = explode("/",$str);
		
			global $post_array;
			$has_search_param = $seo->legacySearchParseParam($post_array);
			if($has_search_param || in_array("listings.html", $arr)) 
				$page_info['canonical'] = $seo->makeSearchLink($post_array);
			break;

		case "content":

			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) break;
			$page_info['canonical'] = $seo->makeCustomPageLink(escape($_GET['id']));
			break;

		case "contact_details":
		
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) break;
			$page_info['canonical'] = $seo->makeUserDetailLink(escape($_GET['id']));
			break;
			
		case "store":
		
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) break;
			$page_info['canonical'] = $seo->makeDealerLink(escape($_GET['id']));
			break;

		case "user_listings":

			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) break;
			$page_info['canonical'] = $seo->makeUserListingsLink(escape($_GET['id']));
			break;

		case "recent_ads":
		case "login":
		case "register":
		case "pre-register":
		case "pre-submit":
		case "refine":
		case "notfound":
		case "contact":
		case "favorites":
		case "auctions":

			$str = rtrim(trim($_SERVER['REQUEST_URI'], "/"), "/");
			$arr = explode("/",$str);
			$na = count($arr);
			$self_link = $arr[$na-1];
		
			if($self_link==$seo->links[$self_noext]) break;

			global $config_live_site, $settings;
			$site_url = $config_live_site;

			// canonical
			$canonical_subdomains = 0;
			if($settings['enable_locations'] && $settings['enable_subdomains'] && isset($_GET['crt_city']) && $_GET['crt_city']) $canonical_subdomains = 1;
			if($canonical_subdomains) { 

				global $main_domain; 

				if(strstr($config_live_site, "https://")) $proto = "https://";
				else $proto = "http://";

				$site_url = $proto.$main_domain; 

			} // end canonical subdomains

			$page_info['canonical'] = $site_url."/".$seo->links[$self_noext];
			break;

		default:
			break;

	}

}

function setLegacyAffiliateCookie() {

	if(!isset($_GET['aff']) || !$_GET['aff']) return;
	
	global $db;
	$aff_id = $db->fetchRow("select `id` from ".TABLE_AFFILIATES." where `affiliate_id`='".escape($_GET['aff'])."'");

	$affiliate_settings = common::getAffiliateSettings($aff_id);
	$expire = time() + 60*60*24*$affiliate_settings["affiliates_cookie_availability"];
	global $main_domain;
	setcookie('affiliate', $aff_id, $expire, '/', ".".$main_domain);
	
}

function setLegacySearchParams($smarty, &$post_array) {

	$seo = new seo();
	$seo->legacySearchParseParam($post_array);

}

add_action('set_meta_info_end', 'setLegacyCanonical');
add_action('search_init_template', 'setLegacySearchParams');
add_action('include', 'setLegacyAffiliateCookie');

?>