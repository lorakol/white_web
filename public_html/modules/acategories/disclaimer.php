<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "classes/acategories.php";
global $config_abs_path;
require_once $config_abs_path."/libs/JSON.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","other");



if(!isset($_POST['Accept']) && !isset($_POST['Decline'])) {

	$get_json = json_encode($_GET);
	$smarty->assign("get_json",$get_json);

}

$ac = new acategories;
$ac_settings = $ac->getSettings();
global $crt_lang;
$disclaimer = $ac_settings['disclaimer_'.$crt_lang];
$smarty->assign("disclaimer",$disclaimer);

$error='';
if(isset($_POST['Accept'])) {

	global $main_domain;
	$a = setcookie("personals", 1, time()+86400*$ac_settings['cookie_availability'], '/', ".".$main_domain);
	global $config_live_site;

	// redirect towards the search page
	if(isset($_POST["get_json"]) && $_POST["get_json"]) $get_json = cleanStr($_POST["get_json"]); else $get_json="";

	$get_vars = (array)json_decode($get_json, true);

	global $seo_settings;
	if($seo_settings['enable_mod_rewrite']) {

		if($get_vars['page']=="listings") {
			global $seo;
			unset($get_vars['page']);
			$redirect = $seo->makeSearchLink($get_vars);
		}
		else {
			global $config_live_site, $config_abs_path;
			require_once $config_abs_path."/classes/categories.php";
			$redirect = $seo->makeBrowseCategoryLink($get_vars['category']);
		}	

	}
	else {

		global $config_live_site;
		if($get_vars['page']=="listings") {
			$redirect = $config_live_site."/listings.php";
			$sign="?";
			unset($get_vars['page']);
			foreach($get_vars as $key=>$value) {
				$redirect.=$sign.$key."=".$value;
				$sign="&";
			}
		}
		else {
			$redirect = $config_live_site."/index.php?category=".$get_vars['category'];
		}

	}

	header("Location: $redirect");
	exit(0);

}

if(isset($_POST['Decline'])) {

	global $config_live_site;
	header("Location: $config_live_site");
	exit(0);

}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/acategories/disclaimer.html');

$db->close();
close();
?>