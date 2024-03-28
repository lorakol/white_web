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
require_once '../classes/config/settings_config.php';
require_once '../classes/settings.php';
require_once '../classes/fields.php';
require_once "../classes/groups.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);
$smarty->assign("smenu", "listings");

$groups_list = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups_list);

if(isset($_GET['delete']) && $_GET['delete']=="watermark") { 
	$sc=new settings_config;
	$sc->deleteWatermark();
	header("Location: listings_settings.php");
	exit(0);

}

$errors_str='';
$successful = 0;
$priorities_errors_str='';
if(isset($_POST['Submit'])){
	$sc=new settings_config;
	if(!$sc->editAdsSettings()) { 
		$errors_str.=$sc->getError();
		$ads_settings=$sc->getTmp();
	}
	else {
		$successful = 1;
	}
} 

if(!isset($_POST['Submit']) || $errors_str=='') { 
	$settings=new settings; 
	$ads_settings=$settings->getAdsSettings();
}

$smarty->assign("ads_settings",$ads_settings);


$smarty->assign("error",$errors_str);
$smarty->assign("successful", $successful);

$html_tags = array("a","b","blockquote","br","caption","center","cite","code","div","em","font","frame","h1","h2","h3","h4","h5","h6","hr","i","img","label","li","object","ol","p","pre","script","span","strong","style","table","tbody","td","th","tr","u","ul", "form", "input");
$smarty->assign("html_tags",$html_tags);

$cf = new fields("cf");
$fields = $cf->getFieldsOfType("", "file,image,youtube,google_maps,terms", "title,description");
$smarty->assign("fields",$fields);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('listings_settings.html');

$db->close();
close();
?>
