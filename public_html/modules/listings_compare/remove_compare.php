<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../../include/include.php";

global $db;
global $lng;
$info='';
$smarty = new Smarty;
$smarty->caching = 0;
$smarty = common($smarty);
$smarty->assign("lng",$lng);

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

$all = 0;
if(isset($_GET['id']) && is_numeric($_GET['id'])) { 
	$id=$_GET['id']; }
else if($_GET['id']=="all") { $id="all"; $all=1; } else exit(0);

$title='';

global $ads_settings, $crt_lang;
$title_var ="title";
if($ads_settings['translate_title_description']) {
	global $languages;
	if(empty($languages)) $languages = common::getCachedObject("base_languages");
	if(count($languages)>1) {
		$title_var = "title_$crt_lang";
	}
}

if(!$all)
	$title = $db->fetchRow("select `$title_var` from ".TABLE_ADS." where id=$id");

$smarty->assign("id",$id);
$smarty->assign("title",$title);
$smarty->assign("all",$all);

if(isset($_COOKIE['compare'])) $compare_val = $_COOKIE['compare'];
else $compare_val='';

if($all) {
	$compare_val='';
} 
else {
	$arr = explode(",", $compare_val);
	$i=0;
	$compare_val='';
	foreach($arr as $c) {
		if($c==$id) continue;
		if($compare_val) $compare_val.=",";
		$compare_val.=$c;
		$i++;
	}
}

global $main_domain;
setcookie("compare", $compare_val, 0, "/", ".".$main_domain);


if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

$smarty->display('modules/listings_compare/remove_compare.html');
$db->close();
close();
?>
