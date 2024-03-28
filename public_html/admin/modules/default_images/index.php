<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/default_images/classes/default_images.php';
global $config_abs_path;
require_once $config_abs_path."/classes/categories.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $appearance_settings, $config_admin_folder;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/default_images/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/default_images/lang/eng.php";
require_once $lang_file;

global $lng_news;
$smarty->assign("lng_default_images",$lng_default_images);

$smarty->assign("smenu",'index');

$di = new default_images();

$default_images = $di->getDefaultImages();
$smarty->assign("default_images", $default_images);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/default_images/index.html');

$db->close();
close();
?>