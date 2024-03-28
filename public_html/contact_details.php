<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/pictures.php";
require_once "classes/users.php";
require_once "classes/fields.php";
require_once "classes/depending_fields.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","user_listings");

global $is_mobile;
if(!$is_mobile) { 
    global $config_live_site;
    header("Location: ".$config_live_site."/index.php");
    exit(0);
}

if(isset($_GET['user_slug']) && $_GET['user_slug']) {
	$id = slugs::getUserId(escape($_GET['user_slug']));
}
else if(isset($_GET['id']) && is_numeric($_GET['id']))
	$id = get_numeric("id");
else exit(0);
$smarty->assign("id",$id);

$usr = new users();
$user = $usr->getUser($id);
$usr = new users();
$group = $usr->getGroup($id);
$uf=new fields('uf');
$user_fields_array=$uf->getFieldsArray($group);

$smarty->assign("user_fields_array",$user_fields_array);
$smarty->assign("user",$user);

// do actions for "user_page"
do_action("user_page", array($smarty, $id, $user));

$back = 0;
if(isset($_SERVER['HTTP_REFERER']) && strstr($_SERVER['HTTP_REFERER'], "details.php")) $back = 1;
$smarty->assign("back",$back);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('contact_details.html');

$db->close();
close();
?>