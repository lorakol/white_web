<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/users.php";
require_once "../classes/groups.php";

global $db;
global $lng;
$errors_str='';
$smarty = new Smarty;
$smarty = common($smarty);

$step = get_numeric("step", 0);

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id']; else { header("Location: users_list.php"); exit(0); }
if(isset($_GET['delete'])) $delete = escape($_GET['delete']); else $delete='';


if(isset($delete) && $delete) {

	require_once "../classes/images.php";
	users::emptyField($id, $delete);
	header("Location: edituser.php?id=".$id);
	exit(0);

}

$smarty->assign("tab","users");
$smarty->assign("lng",$lng);
$smarty->assign("id",$id);
$smarty->assign("edit", 1);

global $config_vars;

if($step<=1) {

	$users=array();
	$usr=new users();
	$tmp=$usr->getUser($id, 1);

	$group = $tmp['group'];
	$smarty->assign("group",$group);

	$groups_array = common::getCachedObject("base_groups");
	$smarty->assign("groups_array",$groups_array);

	$has_admin_verification = users::hasAdminVerification($id);
	$smarty->assign("has_admin_verification",$has_admin_verification);

}

if($step==2) {

	global $appearance_settings;
	header('Content-type: text/html; charset='.$appearance_settings['charset']);

	global $config_abs_path, $config_admin_folder;
	require_once $config_abs_path."/".$config_admin_folder."/include/lists.php";
	require_once "../include/gmaps_util.php";

	$group = get_numeric_only("group");
	$smarty->assign("group",$group);

	$usr=new users();
	$tmp=$usr->getUser($id, 1);
	$smarty->assign("tmp",$tmp);

	global $default_fields_types;
	$smarty->assign("default_fields_types", $default_fields_types);

	$credits_enabled = $config_vars['credits_enabled'];
	$smarty->assign("credits_enabled", $credits_enabled);

	$gr = new groups();
	$group_settings = $gr->getGroup($group);
	$smarty->assign("group_settings",$group_settings);
	$fields=common::getCachedObject("base_user_fields", array("group" => $group));

	$smarty->assign("fields",$fields);

	setGmaps('uf', $group, $smarty);

	$uf=new fields('uf');
	$htmlarea = $uf->HTMLAreaFieldExists($group);
	$smarty->assign("htmlarea_exists",$htmlarea);

	global $seo_settings;
	if($seo_settings['enable_mod_rewrite'] && !$seo_settings['sef_legacy_mode']) {
		$user_slug = slugs::getUserSlug($id);
		$smarty->assign("user_slug",$user_slug);
	}

}

if($step==3) {

	global $appearance_settings;
	header('Content-type: text/html; charset='.$appearance_settings['charset']);

	require_once "../classes/images.php";
	require_once "../classes/validator.php";
	require_once "../classes/fields.php";
	require_once "../classes/fields_process.php";
	require_once "../classes/mails.php";
	require_once "../classes/mail_templates.php";
	require_once "../libs/JSON.php";

	$ret = array("response" => 1, "error" => array(), "id" =>$id);

	$group = escape($_POST['group']);

	$user=new users();
	if(!$user->edit_info($id)) {
		$ret['error'] = $user->getError();
		$ret['response'] = 0;

		global $appearance_settings;
		if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

		echo json_encode($ret);
		exit();
	}

	global $appearance_settings;
        if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret);

}

if($step==4) {

	require_once $config_abs_path."/include/gmaps_util.php";
	$id = get_numeric_only ("id");

	$user = new users();
	$user_array = $user->getUser($id);

	// group name
	$user_array['group_name'] = groups::getName($user_array['group']);

	$credits_enabled = $config_vars['credits_enabled'];
	$smarty->assign("credits_enabled", $credits_enabled);

	$gr = new groups();
	$group_settings = $gr->getGroup($user_array['group']);
	$smarty->assign("group_settings",$group_settings);
	$fields=common::getCachedObject("base_user_fields", array("group" => $user_array['group']));
	$smarty->assign("fields",$fields);

	setGmaps('uf', $user_array['group'], $smarty);

	$uf=new fields('uf');
	$htmlarea = $uf->HTMLAreaFieldExists($user_array['group']);
	$smarty->assign("htmlarea",$htmlarea);

	$smarty->assign("id",$id);
	$smarty->assign("tmp",$user_array);

	global $default_fields_types;
	$smarty->assign("default_fields_types", $default_fields_types);

}

if($step!=3) $smarty->assign("step",$step);

if($db->error!='' && $step!=3) { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

if($step!=3) $smarty->display('adduser.html');

$db->close();
if($step==1) close();
?>
