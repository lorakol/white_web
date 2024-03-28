<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/pictures.php";
require_once "classes/priorities.php";
require_once "classes/featured_plans.php";
require_once "classes/categories.php";
require_once "classes/fields.php";
require_once "classes/depending_fields.php";
require_once "include/gmaps_util.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","details");

global $config_vat_rates;
$smarty->assign("config_vat_rates", $config_vat_rates);

global $is_mobile;

if(isset($_GET['listing_slug']) && $_GET['listing_slug']) {
	$id = slugs::getListingId(escape($_GET['listing_slug']));
}
else 
	$id = get_numeric("id", 0);
$search_id = get_numeric("search_id", 0);

$info='';
$listing=new listings();
if(isset($_GET['key']) && $listing->correctKey($id, escape($_GET['key']))) { 
	$key=escape($_GET['key']);
	$array_actions = array("activation");
	if(isset($_GET['action']) && in_array($_GET['action'], $array_actions)) $action = $_GET['action']; else $action='';
} else { $key=''; $action=''; }

if($key && isset($_GET['delete']) && $_GET['delete']==1) {
	$listing->delete($id);
	$info = $lng['listings']['listing_deleted'];
}

if(!$info && !listings::idExists($id)) {
  
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");

	$info=$lng['listings']['no_such_id'];
	$smarty->assign("info", $info);
	
	if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

	$smarty->display('details.html');
	$db->close();
	exit(0);

} 

$listing_state = $db->fetchAssoc("select `active`, `user_approved` from ".TABLE_ADS." where id='$id'");

global $crt_usr, $is_admin, $is_mod;
if($crt_usr) {
	global $config_abs_path;
	require_once $config_abs_path."/classes/users.php";
	$user = new users;
	$current_user = $user->getUser($crt_usr);
	$smarty->assign('current_user', $current_user);
}

if(!$info && !$key && !$is_admin && !$is_mod && !$listing->belongsToUser($id,$crt_usr) && (!$listing_state['active'] || !$listing_state['user_approved'])) {
 
	$info=$lng['listings']['invalid'];

} 

if(!$info) {

// check if activation
if($key && $action=="activation" && !$listing_state['active']) {

	if($listing->isExpired($id)) $listing->renew($id);
	$listing->nologinApprove($id);
	header("Location: $config_live_site/details.php?id=$id&key=".$key);
	exit(0);

}

if($key) {
	$ad_options = $listing->getAdOptions($id);
	$smarty->assign("ad_options", $ad_options);
	$smarty->assign("key", $key);
}

// increment hits no if not admin or the seller user
if(!$is_admin && !$is_mod && !$key && ($crt_usr==0 || ($crt_usr>0 && !$listing->belongsToUser($id,$crt_usr)))) {
	$listing->incView($id);
	do_action("details_not_owner", array($smarty, $id));
}

$listing_array = $listing->getListing($id);
$fields_array=$listing->getFields();
//_print_r($listing_array);

if(isset($listing_array['user']) && $listing_array['user']['id']) {
	$a = new auth;
	global $settings;
	if($settings['enable_username'])
		$listing_array['user']['last_login'] = $a->getLastLogin($listing_array['user']['username']);
	else 	
		$listing_array['user']['last_login'] = $a->getLastLogin($listing_array['user']['email']);
}

$smarty->assign("fields_array",$fields_array);
$smarty->assign("listing", $listing_array);
$smarty->assign("tmp", $listing_array);
$smarty->assign("id", $id);


if(!$is_mobile) {
    $categ = new categories;
    $category_path = $categ->catPathArray($listing_array['category_id'], array());
    $smarty->assign("category_path", $category_path);
    $smarty->assign("url_category", _urlencode(cleanHtml(categories::getName($listing_array['category_id']))));
}

// set google maps vars
setGmaps('cf', $listing_array['fieldset'], $smarty, '',  $listing_array);

if(!$is_mobile || !$listing_array['user_id']) {

	$user_fields_array=$listing->getUserFields();
	$smarty->assign("user_fields_array",$user_fields_array);

	$user_gmaps_array = array("gmaps"=>array(), "value_exists"=>0);

	$smarty->assign("user_gmaps", $user_gmaps_array['gmaps']);
	$smarty->assign("user_gmaps_value_exists", $user_gmaps_array['value_exists']);

}

// get special user custom fields
if($listing_array['user_id']) $group=$listing_array['user']['group'];
else $group=-1;
$special_user_fields = common::getCachedObject("special_user_fields", array("group" => $group));
$smarty->assign("special_user_fields", $special_user_fields);

// get special listing custom fields
$special_listing_fields = common::getCachedObject("special_listing_fields", array("fset" => $listing_array['fieldset']));
$smarty->assign("special_listing_fields", $special_listing_fields);

$loc='details.php?id='.$id;

global $config_live_site;
$login_link = $config_live_site."/login.php?loc=".$loc;
$smarty->assign("login_link", $login_link);

// do actions for "details_page"
do_action("details_page", array($smarty, $id, $listing_array));

} // else if no $info

$smarty->assign("info", $info);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('details.html');

$db->close();
close();
?>
