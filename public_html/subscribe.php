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
require_once "classes/packages.php";
require_once "classes/users_packages.php";

global $lng;
global $ads_settings;

$step = get_numeric("step", 1);

if($step<3) {
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");
}
else common_no_template();

global $crt_usr, $usr_sett;

$user_package = new users_packages();
$pkg=new packages();

if(isset($_GET['id']) && is_numeric($_GET['id']) && $user_package->belongsToUser($_GET['id'], $crt_usr)) $id = $_GET['id']; else $id=0;
if(isset($_GET['renew']) && $_GET['renew']==1 && $id) $renew=1; else $renew=0;

if($step<3 && !$crt_usr) { header("Location: ".$config_live_site."/login.php?loc=subscribe.php"); exit(0); }

if($step<3) {

$smarty->assign("id",$id);
$smarty->assign("renew",$renew);
$smarty->assign("step",$step);

}//end if step<3


// step 1
if($step==1) {

	// if approve subscription, or renew subscription
	if($id || $renew) {

		
		$up = new users_packages();
		$package_id = $up->getPackageId($id);

		if($pkg->subscriptionAllowed($package_id, $crt_usr)) {

			$sub_details = $pkg->getPackage($package_id);

			$smarty->assign("subscription", $id);
			$smarty->assign("subscription_name", $sub_details['name']);
			$smarty->assign("subscription_price", $sub_details['price_curr']);
			$smarty->assign("full_total", $sub_details['amount']);

			$step = 2;
			$only_sub = $package_id;
			$smarty->assign("only_sub",$package_id);

		}
		else {
			
			$error=$lng['subscriptions']['max_usage_reached'];
			$smarty->assign("error",$error);
			$smarty->assign("only_sub",0);

		} // end if subscription allowed

	}
	else {

		require_once "classes/priorities.php";
		require_once "classes/featured_plans.php";
		$plans_array = $pkg->getAllSubscriptions($usr_sett['group'], $crt_usr);
		$no_plans = count($plans_array);

		$smarty->assign("plans_array",$plans_array);
		$smarty->assign("no_plans",$no_plans);
		$only_sub = 0;

		if($no_plans==1) {
			// move to next step
			$step = 2;
			$only_sub = $plans_array[0]['id'];
			$smarty->assign("only_sub",$only_sub);

			$smarty->assign("subscription", $only_sub);
			$smarty->assign("subscription_name", $plans_array[0]['name']);
			$smarty->assign("subscription_price", $plans_array[0]['price_curr']);

		}

		if($no_plans==0) {

			$error = "There are no available subscriptions for your account!";
			$smarty->assign("error",$error);
			$smarty->assign("only_sub",0);

		}
	}


}
//end step 1

// step 2
if($step==2) {

	$error="";
	if(!empty($_GET['subscription']) && is_numeric($_GET['subscription'])) $package_id = $_GET['subscription'];
	else if($only_sub) $package_id = $only_sub;
	else $error = $lng['buy_package']['error']['choose_package'];

	if($package_id) {

		if(empty($sub_details)) $sub_details = $pkg->getPackage($package_id);
		 if(!$pkg->allowedFor($sub_details, $usr_sett['group'], $crt_usr)) $error = $lng['buy_package']['error']['invalid_package'];

	}

	if(!$error) {

		$amount = $sub_details['amount'];
		$smarty->assign("full_total", $amount);
		$smarty->assign("total",$amount);

		global $config_vars;
		$allowed = 0;
		$credits_allowed = $config_vars['credits_enabled'];
		if($credits_allowed) {
	
			require_once "classes/credits.php";
			$cr = new credits();
			$credits_settings = $cr->getSettings();

			$allowed = credits::creditsAllowed($credits_settings);
		
		}

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
		require_once "classes/coupons.php";
		if(coupons::typeExists('ads')) $enable_coupons = 1; else $enable_coupons = 0;
		$smarty->assign("enable_coupons", $enable_coupons);

	}
	$smarty->assign("error",$error);

}//end step2

if($step==3) {

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	// send the following response back:
	// response = 1 / 0
	// error - the error if exists
	// payment_form - the form for payment
	$ret = array("response" => 1, "error" => null, "payment_form"=>"");

	$actions_array = createActionsArray();

	$subscription = escape($_POST['subscription']);
	$id = escape($_POST['subscription_id']);
	$renew = escape($_POST['renew']);

	$pkg = new packages;
	$amount = $pkg->getAmount($subscription);

	$full_amount = $amount;
	$package_id = $subscription;
	$actions_array['newpkg']['value'] = 1;
	$actions_array['newpkg']['price'] = $amount;

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
		
	if($renew || $id) { 
		$user_pkg_id = $id;
		if($renew) {
			$actions_array['newpkg']['value'] = 0;
			$actions_array['renewpkg']['value'] = 1;
		}
	} 
	else $user_pkg_id = $user_package->add($package_id, $crt_usr);// add package

	$actions_array['pkg_id'] = $user_pkg_id;

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
		$cp->addDiscount($actions_array['pkg_id'], 'newpkg', $discount_code, $crt_usr);
	}

	require_once "classes/settings.php";
	$credits_allowed = settings::getCreditsEnabled();

	if($credits_allowed) {

		require_once "classes/credits.php";
		$cr = new credits();
		$credits_settings = $cr->getSettings();

		$allowed = credits::creditsAllowed($credits_settings);
		
	}

	$recurring = 0;

	if(!$amount) { 
		$processor = "free";
	}
	else {
 
		if(!$_POST['processor']) {

			if ($allowed) 	$ret['error'] = $lng['credits']['not_enough_credits'];
			else   $ret['error'] = $lng['buy_package']['error']['choose_processor'];
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

			if($found && isset($_POST['recurring'.$processor]) && $_POST['recurring'.$processor]=="on") $recurring = 1;

			if($processor=="credits") {

				$needed_credits = $amount/$credits_settings['unit'];
				$needed_credits = format_price($needed_credits, '', '', '.');
				$current_credits = credits::creditsForUser($crt_usr);

				if($needed_credits>$current_credits) { 

					$ret['error']=$lng['credits']['not_enough_credits']; 
					$ret['response'] = 0; 
					
					global $appearance_settings;
					if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

					echo json_encode($ret);
					exit(0);

				}
			}

			if(!$found && ($processor != "credits" || !$allowed)) { 

				$ret['error'] = $lng['buy_package']['error']['invalid_processor']; 
				$ret['response'] = 0;
				
				global $appearance_settings;
				if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

				echo json_encode($ret);
				exit(0);

			}

		}  // end if processor
	} // if not free

	$recurring = payment_processors::getRecurring($processor);

	// check if recurring
	if($recurring) {
		if($recurring==2) {
			if(!isset($_POST['recurring'.$processor]) || $_POST['recurring'.$processor]!="on") $recurring = 0;
		} 
	} else $recurring = 0;

	$recurring_amount = 0;
	$pkg = new packages();
	$plan_details = $pkg->getPackage($package_id);

	if($recurring) $recurring_amount = $plan_details['amount'];

	// recalculate amount with tax 
	$pp = new payment_processors();
	if($recurring_amount) $recurring_amount_tax = $pp->calculateTax($processor, $recurring_amount);
	$tax = $pp->calculateTax($processor, $amount);

	// set payment details
	$payment = new payment( $processor );
	$payment->setUserId($crt_usr);

	if($recurring>0) { 

		// if discount set first payment the payment with discount and next the normal price
		$payment->setSubscription( $recurring_amount+$recurring_amount_tax, $plan_details['subscription_time'] );
		// it is important to be set second, resets the full amount
		if( $amount != $recurring_amount ) {
			$payment->setFirstSubscription( $amount+$tax, $plan_details['subscription_time'] );
		}

	}

	else 
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

} // end if step=3

if($step<3) $smarty->display('subscribe.html');

$db->close();
if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
if($step<=1) close();
?>
