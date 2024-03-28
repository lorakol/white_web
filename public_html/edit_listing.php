<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/packages.php";
require_once "classes/badwords.php";
require_once "include/gmaps_util.php";
require_once "classes/categories.php";
require_once "classes/fields.php";
require_once "classes/depending_fields.php";

global $db;
global $lng;
global $settings;

$step = get_numeric("step", 0);
$id = get_numeric_only("id");

if(!$step || $step==3) {

	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("section","account");

}
else 	
	common_no_template();


$listing=new listings;
global $crt_usr;

if(!$crt_usr && $settings['nologin_enabled']) $nologin = 1; else  $nologin = 0;

// verifications

if(!$crt_usr && !$settings['nologin_enabled']) { 
	if(!$step) header("Location: ".$config_live_site."/login.php?loc=edit_listing.php?id=".$id); 
	exit(0);
}
else if(!$crt_usr && $settings['nologin_enabled']) {
	if(!isset($_GET['key'])){ 
		if(!$step) header("Location: ".$config_live_site."/not_authorized.php"); 
		exit(0); 
	}
	$key = escape($_GET['key']);
	if(!$listing->correctKey($id, $key)) { 
		if(!$step) header("Location: ".$config_live_site."/not_authorized.php"); 
		exit(0); 
	}
	if(!$step) $smarty->assign("key",$key);
} else 
if($crt_usr!=listings::getUser($id)) { 
	if(!$step) header("Location: ".$config_live_site."/not_authorized.php"); 
	exit(0); 
}

if(!$step || $step==3) {
	if($nologin) $gr="-1";
	else { 
		global $usr_sett;
		$gr = $usr_sett['group'];
	}
}

// end verifications

$pending_edited = 0; 
global $ads_settings;
if($ads_settings['pending_edited']  && listings::wasListingPostedAsPending($id)) $pending_edited=1;
if($step!=2) 	$smarty->assign("pending_edited",$pending_edited);

if(!$step) {

	do_action("newad_form", array($smarty));

	$listing_array = $listing->getListing($id,1);
	$category_id = $listing_array['category_id'];
	$fieldset = categories::getFieldset($category_id);

	$fields=common::getCachedObject("base_listing_fields", array("fieldset" => $fieldset, "group"=>$gr));
	$smarty->assign("fields", $fields);
	$smarty->assign("category", $category_id);
	$smarty->assign("fieldset", $fieldset);

	if($nologin) {

		$uf=new fields('uf');
		$user_fields=common::getCachedObject("base_user_fields", array("group" => -1));
		$smarty->assign("user_fields", $user_fields);

		$user_gmaps_array = '';
		$user_gmaps_array = addGmaps('uf', -1, $user_gmaps_array, $listing_array['user']);

		$smarty->assign("user_gmaps", $user_gmaps_array['gmaps']);
		$smarty->assign("user_gmaps_value_exists", $user_gmaps_array['value_exists']);

	}

	$no_words = packages::getNoWords($listing_array['package_id']);
	$html_editor = packages::getHtmlEditor($listing_array['package_id']);
	$smarty->assign("no_words", $no_words);
	$smarty->assign("html_editor", $html_editor);

	setGmaps('cf', $fieldset, $smarty);

	$cf=new fields('cf');
	
	$htmlarea = $cf->HTMLAreaFieldExists($fieldset);
	$smarty->assign("htmlarea",$htmlarea);
	$smarty->assign("id",$id);
	$smarty->assign("tmp",$listing_array);
//_print_r($listing_array);
}

if($step==2) {

	require_once "classes/validator.php";
	require_once "classes/listings_process.php";
	require_once "classes/fields_process.php";
	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	require_once "classes/pictures.php";

	// send the following response back:
	// response = 1 / 0
	// error - array containing errors strings and fields which contain the error
	$ret = array("response" => 1, "error" => null, "info" =>null);

	$lp = new listings_process();
	$lp->setEdit(1);

	if(!$lp->edit($id)) {

		$ret['error'] = $lp->getError();
		$ret['response'] = 0;

	}

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

}

if($step==3) {

	global $appearance_settings;
	header('Content-type: text/html; charset='.$appearance_settings['charset']);

	require_once "classes/pictures.php";

	if(!$pending_edited)
		$listing_array = $listing->getListing($id);
	else {
		$pending_listing_array = $listing->getPendingEdited($id);
		$listing_array = $listing->getListing($id, 0, $pending_listing_array);
	}
//_print_r($listing_array);

	$category_id = $listing_array['category_id'];
	$fieldset = categories::getFieldset($category_id);

	$fields_array=common::getCachedObject("base_listing_fields", array("fieldset" => $fieldset, "group"=>$gr));
	$smarty->assign("fields_array", $fields_array);
	$smarty->assign("category", $category_id);
	$smarty->assign("fieldset", $fieldset);

	if($nologin) {
		$uf=new fields('uf');
		$user_fields=common::getCachedObject("base_user_fields", array("group" => -1));
		$smarty->assign("user_fields", $user_fields);

		$user_gmaps_array = '';
		$user_gmaps_array = addGmaps('uf', -1, $user_gmaps_array, $listing_array['user']);

		$smarty->assign("user_gmaps", $user_gmaps_array['gmaps']);
		$smarty->assign("user_gmaps_value_exists", $user_gmaps_array['value_exists']);

	}

	setGmaps('cf', $fieldset, $smarty);

	$smarty->assign("id",$id);
	$smarty->assign("tmp",$listing_array);
	$smarty->assign("step",$step);

}

if($step!=2) {
	if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
	$smarty->display('edit_listing.html');
}
if(!$step) close();
$db->close();
?>
