<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "include/payments.php";
require_once "classes/groups.php";
require_once "classes/coupons.php";

$step = get_numeric("step", 1);

if($step==1) {
	global $lng;
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("section","account");
}
else common_no_template();

global $ads_settings;
global $crt_usr, $usr_sett;

$amount = $ads_settings['store_price'];

// verifications
if($step==1) {
	if( !$crt_usr ) { header("Location: ".$config_live_site."/login.php?loc=buy_store.php"); exit(0); }
	$gr = new groups;
	if($gr->getStore($usr_sett['group'])!=1) {
		$smarty->assign("error", "Your user group is not allowed to use dealer page!");
	}
}

global $config_vars;
$allowed = 0;
if($config_vars['credits_enabled']) {
	
	require_once "classes/credits.php";
	$cr = new credits();
	$credits_settings = $cr->getSettings();

	$allowed = credits::creditsAllowed($credits_settings);

}

if($step==1) {

	if($allowed) 
	{

		$smarty->assign("credits_settings", $credits_settings);
		$smarty->assign("credits_allowed", $allowed);
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
	if(coupons::typeExists('store')) $enable_coupons = 1; else $enable_coupons = 0;
	$smarty->assign("enable_coupons", $enable_coupons);

	$smarty->assign("total", $ads_settings['store_price']);

}

if($step==2) {

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	// send the following response back:
	// response = 1 / 0
	// error - the error if exists
	// payment_form - the form for payment
	$ret = array("response" => 1, "error" => null, "payment_form"=>"");

	$discount_code = "";
	if(isset($_POST['discount_code'])) {

		$discount_code = escape($_POST['discount_code']);

		// check if valid code
		if($arr = coupons::codeValid($discount_code, 'store', $crt_usr, $usr_sett['group'])) {

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
 
		require_once "classes/credits.php";
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
				$needed_credits = $_SESSION['amount']/$credits_settings['unit'];
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

	$actions_array['store']['value'] = 1;
	$actions_array['store']['price'] = $amount;
 
	if($discount_code){ 

		$actions_array['discount_code'] = $discount_code;
		$cp = new coupons;
		$cp->addDiscount($crt_usr, 'store', $discount_code, $crt_usr);

	}

/*	// recalculate amount
	$pa = new payment_actions();
	$calc_amount = $pa->recalculateAmount($crt_usr, $actions_array);

	if($amount!=$calc_amount) {

		$ret['error']="Error: invalid payment amount $amount != $calc_amount !";
		$ret['response'] = 0;
		
		global $appearance_settings;
		if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

		echo json_encode($ret);
		exit(0);

	}
*/
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


if($step==1) $smarty->display('buy_store.html');


if($db->error!='') { 
	$db_error = $db->getError(); 
	if($step==1) $smarty->assign('db_error',$db_error); 
	else echo $db_error;
}
if($step==1) close();

$db->close();
?>
