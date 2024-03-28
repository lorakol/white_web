<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("auto_repost", $modules_array)) return;
global $self_noext;

function autoRepostInclude() {

	global $config_abs_path;
	require_once $config_abs_path."/modules/auto_repost/classes/auto_repost.php";
	
	global $crt_lang, $config_abs_path, $lng_repost;
	$lang_file = $config_abs_path."/modules/auto_repost/lang/$crt_lang.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/auto_repost/lang/eng.php";
	require_once $lang_file;

}

function auto_repost_init_template($smarty) {

	autoRepostInclude();

	global $smarty;
	$rp = new auto_repost;
	$rp->initTemplatesVals($smarty);
	
}

function autoRepostPaymentAddAction($actions_array, $type, $object_id, $user_id, $invoice_no, $extra_options_pending) {

	autoRepostInclude();
	if(!isset($actions_array['auto_repost']['value']) || !$actions_array['auto_repost']['value']) return;
	$action = new actions();
	$type="auto_repost";
	$action->add($type, $object_id, $user_id, $invoice_no, $extra_options_pending);

}

function autoRepostPaymentIdentifyPaidUpgrade( $paid_upgrade, $amount, $actions_array ) {

	autoRepostInclude();
	if(!isset($actions_array['auto_repost']['value']) || !$actions_array['auto_repost']['value']) return;

	if( $amount && $actions_array['auto_repost']['price'] ) $paid_upgrade=1;
	
}

function autoRepostPaymentEnableExtraFeature ($act_type, $actions_array, $payment_pending, $invoice_no) {

	autoRepostInclude();
	if(!isset($actions_array['auto_repost']['value']) || !$actions_array['auto_repost']['value']) return;

	if ($act_type>0 && $actions_array['auto_repost']['value']!=0) {

		if(!$payment_pending){

			$rp = new auto_repost();
			if($actions_array['auto_repost']['value']!=0) { 
				$repost_id = $rp->listingHasRepost($actions_array['ad_id']);
				$rp->Enable($repost_id);
			}	

			$pa = new payment_actions();
			$pa->ActivateInvoice($invoice_no);

		} // end else if upgrades pending

	}

}

function autoRepostSetInfoStr($actions_array, $payment_pending, &$info, &$mail_template) {

	autoRepostInclude();
	if(!isset($actions_array['auto_repost']['value']) || !$actions_array['auto_repost']['value']) return;

	$info = info::getVal("auto_repost");
	//$mail_template = "auto_repost_your_ad";

}

function autoRepostMakeActionsStr($action, &$action_str, $ad_lnk) {

	autoRepostInclude();
	if(isset($action['auto_repost']) && isset($action['auto_repost']['value']) && $action['auto_repost']['value']==1 ) {
		global $lng_repost;
		$action_str.=$lng_repost['repost_your_ad'].$ad_lnk."<br>";
	}
}

function autoRepostMakeInvoicePaymentDetails($action, &$payment_details) {

	if(isset($action['auto_repost']['value']) && $action['auto_repost']['value']==1 && $action['auto_repost']['price']>0) {
	
		global $lng_repost;
		$i = count($payment_details);
		$payment_details[$i]['description'] = $lng_repost['repost_your_ad'];
		$payment_details[$i]['amount'] = $action['auto_repost']['price'];
		$payment_details[$i]['amount_nice'] = add_currency($payment_details[$i]['amount']);

	}

}

function autoRepostPeriodic() {

	autoRepostInclude();
	$rp = new auto_repost;
	$rp->periodic();
	
}

function autoRepostListingDetails(&$result) {

	autoRepostInclude();
	$rp = new auto_repost;
	$i=0;
	foreach($result as $row) {
		$result[$i]['repost'] = $rp->getRepostForListing($row['id']);
		$result[$i]['pending_repost'] = $rp->getPendingRepostForListing($row['id']);
		$i++;
	}

}

function autoRepostActivatePending($listing_id) {

	global $config_abs_path;
	require_once $config_abs_path."/modules/auto_repost/classes/auto_repost.php";

	// make action not pending
	global $db;
	$db->query("update ".TABLE_ACTIONS." set pending=0 where type='auto_repost' and object_id = $listing_id");
	
	$rp = new auto_repost;
	$repost_id = $rp->listingHasRepost($listing_id);
	$rp->Enable($repost_id);

}

function autoRepostCheckListing($smarty, $id) {

	$rp = new auto_repost;
	$reposted = $rp->listingHasRepost($id);
	$smarty->assign("reposted", $reposted);
	if(!$reposted) {
		global $lng_repost;
		$smarty->assign("lng_repost", $lng_repost);
	}
}

function repostManageListings($smarty, &$listings_array) {

	global $config_abs_path;
	require_once $config_abs_path."/modules/auto_repost/classes/auto_repost.php";
	
	global $appearance_settings, $config_admin_folder;
	$al = $appearance_settings['admin_language'];
	$lang_file = $config_abs_path."/".$config_admin_folder."/modules/auto_repost/lang/$al.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/auto_repost/lang/eng.php";
	require_once $lang_file;

	$smarty->assign("lng_repost", $lng_repost);

	
}

function postRepostListings($smarty, $post_array, $page) {

	global $modules_array, $config_abs_path, $db;
	if(!in_array("auto_repost", $modules_array)) return;
	require_once $config_abs_path."/modules/auto_repost/classes/auto_repost.php";
	$ar = new auto_repost();

	// check post for suspend all / unsuspend all
	if(isset($_POST['repost_selected']) || isset($_POST['repost_selected_x'])) {
	
		foreach($_POST as $key=>$value) {
			if(!preg_match('/^(ad)([0-9])+/',$key)) continue;
			if($value!="on") continue;
			$id = substr($key, 2);

			if(!is_numeric($id)) continue;
			
			$ar->updateAd($id);
			
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

add_action('init_template', 'auto_repost_init_template');
add_action('payment_add_action', 'autoRepostPaymentAddAction');
add_action('payment_identify_paid_upgrade', 'autoRepostPaymentIdentifyPaidUpgrade');
add_action('payment_enable_extra_feature', 'autoRepostPaymentEnableExtraFeature');
add_action('payment_set_info_str', 'autoRepostSetInfoStr');
add_action('payment_actions_make_actions_str', 'autoRepostMakeActionsStr');
add_action('make_invoice_payment_details', 'autoRepostMakeInvoicePaymentDetails');
add_action('periodic_hourly', 'autoRepostPeriodic');
add_action('detailed_listings_result', 'autoRepostListingDetails');
add_action('activate_pending_ad', 'autoRepostActivatePending');
add_action('details_page', 'autoRepostCheckListing');
add_action('manage_listings', 'repostManageListings');
add_action('manage_listings_search', 'postRepostListings');

?>