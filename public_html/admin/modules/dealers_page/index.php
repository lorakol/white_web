<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/dealers_page/classes/dealers_page.php';
global $config_abs_path;
require_once $config_abs_path."/classes/groups.php";
require_once $config_abs_path."/classes/fields.php";
require_once $config_abs_path."/classes/depending_fields.php";
require_once $config_abs_path."/classes/custom_pages.php";
require_once $config_abs_path."/classes/slugs.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/dealers_page/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/dealers_page/lang/eng.php";
require_once $lang_file;

global $lng_news;
$smarty->assign("lng_dealers_page",$lng_dealers_page);

$smarty->assign("smenu",'index');

$no_per_page = 10;
$dp = new dealers_page();
$dp->autoCheckLang();
$dp_settings = $dp->getSettings();

$groups = common::getCachedObject("base_short_groups");
$smarty->assign("groups",$groups);

$uf = new fields("uf");
$fields = $uf->getFieldsOfType(0, "password,username,user_email,terms", "", " and `groups`!=-1");
$smarty->assign("fields",$fields);

$search_fields = $uf->getFieldsOfType2(0, "password,username,user_email,terms", "", " and `groups`!=-1");
$smarty->assign("search_fields",$search_fields);

$menu_fields = $uf->getFieldsOfType("menu,multiselect,radio,radio_group,checkbox_group", "", "", " and `groups`!=-1");
$smarty->assign("menu_fields",$menu_fields);

$dp->autoCheckLang();
$dp->autoCheckSlug();
if(isset($_POST['Submit'])) {
	$dp->saveSettings();
	$info=$lng_dealers_page['settings_saved'];
	$dp_settings = $dp->getSettings(1);
	$smarty->assign("info",$info);
}
if(isset($_POST['AddImage'])) {
	require_once $config_abs_path."/classes/images.php";
	$dp->addImage();
	header("Location: index.php");
	exit(0);
}

$smarty->assign("dp_settings",$dp_settings);

$cp = new custom_pages();
$cpid = $cp->getIdByCode("dealers_page");
$smarty->assign("cpid",$cpid);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/dealers_page/index.html');

$db->close();
close();
?>
