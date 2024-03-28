<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/paginator.php";
require_once "classes/pictures.php";
require_once "classes/users.php";
require_once "include/gmaps_util.php";
require_once "classes/categories.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","user_listings");

if(isset($_GET['user_slug']) && $_GET['user_slug']) {
	$id = slugs::getUserId(escape($_GET['user_slug']));
}
else $id = get_numeric("id");

if(!$id) {
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");

	if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

	$smarty->display('notfound.html');
	$db->close();
	exit(0);

}	

$smarty->assign("id",$id);

$array_order_way= array("asc", "desc");
$array_order= array("date_updated", "price", "title");
$page = get_numeric("page", 1);
if(isset($_GET['order']) && in_array($_GET['order'],$array_order)) $order=$_GET['order']; else $order='date_updated';
if(isset($_GET['order_way']) && in_array($_GET['order_way'],$array_order_way)) $order_way=$_GET['order_way']; else $order_way='desc';

global $appearance_settings;
$ads_per_page=$appearance_settings["ads_per_page"];

$usr = new users();
$user = $usr->getUser($id);
$invalid_user = 0;
if(!$user) {

	$invalid_user = 1;
	

} else {

$a = new auth;
global $settings;
if($settings['enable_username'])
	$user['last_login'] = $a->getLastLogin($user['username']);
else 	
	$user['last_login'] = $a->getLastLogin($user['email']);

//_print_r($user);
$smarty->assign("user",$user);
$smarty->assign("tmp", $user);

$listings=new listings();
$no_listings=$listings->getNoActiveListings($id);
$smarty->assign("no_listings",$no_listings);

$listings_array=$listings->getStoreListings($page, $ads_per_page, $order, $order_way, $id);
$smarty->assign("listings_array",$listings_array);

$paginator = new paginator();
$paginator->setItemsNo($no_listings);

global $seo_settings;
// if seo urls
if($seo_settings['enable_mod_rewrite']) {
	global $settings;
	if($user[$settings['contact_name_field']]) $paginator->setSeoUrlStr($id."-"._urlencode($user[$settings['contact_name_field']]));
	else $paginator->setSeoUrlStr($id."-"._urlencode($user['username']));
	$paginator->setExcludeArray(array("id"));
}
$paginator->paginate($smarty);


$usr = new users();
$group = $usr->getGroup($id);
$uf=new fields('uf');
$user_fields_array=$uf->getFieldsArray($group);
$smarty->assign("user_fields_array",$user_fields_array);

$smarty->assign("page",$page);

setGmaps('uf', $group, $smarty, '', $user);

// do actions for "user_page"
do_action("user_page", array($smarty, $id, $user));

} // end if valid user

$smarty->assign("invalid_user",$invalid_user);

$post_json = "";
$smarty->assign("post_json",$post_json);

// get special user custom fields
$special_user_fields = common::getCachedObject("special_user_fields", array("group" => $user['group']));
$smarty->assign("special_user_fields", $special_user_fields);

do_action("listings_page", array($smarty));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('user_listings.html');

$db->close();
close();
?>
