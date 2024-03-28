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
require_once $config_abs_path."/classes/images.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $appearance_settings;
$al = $appearance_settings['admin_language'];
global $config_admin_folder;
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/default_images/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/default_images/lang/eng.php";
require_once $lang_file;

global $lng_news;
$smarty->assign("lng_default_images",$lng_default_images);

$smarty->assign("smenu",'index');

// get categories
$short_categories=common::getCachedObject("base_short_categories");
$smarty->assign("categories",$short_categories);

global $ads_settings, $mobile_settings;

$thmb_recommended_size = str_replace("::SIZE::", $ads_settings['thmb_width']."X".$ads_settings['thmb_height'], $lng_default_images['recommended_size'] );
$big_thmb_recommended_size = str_replace("::SIZE::", $ads_settings['big_thmb_width']."X".$ads_settings['big_thmb_height'], $lng_default_images['recommended_size'] );

$smarty->assign("thmb_recommended_size",$thmb_recommended_size);
$smarty->assign("big_thmb_recommended_size",$big_thmb_recommended_size);


if($mobile_settings['enable_mobile_templates']) {
	$mobile_thmb_recommended_size = str_replace("::SIZE::", $mobile_settings['mobile_thmb_width']."X".$mobile_settings['mobile_thmb_height'], $lng_default_images['recommended_size'] );
	$mobile_big_thmb_recommended_size = str_replace("::SIZE::", $mobile_settings['mobile_big_thmb_width']."X".$mobile_settings['mobile_big_thmb_height'], $lng_default_images['recommended_size'] );
	$smarty->assign("mobile_thmb_recommended_size",$mobile_thmb_recommended_size);
	$smarty->assign("mobile_big_thmb_recommended_size",$mobile_big_thmb_recommended_size);
}


$di = new default_images();

if(isset($_POST['Submit']) && $_POST['Submit']) {

	$error='';
	if(!$di->add()) { 

		$error=$di->getError();
		$smarty->assign("error", $error);

	}
	else {
		header ('Location: index.php');
		exit(0);
	}

}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/default_images/add.html');

$db->close();
close();
?>