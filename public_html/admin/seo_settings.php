<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once '../classes/images.php';
require_once '../classes/listings.php';
require_once '../classes/config/settings_config.php';

if(isset($_POST['page'])) {
	$sc=new settings_config;
	$sc->editSeoPage();
	exit(0);
}

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);
$smarty->assign("smenu", "seo");

$successful = 0;
$errors_str='';
if(isset($_POST['Submit'])){

	$sc=new settings_config;
	
	if(!$sc->editSeoSettings()) {
		$errors_str.=$sc->getError();
		$seo_settings=$sc->getTmp();
	}
	else {
		require_once '../classes/settings.php';
		$seo_settings = settings::getSeoSettings();
		$successful = 1;
	}
	
	$smarty->assign("seo_settings",$seo_settings);
	$successful = 1;

} 
/*
if(isset($_GET['regenerate']) && $_GET['regenerate']==1) {
	$s=new slugs();
	$s->regenerate();
	header ('Location: seo_settings.php');
	exit(0);
}*/

$smarty->assign("successful", $successful);
$smarty->assign("error", $errors_str);

$sc=new settings_config;
$seo_pages=$sc->getAllLangSeoSettings();

global $settings;
$location_fields = array();
if($settings['enable_locations']) { 
	$location_fields = explode(",", $settings['location_fields']);
	$j = 0;
	foreach($location_fields as $l)  {
		$location_fields[$j] = "%".$l;
		$j++;
	}

}

$i = 1;
foreach($seo_pages as $s) {

	switch($s['page']) {

		case 'index':
			$seo_pages[$i]['tags'] = array("%category_name", "%category_title", "%category_path", "%category_meta_keywords", "%category_meta_description");
		break;
		case 'details':
			$seo_pages[$i]['tags'] = array("%category_name", "%category_title", "%category_path", "%category_meta_keywords", "%category_meta_description", "%custom_field (any custom field database name preceded by a % sign, for example: %country, %city)");
		break;
		case 'listings':
			$seo_pages[$i]['tags'] = array("%category_name", "%category_title", "%category_path", "%category_meta_keywords", "%category_meta_description", "%page", "%custom_field (any custom field database name preceded by a % sign, for example: %country, %city)");
		break;
		case 'recent_ads':
			$seo_pages[$i]['tags'] = array("%page");
		break;
		case 'contact_details':
			$seo_pages[$i]['tags'] = array("%custom_field (any custom field database name preceded by a % sign, for example: %contact_name)");
		break;
		case 'store':
		case 'user_listings':
			$seo_pages[$i]['tags'] = array("%page", "%custom_field (any custom field database name preceded by a % sign, for example: %contact_name)");
		break;
		default:
			$seo_pages[$i]['tags'] = array();
		break;
	}

	if($location_fields) $seo_pages[$i]['tags'] = array_merge ( $seo_pages[$i]['tags'], $location_fields );

	$i++;

}


$smarty->assign("seo_pages",$seo_pages);
//_print_r($seo_pages);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('seo_settings.html');

$db->close();
close();
?>
