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
require_once "classes/payment_actions.php";
require_once "classes/users_packages.php";
require_once "classes/payment.php";
require_once "classes/payment_processors.php";
require_once "classes/priorities.php";
require_once "classes/featured_plans.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

$auth=new auth();
$username = $auth->loggedIn();
if(!$username) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }
$smarty->assign("username",$username);
global $crt_usr;

$id = get_numeric_only("id");

$actions=new payment_actions();
$action = $actions->getPaymentAction($id);
if($action['user_id'] != $crt_usr) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }
$smarty->assign("action",$action);



$total = add_currency(format_numeric($action['amount']));
$smarty->assign("total",$total);

$payment = new payment( $action['processor'] , $action['ukey'] );
$payment->setUserId($crt_usr);

$action_array = unserialize($action['action']);
//_print_r($action_array);
//exit(0);
// check if recurring payment
$recurring = 0;
if( isset($action_array['pkg_id']) && $action_array['pkg_id'] )
{	
	require_once "classes/users_packages.php";
	$up = new users_packages();
	$pkg_type = $up->getPackageType($action_array['pkg_id']);
	
	if($pkg_type=="sub") {
		$recurring = payment_processors::getRecurring($action['processor']);
	}
	
}

if($recurring) {

		$plan_details =  $up->getPackage($action_array['pkg_id']);
		$recurring_amount = $plan_details['amount'];
		$pp = new payment_processors();
		$recurring_amount_tax = $pp->calculateTax($action['processor'], $recurring_amount);
		
		// if discount set first payment the payment with discount and next the normal price
		$payment->setSubscription( $recurring_amount+$recurring_amount_tax, $plan_details['subscription_time'] );
		// it is important to be set second, resets the full amount
		if( $action['amount'] != $recurring_amount+$recurring_amount_tax ) {
			$payment->setFirstSubscription( $action['amount'], $plan_details['subscription_time'] );
		}
} 
else {
	$payment->setAmount($action['amount']);
	}
$manual = $payment->getManual();
$payment->setFormTitle($lng['listings']['finalize']);
$payment_form = $payment->writeForm($action['id']);
$smarty->assign("pay_form",$payment_form);

//}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('complete_payment.html');

$db->close();
close();
?>
