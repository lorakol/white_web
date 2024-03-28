<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
global $config_abs_path;

require_once $config_abs_path."/classes/listings.php";
require_once $config_abs_path."/classes/users.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id = $_GET['id']; else { header ('Location: manage_listings.php'); exit(0); }
$step = get_numeric("step", 0);

$smarty->assign("lng",$lng);
$smarty->assign("id",$id);

if($step<=1) {

	do_action("newad_form", array($smarty));

	require_once $config_abs_path."/classes/categories.php";
	require_once $config_abs_path."/classes/packages.php";
	require_once $config_abs_path."/include/gmaps_util.php";

	$listing=new listings;

	global $default_fields_types;
	$smarty->assign("default_fields_types", $default_fields_types);

	$listing_array = $listing->getListing($id,1);
	$category_id = $listing_array['category_id'];

	$fieldset = categories::getFieldset($category_id);
	$smarty->assign("fieldset", $fieldset);

	$u = new users();
	$gr = $u->getGroup($listing_array['user_id']);

	$fields=common::getCachedObject("base_listing_fields", array("fieldset" => $fieldset, "group"=>$gr));
	$smarty->assign("fields", $fields);

	$no_words = packages::getNoWords($listing_array['package_id']);
	$smarty->assign("no_words", $no_words);

	$html_editor = packages::getHtmlEditor($listing_array['package_id']);
	$smarty->assign("html_editor", $html_editor);

	if($ads_settings['enable_price']) {
		global $currencies;
		$smarty->assign("currencies", $currencies);
	}

	setGmaps('cf', $fieldset, $smarty);

	$cf=new fields('cf');
	$htmlarea = $cf->HTMLAreaFieldExists($fieldset);
	$smarty->assign("htmlarea",$htmlarea);
	$smarty->assign("tmp",$listing_array);

}

if($step==2) {

	require_once $config_abs_path."/classes/categories.php";
	require_once $config_abs_path."/classes/fields.php";
	require_once $config_abs_path."/classes/packages.php";
	require_once $config_abs_path."/classes/depending_fields.php";
	require_once $config_abs_path."/classes/users.php";
	require_once $config_abs_path."/classes/validator.php";
	require_once $config_abs_path."/include/gmaps_util.php";
	require_once $config_abs_path."/libs/JSON.php";

	$ret = array("response" => 1, "error" => array(), "ad_id" =>$id);

	require_once "../classes/listings_process.php";
	require_once "../classes/fields_process.php";
	$lp = new listings_process();
	$lp->setEdit(1);
	$errors_str="";
	if(!$lp->edit($id)) {
		$ret['error'] = $lp->getError();
		$ret['response'] = 0;
		
		global $appearance_settings;
		if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

		echo json_encode($ret);
		exit();
	} 

	global $appearance_settings;
        if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret);

} // end step 2

if($step==3) {

	global $appearance_settings;
	header('Content-type: text/html; charset='.$appearance_settings['charset']);

	require_once $config_abs_path."/classes/categories.php";
	require_once $config_abs_path."/classes/pictures.php";
	require_once $config_abs_path."/include/gmaps_util.php";

	$listing = new listings();
	
	$listing_array = $listing->getListing($id);
	$category_id = $listing_array['category_id'];
	$fieldset = categories::getFieldset($category_id);

	$u = new users();
	$gr = $u->getGroup($listing_array['user_id']);

	$fields_array=common::getCachedObject("base_listing_fields", array("fieldset" => $fieldset, "group"=>$gr));
	$smarty->assign("fields_array", $fields_array);
	$smarty->assign("category", $category_id);
	$smarty->assign("fieldset", $fieldset);

	setGmaps('cf', $fieldset, $smarty);

	$cf=new fields('cf');
	$smarty->assign("tmp",$listing_array);

	global $default_fields_types;
	$smarty->assign("default_fields_types", $default_fields_types);

} //end step 3

if($step!=2) $smarty->assign("step",$step);

if($db->error!='' && $step!=2) { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

if($step!=2) $smarty->display('edit_listing.html');

$db->close();
if($step==1) close();
?>
