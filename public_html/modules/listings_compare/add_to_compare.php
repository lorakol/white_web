<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../../include/include.php";

//my_session_start();

global $db;
global $lng;
$info='';
$smarty = new Smarty;
$smarty->caching = 0;
$smarty = common($smarty);
$smarty->assign("lng",$lng);

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

$id = get_numeric_only("id");

global $ads_settings, $crt_lang;
$title_var ="title";
if($ads_settings['translate_title_description']) {
	global $languages;
	if(empty($languages)) $languages = common::getCachedObject("base_languages");
	if(count($languages)>1) {
		$title_var = "title_$crt_lang";
	}
}

$title = $db->fetchRow("select `$title_var` from ".TABLE_ADS." where id=$id");

$smarty->assign("id",$id);
$smarty->assign("title",$title);

if(isset($_COOKIE['compare'])) $compare_val = $_COOKIE['compare'];
else $compare_val='';
$dont_add=0;
if($compare_val) { 
	$compare_arr = explode(",", $compare_val);
	if(in_array($id, $compare_arr)) $dont_add=1;
}

if($dont_add==0) {
if($compare_val) $compare_val.=",";
$compare_val.=$id;
global $main_domain;
setcookie("compare", $compare_val, 0, "/", ".".$main_domain);
}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/listings_compare/add_to_compare.html');

$db->close();
close();
?>
