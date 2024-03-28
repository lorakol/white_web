<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/fields.php";

global $db;
global $lng;
$info='';
$smarty = new Smarty;
$smarty->caching = 0;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","listings");

global $is_mobile;
if(!$is_mobile) { 
    global $config_live_site;
    header("Location: ".$config_live_site."/listings.php");
    exit(0);
}

$cat = 0;

// categories list
global $short_categories;
$subcategories_array = array();
$i=0;
foreach($short_categories as $crt_cat) {
	if($crt_cat['id']==$cat) { $parent_id = $crt_cat['parent_id']; }
	if($crt_cat['parent_id']==$cat) {

		$subcategories_array[$i++] = $crt_cat;

	}
}
$smarty->assign("categories_array",$subcategories_array);
$fset = 0;

$cf = new fields('cf');
$base_refine_fields = common::getCachedObject("base_refine_fields", array("fieldset" => $fset));

$smarty->assign("fields", $base_refine_fields);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('refine.html');

$db->close();
close();
?>
