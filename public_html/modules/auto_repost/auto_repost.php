<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../../include/include.php";
global $config_abs_path;
require_once $config_abs_path."/include/payments.php";
require_once $config_abs_path."/classes/coupons.php";
require_once $config_abs_path."/modules/auto_repost/classes/auto_repost.php";


$step = get_numeric("step", 1);
$id = get_numeric_only("id");

$l = new listings;
$active = $l->isActive ($id);
if(!$active) {
	header("Location: ../../my_listings.php");
	exit(0);
}

// check if there is already an active auto_repost task
$rp = new auto_repost();
$exists = $rp->listingHasRepost($id, 1);
if($exists) {
	header("Location: ../../my_listings.php");
	exit(0);
}

// check if allowed user group


if($step==1) {
	global $lng;
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("section","other");
}
else common_no_template();

global $ads_settings;
global $crt_usr, $usr_sett, $config_vars;

$rp_settings = $rp->getSettings();

// if user group not allowed
global $usr_sett;
if($rp_settings['groups']!=0 && !in_array($usr_sett['group'], $rp_settings['groups_array'])) {
	header("Location: ../../useraccount.php");
	exit(0);
}

$amount = $rp_settings['price'];


if($step==1) {

	$allowed = 0;
	if($config_vars['credits_enabled']) {
	
		require_once $config_abs_path."/classes/credits.php";
		$cr = new credits();
		$credits_settings = $cr->getSettings();

		$allowed = credits::creditsAllowed($credits_settings);

	}
	$smarty->assign("credits_allowed", $allowed);
	if($allowed) 
	{

		$smarty->assign("credits_settings", $credits_settings);
		$current_credits = credits::creditsForUser($crt_usr);
		$smarty->assign("current_credits", $current_credits);
		$smarty->assign("credits_formatted", format_numeric($current_credits));
		$needed_credits = $amount/$credits_settings['unit'];
		$needed_credits = format_price($needed_credits, '', '', '.');
		$smarty->assign("needed_credits", $needed_credits);

	}

	$processors = new payment_processors();
	$payment_processors = $processors->getActivePaymentProcessors();
	$no_processors = $processors->getNoActive();
	$smarty->assign("payment_processors",$payment_processors);
	$smarty->assign("no_processors",$no_processors);

	// $enable_coupons
	if(coupons::typeExists('ads')) $enable_coupons = 1; else $enable_coupons = 0;
	$smarty->assign("enable_coupons", $enable_coupons);

	$smarty->assign("total", $rp_settings['price']);
	$smarty->assign("id", $id);
	$smarty->assign("rp_settings", $rp_settings);

}

if($step==2) {

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	// send the following response back:
	// response = 1 / 0
	// error - the error if exists
	// payment_form - the form for payment
	$ret = array("response" => 1, "error" => null, "payment_form"=>"");

	if(isset($_POST["no_reposts"]) && is_numeric($_POST["no_reposts"])) $no_reposts = escape($_POST["no_reposts"]); // numeric
	else exit(0);
	
	if(isset($_POST["repost_period"]) && is_numeric($_POST["repost_period"])) $repost_period = escape($_POST["repost_period"]); // numeric
	else exit(0);
	
	$repost_period_um = $_POST["repost_period_um"]; // d or h
	if($repost_period_um!="h" && $repost_period_um!='d') $repost_period_um='d';
	
	$starting_hour = $ending_hour = '-1';
	$specific_period = checkbox_value("specific_period");
	if($specific_period==1) {
		if(isset($_POST['starting_hour']) && $_POST['starting_hour']) $starting_hour = escape($_POST["starting_hour"]);
		if($starting_hour<0) $starting_hour=0;
		if($starting_hour>23) $starting_hour=23;
		if(isset($_POST['ending_hour']) && $_POST['ending_hour']) $ending_hour = escape($_POST["ending_hour"]);
		if($ending_hour<0) $ending_hour=0;
		if($ending_hour>23) $ending_hour=23;
	}
	
	$rp->addAutoRepost($id, $no_reposts, $repost_period, $repost_period_um, $starting_hour, $ending_hour);
	
	$amount = $amount * $no_reposts;
	
	$discount_code = "";
	if(isset($_POST['discount_code'])) {

		$discount_code = escape($_POST['discount_code']);

		// check if valid code
		if($arr = coupons::codeValid($discount_code, 'ads', $crt_usr, $usr_sett['group'])) {

			$def_amount=$amount;
			$discount = $arr['discount'];
			if($arr['type'] == "fixed") {

				$amount = $def_amount-$discount;
				if($amount<0) $amount = 0;

			} else { // percent

				$amount = $def_amount - ($discount*$def_amount)/100;
			}

		} else $discount_code = "";
	}

	if(!$amount) $processor = "free";
	else {
 
		require_once $config_abs_path."/classes/credits.php";
		$cr = new credits();
		$credits_settings = $cr->getSettings();

		$allowed = credits::creditsAllowed($credits_settings);
		$current_credits = credits::creditsForUser($crt_usr);
		$needed_credits = $amount/$credits_settings['unit'];
		$needed_credits = format_price($needed_credits, '', '', '.');

	 	if(!$_POST['processor']){

			if ($allowed) 	$ret['error'] = $lng['credits']['not_enough_credits'];
			else   $ret['error'] = $lng['buy_package']['error']['choose_processor'];
			$ret['response'] = 0;
			
			global $appearance_settings;
			if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

			echo json_encode($ret);
			exit(0);

	 	}	
		else { 

			$processors = new payment_processors();
			$payment_processors = $processors->getActivePaymentProcessors();

			$processor = escape($_POST['processor']);
			$found=0;
			foreach ($payment_processors as $p) if($p['processor_code'] == $processor) $found=1;

			if($processor=="credits") {
				$needed_credits = $amount/$credits_settings['unit'];
				$needed_credits = format_price($needed_credits, '', '', '.');
				if($needed_credits>$current_credits) $error.=$lng['credits']['not_enough_credits'];
			}

			if(!$found && ($processor != "credits" || !$allowed)) {

					$ret['error'] = $lng['buy_package']['error']['invalid_processor']; 
					$ret['response'] = 0;
					
					global $appearance_settings;
					if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

					echo json_encode($ret);
					exit(0);

			}

		}// end if processor
	} // if not free

	$actions_array = createActionsArray();
	$actions_array['ad_id'] = $id;

	$actions_array['auto_repost']['value'] = 1;
	$actions_array['auto_repost']['price'] = $amount;
	
	if($discount_code){ 

		$actions_array['discount_code'] = $discount_code;
		$cp = new coupons;
		$cp->addDiscount($crt_usr, 'ads', $discount_code, $crt_usr);

	}

	// recalculate amount with tax 
	$pp = new payment_processors();
	$tax = $pp->calculateTax($processor, $amount);

	$payment = new payment( $processor );
	$payment->setUserId($crt_usr);
	$payment->setAmount($amount+$tax);
	$payment->setActionsArray($actions_array);
	$payment->setTax($tax);
	$payment->setFormTitle($lng['general']['next']);
	$manual = $payment->getManual();
	$pending = $payment->isPending();
	$payment_form = $payment->writeForm();

	$ret['payment_form'] = $payment_form;
    
        global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret);

}


if($step==1) $smarty->display('modules/auto_repost/auto_repost.html');

$db->close();
if($db->error!='') { $db_error = $db->getError(); if($step==1) $smarty->assign('db_error',$db_error); else echo $db_error; }
if($step==1) close();

?>
