<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/groups.php";
require_once "../classes/listings.php";
require_once "../classes/priorities.php";
require_once "../classes/featured_plans.php";
require_once "../classes/users.php";
require_once "../classes/fields.php";
require_once "../classes/depending_fields.php";

global $db;
global $lng;

$post = get_numeric("post", 0);

if(!$post) {
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
}
else common_no_template();

global $appearance_settings, $settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

$id = get_numeric_only("id");
if(!$post) $smarty->assign("id",$id);

$packages = common::getCachedObject("base_short_plans");

$priorities=common::getCachedObject("base_priorities");

$featured_plans=common::getCachedObject("base_featured_plans");

$listings = new listings;
$expires = $listings->getDateExpires($id);

$months_list = array(1=>"January", 2=>"February", 3=>"March", 4=>"April", 5=>"May", 6=>"June", 7=>"July", 8=>"August", 9=>"September", 10=>"October", 11=>"November", 12=>"December");

$crt_year = date("Y");

$years_list = array();
for ($i=0; $i<10;$i++) 
 $years_list[$i] = $crt_year+$i;

$options = $listings->getOptions($id);
$short_categories=common::getCachedObject("base_short_categories");

if(!$post) {
	$smarty->assign("months_list",$months_list);
	$smarty->assign("years_list",$years_list);
	$smarty->assign("categories",$short_categories);
	$smarty->assign("packages",$packages);
	$smarty->assign("priorities",$priorities);
	$smarty->assign("featured_plans",$featured_plans);
}

$user_id = $listings->getUser($id);

if(!$user_id) { 
	$owner_info = listings::getOwnerInfo($id);
	if(!$post) $smarty->assign("owner_info",$owner_info);
	
	$f = new fields('uf');
	$not_logged_in_fields = $f->getAll(-1);
	if(!$post) $smarty->assign("not_logged_in_fields",$not_logged_in_fields);

}
if(!$post) $smarty->assign("user_id",$user_id);


$usr = new users();
$no_users = $usr->getNo();
if($no_users<=100) {
	$users = $usr->getAll(); 
	if(!$post) $smarty->assign("users",$users);
} else {

	if($user_id) {
		if($settings['enable_username'])
			$user_ac=users::getUsername($user_id);
		else 
			$user_ac=users::getEmail($user_id);
		if(!$post) $smarty->assign("user_ac",$user_ac);
	}

}
if(!$post) $smarty->assign("no_users",$no_users);



if($post) {

	$ret = array("response" => 0, "error" => array(), "info" => null);

	if(isset($_POST['category']) && is_numeric($_POST['category']) && $_POST['category']!=$options['category_id']) {

		$listings->setCategory($id,$_POST['category']);

	}
	if(isset($_POST['package']) && is_numeric($_POST['package']) && $_POST['package']!=$options['package_id']) { 
		require_once "../classes/packages.php";
		$listings->setPackage($id,$_POST['package']);

	}

	if(isset($_POST['priority']) && is_numeric($_POST['priority']) && $_POST['priority']!=$options['priority']) { 

		$listings->enablePriority($id,$_POST['priority']);

	}

	if(isset($_POST['featured']) && is_numeric($_POST['featured']) && $_POST['featured']!=$options['featured']) { 
		if($_POST['featured']) $listings->makeFeatured($id,$_POST['featured']);
		else {
			$listings->deleteOption($id, "featured");
			$listings->removeFeatured($id);
		}
	}

	$highlited = checkbox_value("highlited");
	if($highlited!=$options['highlited']) { 
		if($highlited) $listings->makeHighlited($id);
		else {
			$listings->deleteOption($id, "highlited");
			$listings->removeHighlited($id);
		}

	}

	$urgent = checkbox_value("urgent");
	if($urgent!=$options['urgent']) { 
		if($urgent) $listings->makeUrgent($id);
		else {
			$listings->deleteOption($id, "urgent");
			$listings->removeUrgent($id);
		}

	}

	$video = checkbox_value("video");
	if($video!=$options['video']) { 
		if($video) $listings->enableVideo($id, $video);
		else $listings->deleteOption($id, "video");
	}

	$url = checkbox_value("url");
	if($url!=$options['url']) { 
		if($url) $listings->enableUrl($id, $url);
		else $listings->deleteOption($id, "url");
	}

	$listings->changeExpireDate($id);	

	$options = $listings->getOptions($id);
	$expires = $listings->getDateExpires($id);

	// new user information
	if(isset($_POST['user_id']) && $_POST['user_id'] && $_POST['user_id']!=$user_id && (!isset($_POST['owner']) || $_POST['owner']==1)) {

		global $db;
		$db->query("update ".TABLE_ADS." set `user_id` = '".escape($_POST['user_id'])."' where id='$id'");

	}

	if(isset($_POST['user']) && $_POST['user'] && (!isset($_POST['owner']) || $_POST['owner']==1)) {

		if($settings['enable_username'])
			$new_user_id=users::getUserId(escape($_POST['user']));
		else 
			$new_user_id=users::getIdByEmail(escape($_POST['user']));
		
		if($new_user_id!=$user_id) $db->query("update ".TABLE_ADS." set `user_id` = '".$new_user_id."' where id='$id'");

	}

	// guest data
	if(isset($_POST['owner']) && $_POST['owner']==2) {

		global $db;
		foreach ($not_logged_in_fields as $f) {
	
		if(isset($_POST[$f['caption']]) && $_POST[$f['caption']])
		
			$db->query("update ".TABLE_ADS_EXTENSION." set `".$f['caption']."` = '".escape($_POST[$f['caption']])."' where id='$id'");
		
		}

	}

	$ret['response'] = 1;
	$ret['info'] = $lng['settings']['settings_saved'];

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

}
else {
	$smarty->assign("expires",$expires);
	$smarty->assign("options",$options);

}

do_action("edit_ad_settings", array());

if($db->error!='') { $db_error = $db->getError(); if(!$post) $smarty->assign('db_error',$db_error); }
if(!$post) $smarty->display('edit_ad_settings.html');

$db->close();
close();
?>
