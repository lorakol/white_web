<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("bump", $modules_array)) return;
global $self_noext;

function bumpInclude() {
	global $config_abs_path;
	require_once $config_abs_path."/modules/bump/classes/bump.php";
	
	global $crt_lang, $config_abs_path, $lng_ba;
	$lang_file = $config_abs_path."/modules/bump/lang/$crt_lang.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/bump/lang/eng.php";
	require_once $lang_file;

}

function bump_init_template($smarty) {

	bumpInclude();
	global $smarty;
	$ba = new bump;
	$ba->initTemplatesVals($smarty);
	
}

function bumpPaymentAddAction($actions_array, $type, $object_id, $user_id, $invoice_no, $extra_options_pending) {

	bumpInclude();
	if(!isset($actions_array['bump']['value']) || !$actions_array['bump']['value']) return;
	$action = new actions();
	$type="bump";
	$action->add($type, $object_id, $user_id, $invoice_no, $extra_options_pending);
	$ba = new bump;
	$ba->addOption($object_id);

}

function bumpPaymentIdentifyPaidUpgrade( $paid_upgrade, $amount, $actions_array ) {

	bumpInclude();
	if(!isset($actions_array['bump']['value']) || !$actions_array['bump']['value']) return;

	if( $amount && $actions_array['bump']['price'] ) $paid_upgrade=1;
	
}

function bumpPaymentEnableExtraFeature ($act_type, $actions_array, $payment_pending, $invoice_no) {

	bumpInclude();
	if(!isset($actions_array['bump']['value']) || !$actions_array['bump']['value']) return;

	if ($act_type>0 && $actions_array['bump']['value']!=0) {

		$listings = new listings();
		if(!$payment_pending){

			$ba = new bump();
			if($actions_array['bump']['value']!=0) $ba->bumpAd($actions_array['ad_id']);

			$pa = new payment_actions();
			$pa->ActivateInvoice($invoice_no);

		} // end else if upgrades pending

	}

}

function bumpSetInfoStr($actions_array, $payment_pending, &$info, &$mail_template) {

	bumpInclude();
	if(!isset($actions_array['bump']['value']) || !$actions_array['bump']['value']) return;

	$info = info::getVal("bump_your_ad");
	//$mail_template = "bump_your_ad";

}

function bumpMakeActionsStr($action, &$action_str, $ad_lnk) {

	bumpInclude();
	if(isset($action['bump']) && isset($action['bump']['value']) && $action['bump']['value']==1 ) {
		global $lng_ba;
		$action_str.=$lng_ba['bump_your_ad'].$ad_lnk."<br>";
	}
}

function bumpMakeInvoicePaymentDetails($action, &$payment_details) {

	if(isset($action['bump']['value']) && $action['bump']['value']==1 && $action['bump']['price']>0) {
	
		global $lng_ba;
		$i = count($payment_details);
		$payment_details[$i]['description'] = $lng_ba['bump_your_ad'];
		$payment_details[$i]['amount'] = $action['bump']['price'];
		$payment_details[$i]['amount_nice'] = add_currency($payment_details[$i]['amount']);

	}

}

function bumpAddToTemplate($smarty) {

    $file = "modules/bump/listings.html";
    $listings_bottom_inclusions = $smarty->getTemplateVars('listings_bottom_inclusions');
    if(!$listings_bottom_inclusions) $listings_bottom_inclusions = array();
    array_push( $listings_bottom_inclusions, $file);
    $smarty->assign("listings_bottom_inclusions", $listings_bottom_inclusions);

}

function bumpManageListings($smarty, &$listings_array) {

	global $config_abs_path;
	require_once $config_abs_path."/modules/bump/classes/bump.php";
	
	global $appearance_settings, $config_admin_folder;
	$al = $appearance_settings['admin_language'];
	$lang_file = $config_abs_path."/".$config_admin_folder."/modules/bump/lang/$al.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/bump/lang/eng.php";
	require_once $lang_file;

	$ba = new bump;
	$settings = $ba->getSettings();
	$smarty->assign("ba_settings", $settings);
	$smarty->assign("lng_ba", $lng_ba);

	
}

function postBumpListings($smarty, $post_array, $page) {

	global $modules_array, $config_abs_path, $db;
	if(!in_array("bump", $modules_array)) return;
	require_once $config_abs_path."/modules/bump/classes/bump.php";
	$ba = new bump();
	$ba_settings = $ba->getSettings();
	$smarty->assign("ba_settings", $ba_settings);

	// check post for suspend all / unsuspend all
	if(isset($_POST['bump_selected'])) {
	
		foreach($_POST as $key=>$value) {
			if(!preg_match('/^(ad)([0-9])+/',$key)) continue;
			if($value!="on") continue;
			$id = substr($key, 2);
			if(!is_numeric($id)) continue;
			
			if(isset($_POST['bump_selected'])) { $days = $_POST['bump_all_days']; $ba->bumpAd($id, $days); };
			
		}
		
		$location="manage_listings.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}
		header("Location: ".$location);
		exit(0);
		
	}

}

function bumpAdmin() {

	global $config_abs_path;
	require_once $config_abs_path."/modules/bump/classes/bump.php";
	
	global $appearance_settings, $config_admin_folder;
	$al = $appearance_settings['admin_language'];
	$lang_file = $config_abs_path."/".$config_admin_folder."/modules/bump/lang/$al.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/bump/lang/eng.php";
	require_once $lang_file;
/*
	$ba = new bump;
	$settings = $ba->getSettings();
	$smarty->assign("ba_settings", $settings);
	$smarty->assign("lng_ba", $lng_ba);
*/
	
}


add_action('init_template', 'bump_init_template');
add_action('payment_add_action', 'bumpPaymentAddAction');
add_action('payment_identify_paid_upgrade', 'bumpPaymentIdentifyPaidUpgrade');
add_action('payment_enable_extra_feature', 'bumpPaymentEnableExtraFeature');
add_action('payment_set_info_str', 'bumpSetInfoStr');
add_action('payment_actions_make_actions_str', 'bumpMakeActionsStr');
add_action('make_invoice_payment_details', 'bumpMakeInvoicePaymentDetails');
add_action('listings_page', 'bumpAddToTemplate');
add_action('manage_listings', 'bumpManageListings');
add_action('manage_listings_search', 'postBumpListings');
add_action('edit_ad_settings', 'bumpAdmin');

// function replaced by periodic::deleteOptions
//add_action('periodic', 'bumpPeriodic');
//do_action("payment_add_to_message", array(&$array_message));
?>