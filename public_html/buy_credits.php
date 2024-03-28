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
require_once "classes/users.php";
require_once "classes/credits.php";

global $db;
global $lng;

$step = get_numeric("step", 1);

if($step<3) {
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");
$smarty->assign("step",$step);

}
else common_no_template();

global $ads_settings,  $settings;
global $logged_in, $crt_usr, $usr_sett;

$cr = new credits();
$credits_settings = $cr->getSettings();

// verifications
if($step<3) {

	// not allowed for not logged in guests
	if(!$logged_in) { header("Location: ".$config_live_site."/login.php?loc=buy_credits.php"); exit(0); }

	// if credits not enabled
	global $config_vars;
	if(!$config_vars['credits_enabled']) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }

	// if group is not allowed for credits
	$allowed = 1;
	if($credits_settings['groups']!=0) {
		$groups_array = explode(",", $credits_settings['groups']);
		if(!in_array($usr_sett['group'], $groups_array) ) $allowed=0;
	}
	if(!$allowed) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }

}

if($step==1) {

	$credits_packages = $cr->getCreditPackages($usr_sett['group']);
	$no_packages = count($credits_packages);
	$smarty->assign("credits_packages",$credits_packages);

	if($no_packages==1) {

			$only_plan = $credits_packages[0]['id'];
			$smarty->assign("only_plan",$only_plan);

			$smarty->assign("plan", $only_plan);
			$smarty->assign("plan_name", $credits_packages[0]['name']);
			$smarty->assign("plan_price", $credits_packages[0]['price_curr']);

	}

	if($no_packages==0) {

		$error = "There are no available credit plans for your account!";
		$smarty->assign("error",$error);

	}

}

if($step==2) {

	$error="";
	if(!empty($_GET['plan']) && is_numeric($_GET['plan'])) $package_id = $_GET['plan'];
	else $error = $lng['buy_package']['error']['choose_package'];

	if($package_id) {

		if(empty($plan_details)) $plan_details = $cr->getCreditPackage($package_id);
		if(!$cr->creditsAllowed($credits_settings)) $error = "There are no available credit plans for your account!";

		$processors = new payment_processors();
		$payment_processors = $processors->getActivePaymentProcessors();
		$no_processors = $processors->getNoActive();
		$smarty->assign("payment_processors",$payment_processors);
		$smarty->assign("no_processors",$no_processors);
		$smarty->assign("total", $plan_details['price']);

		// $enable_coupons
		require_once "classes/coupons.php";
		if(coupons::typeExists('ads')) $enable_coupons = 1; else $enable_coupons = 0;
		$smarty->assign("enable_coupons", $enable_coupons);

	}

	$smarty->assign("error", $error);

}

if($step==3) {

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	$ret = array("response" => 1, "error" => null, "payment_form"=>"");

	$actions_array = createActionsArray();

	$plan = escape($_POST['plan']);

	$cr = new credits;
	$amount = $cr->getPrice($plan);

	$full_amount = $amount;
	$actions_array['credits_pkg_id'] = $plan;
	$actions_array['new_creditspkg']['value'] = 1;
	$actions_array['new_creditspkg']['price'] = $amount;

	$discount_code = '';
	if(isset($_POST['discount_code'])) {

		require_once "classes/coupons.php";
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
			$actions_array['discount_code'] = $discount_code;

		} else $discount_code="";
	}
		

	// recalculate amount
/*	$pa = new payment_actions();
	$calc_amount = $pa->recalculateAmount($crt_usr, $actions_array);

	if( $amount!=$calc_amount)  { 

		$ret['error']="Error: invalid payment amount $amount != $calc_amount !";
		$ret['response'] = 0;
		
		global $appearance_settings;
		if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

		echo json_encode($ret);
		exit(0);

	}
*/
	// discount
	if($discount_code) {
		$cp = new coupons;
		$cp->addDiscount($plan, 'new_creditspkg', $discount_code, $crt_usr);
	}

	if(!$amount) { 
		$processor = "free";
	}
	else {
 
		if(!$_POST['processor']) {

			$ret['error'] = $lng['buy_package']['error']['choose_processor'];
			$ret['response'] = 0;
			
			global $appearance_settings;
			if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

			echo json_encode($ret);
			exit(0);

		}	
		else { 

			$processor = escape($_POST['processor']);

			$found=0;
			$processors = new payment_processors();
			$payment_processors = $processors->getActivePaymentProcessors();
			foreach ($payment_processors as $p) if($p['processor_code'] == $processor) { 
				$found=1;
			}

			if(!$found) { 

				$ret['error'] = $lng['buy_package']['error']['invalid_processor']; 
				$ret['response'] = 0;
				
				global $appearance_settings;
				if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

				echo json_encode($ret);
				exit(0);

			}

		}  // end if processor
	} // if not free

	// recalculate amount with tax 
	$pp = new payment_processors();
	$tax = $pp->calculateTax($processor, $amount);

	// set payment details
	$payment = new payment( $processor );
	$payment->setUserId($crt_usr);
	$payment->setAmount($amount+$tax);
	$payment->setActionsArray($actions_array);
	$payment->setTax($tax);
	$payment->setFormTitle($lng['general']['finish']);
	$manual = $payment->getManual();
	$payment_form = $payment->writeForm();
	$ret['payment_form'] = $payment_form;

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret);

}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

if($step<3) $smarty->display('buy_credits.html');
if($step<=1)  close();

$db->close();
?>
