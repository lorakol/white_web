<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../../include/include.php";

my_session_start();

global $db;
global $lng;

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

$id = get_numeric_only("id");

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

$db->close();

?>
