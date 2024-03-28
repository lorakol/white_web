<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("comments", $modules_array)) return;

function comments($smarty, $listing_id, $listing_array) {

	global $config_abs_path, $config_live_site;
	require_once $config_abs_path."/modules/comments/classes/comments.php";
	require_once $config_abs_path."/classes/paginator.php";

	global $is_mobile;
	if($is_mobile) return;
	
	global $smarty;
	$comm = new comments();
	$comments_settings = $comm->getSettings();
	$smarty->assign("comments_settings", $comments_settings);
	$page=1;
	$comments_array = $comm->getComments($listing_id, $page, $comments_settings['comments_on_page']);
	$smarty->assign("comments_array", $comments_array);
	
	if($comments_settings['allow_owner_activate'])
		$no_comments = $comm->getNoActive($listing_id);
	else 
		$no_comments = $comm->getNo($listing_id);
	$smarty->assign("no_comments", $no_comments);

	global $lng_comments;
	$smarty->assign("lng_comments", $lng_comments);

	global $seo_settings;
	/*if($seo_settings['enable_mod_rewrite']) {

		$seo = new seo();
		$loc = $seo->makeDetailsLink($listing_id, $listing_array['title']);
		global $config_live_site;
		$loc = str_replace($config_live_site, "", $loc);
	}
	else 
	$loc='details.php?id='.$listing_id;

	global $config_live_site;
	$login_link = $config_live_site."/login.php?loc=".$loc;
	$smarty->assign("login_link", $login_link);
*/
	global $crt_usr;
	$comm_nologin = 0;
	if(!$crt_usr && $comments_settings['require_login']) $comm_nologin = 1;
	$smarty->assign("comm_nologin",$comm_nologin);


	$paginator = new paginator($comments_settings['comments_on_page']);
	$paginator->setItemsNo($comm->getNoActive($listing_id));
	$paginator->setPrefix("cm_");
	$paginator->paginate($smarty);

}

function check_languages_comments() {

	global $config_abs_path, $config_live_site;
	require_once $config_abs_path."/modules/comments/classes/comments.php";

	$comm = new comments();
	$comm->autoCheckLang();

}

function delete_listing_comments($id) {
	
	global $config_abs_path;
	require_once $config_abs_path."/modules/comments/classes/comments.php";

	$comm = new comments();
	$comm->deleteListingComments($id);

}

add_action('details_page', 'comments');
add_action('add_language', 'check_languages_comments');
add_action('delete_language', 'check_languages_comments');
add_action('delete_listing', 'delete_listing_comments');

?>