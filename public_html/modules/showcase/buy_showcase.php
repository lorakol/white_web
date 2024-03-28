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
require_once $config_abs_path."/modules/showcase/classes/showcase.php";


$step = get_numeric("step", 1);

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

$sw = new showcase();
$sw_settings = $sw->getSettings();

$amount = $sw_settings['price'];

$allowed = 0;
if($config_vars['credits_enabled']) {
	
	require_once $config_abs_path."/classes/credits.php";
	$cr = new credits();
	$credits_settings = $cr->getSettings();

	$allowed = credits::creditsAllowed($credits_settings);

}

if($step==1) {

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
	$smarty->assign("credits_allowed", $allowed);

	$processors = new payment_processors();
	$payment_processors = $processors->getActivePaymentProcessors();
	$no_processors = $processors->getNoActive();
	$smarty->assign("payment_processors",$payment_processors);
	$smarty->assign("no_processors",$no_processors);

	// $enable_coupons
	if(coupons::typeExists('store')) $enable_coupons = 1; else $enable_coupons = 0;
	$smarty->assign("enable_coupons", $enable_coupons);

	$smarty->assign("total", $sw_settings['price']);
	$smarty->assign("sw_settings", $sw_settings);

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
	$actions_array['user_id'] = $crt_usr;

	$actions_array['showcase']['value'] = 1;
	$actions_array['showcase']['price'] = $amount;
 
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


if($step==1) $smarty->display('modules/showcase/buy_showcase.html');

$db->close();
if($db->error!='') { $db_error = $db->getError(); if($step==1) $smarty->assign('db_error',$db_error); else echo $db_error; }
if($step==1) close();

?>
