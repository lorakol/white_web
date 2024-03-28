<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/meta_extension/classes/meta_extension.php';
require_once "../../../classes/fieldsets.php";
require_once "../../../classes/fields.php";
require_once "../../../classes/depending_fields.php";
require_once "../../../classes/categories.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/meta_extension/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/meta_extension/lang/eng.php";
require_once $lang_file;

global $lng_meta_extension;
$smarty->assign("lng_meta_extension",$lng_meta_extension);

$mext = new meta_extension();

$cf = new fields("cf");
$fields = $cf->getAll();
$smarty->assign("fields",$fields);

//$cat = new categories();
$short_categories=common::getCachedObject("base_short_categories");
$smarty->assign("categories",$short_categories);

global $keyword_name;
$smarty->assign("keyword_name",$keyword_name);

$info = '';
$error = '';
if(isset($_POST['Submit'])) {
	if($mext->add()) {
		header("Location: index.php");
		exit(0);
	}
}

$extensions = $mext->getAll();
$smarty->assign("extensions",$extensions);

global $keyword_name;
$smarty->assign("keyword_name",$keyword_name);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/meta_extension/add.html');

$db->close();
close();
?>
