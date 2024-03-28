<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/packages.php";
require_once "classes/pictures.php";
require_once "classes/paginator.php";
require_once "classes/users.php";
require_once "include/gmaps_util.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);

$usr = new users;

if(isset($_GET['crt_dealer']) && $_GET['crt_dealer']) { 
	$crt_dealer = escape($_GET['crt_dealer']);
	$smarty->assign("crt_dealer",$crt_dealer);
	$id = $usr->getDealerId($crt_dealer);
}
elseif(isset($_GET['user_slug']) && $_GET['user_slug']) {
	$id = slugs::getUserId(escape($_GET['user_slug']));
}
else 
	$id = get_numeric("id");

if(!$id) {
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");

	if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
	$smarty->display('notfound.html');
	$db->close();
	exit(0);

}	
	
$store_banner = $usr->getStoreBanner($id);
$smarty->assign("store_banner",$store_banner);
if($store_banner) { 

	$store_ext = getExtension($store_banner);
	$smarty->assign("store_banner_ext",$store_ext);

	if($store_ext=="swf" )	{	
		$size = @getimagesize($config_abs_path.'/images/store/'.$store_banner);
		$smarty->assign("store_banner_width",$size[0]);
		$smarty->assign("store_banner_height",$size[1]);
	}
}

$smarty->assign("id",$id);
$smarty->assign("section","user_listings");

$array_order_way= array("asc", "desc");
$array_order= array("date_added", "price", "title");
$page = get_numeric("page", 1);
if(isset($_GET['order']) && in_array($_GET['order'],$array_order)) $order=$_GET['order']; else $order='date_added';
if(isset($_GET['order_way']) && in_array($_GET['order_way'],$array_order_way)) $order_way=$_GET['order_way']; else $order_way='desc';

global $appearance_settings;
$ads_per_page=$appearance_settings["ads_per_page"];

$usr = new users();

// check if store active for this user, if not exit
$store = $usr->allowStoreBanner($id);
if(!$store) exit(0);

$user = $usr->getUser($id);
$invalid_user = 0;
if(!$user) {

	$invalid_user=  1;

} else {

$a = new auth;
global $settings;
if($settings['enable_username'])
	$user['last_login'] = $a->getLastLogin($user['username']);
else 	
	$user['last_login'] = $a->getLastLogin($user['email']);

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
	$contact_name_field = $settings['contact_name_field'];
	if(isset($user[$contact_name_field]) && $user[$contact_name_field])
		 $paginator->setSeoUrlStr($id."-"._urlencode($user[$contact_name_field]));
	else $paginator->setSeoUrlStr($id."-"._urlencode($user['username']));
	$paginator->setExcludeArray(array("id"));
}
$paginator->paginate($smarty);


$usr = new users();
$group = $usr->getGroup($id);
$uf=new fields('uf');
$user_fields_array=$uf->getFieldsArray($group);
$smarty->assign("user_fields_array",$user_fields_array);

setGmaps('uf', $group, $smarty, '', $user);

// do actions for "user_page"
do_action("user_page", array($smarty, $id, $user));
} // end if user

$smarty->assign("invalid_user",$invalid_user);

// get special user custom fields
$special_user_fields = common::getCachedObject("special_user_fields", array("group" => $user['group']));
$smarty->assign("special_user_fields", $special_user_fields);

do_action("listings_page", array($smarty));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('user_listings.html');

$db->close();
close();
?>
