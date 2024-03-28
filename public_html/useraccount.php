<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/users_packages.php";
require_once "classes/groups.php";
global $ads_settings;
if($ads_settings['saved_searches_enabled'])
	require_once "classes/saved_searches.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

global $logged_in, $crt_usr;

if(!$logged_in) { header("Location: ".$config_live_site."/login.php?loc=useraccount.php"); exit(0); }
$smarty->assign("username",$logged_in);

//removesub
if(isset($_GET['removesub']) && is_numeric($_GET['removesub'])) {
	$up = new users_packages();
	$removesub = $_GET['removesub'];
	if(!$up->belongsToUser($removesub, $crt_usr)) { header("Location: ".$config_live_site."/login.php?loc=useraccount.php"); exit(0); }
	$up->Remove($removesub);
	header("Location: useraccount.php");
	exit(0);
}

$usr = new users();
$user = $usr->getUser($crt_usr);
$smarty->assign("user",$user);

// number of auto register groups
global $config_vars;
$no_groups = $config_vars['no_groups'];
$smarty->assign("no_groups", $no_groups);
$groups = new groups();
$smarty->assign("group", $groups->getGroup($user['group']));

$no_listings=listings::getNoListings($crt_usr);
$no_active_listings=listings::getNoActiveListings($crt_usr);
$no_pending_listings=listings::getNoPendingListings($crt_usr);
$no_expired_listings=listings::getNoExpiredListings($crt_usr);
$no_unfinished_listings=listings::getNoUnfinishedListings($crt_usr);

$auth = new auth();
$last_login=$auth->getLoginBefore($logged_in);
$total_views = listings::getViewed($crt_usr);

// email alerts no
if($ads_settings['alerts_enabled']) {
	require_once "classes/alerts.php";
	$alerts = new alerts;
	$no_alerts = $alerts->getNoAlerts($crt_usr);
	$smarty->assign("no_alerts",$no_alerts);
}

// saved searches no
if($ads_settings['saved_searches_enabled']) {
	$ss = new saved_searches;
	$no_saved_searches = $ss->getNoSavedSearches($crt_usr);
	$smarty->assign("no_saved_searches",$no_saved_searches);
}

$smarty->assign("no_listings",$no_listings);
$smarty->assign("no_active_listings",$no_active_listings);
$smarty->assign("no_pending_listings",$no_pending_listings);
$smarty->assign("no_expired_listings",$no_expired_listings);
$smarty->assign("no_unfinished_listings",$no_unfinished_listings);
$smarty->assign("last_login",$last_login);
$smarty->assign("total_views",$total_views);

// get active subscriptions for this user
$up = new users_packages;
$subscriptions = $up->getUserSubscriptions($crt_usr);
$smarty->assign("subscriptions",$subscriptions);
if($subscriptions) {
	if(count($subscriptions)==1) {
		$smarty->assign("subscription",$subscriptions[0]);
	}

	if(count($subscriptions)>1) {

		$active_subscriptions = 0;
		$expired_subscriptions = 0;
		$pending_subscriptions = 0;
		$inactive_subscriptions = 0;

		foreach($subscriptions as $sub) {
			if($sub['usr_pkg_active']==1) $active_subscriptions++;
			else if ($sub['expired']) $expired_subscriptions++;
			else if ($sub['pending']) $pending_subscriptions++;
			else if($sub['usr_pkg_active']==0) $inactive_subscriptions++;
		}

		$smarty->assign("active_subscriptions",$active_subscriptions);
		$smarty->assign("expired_subscriptions",$expired_subscriptions);
		$smarty->assign("pending_subscriptions",$pending_subscriptions);
		$smarty->assign("inactive_subscriptions",$inactive_subscriptions);
	}
} // end if subscriptions
// credits
global $config_vars;
$allowed = 0;
if($config_vars['credits_enabled']) {
	require_once "classes/credits.php";
	$cr = new credits();
	$credits_settings = $cr->getSettings();

	$allowed = 1;
	$allowed = credits::creditsAllowed($credits_settings);

	if($allowed) {

		$smarty->assign("credits_settings", $credits_settings);
		$no_credits = users::getNoCredits($crt_usr);
		$smarty->assign("no_credits", $no_credits);
		$credits_amount=0;
		if($no_credits) $credits_amount = add_currency(format_price(users::getNoCreditsNoFormat($crt_usr)*$credits_settings['unit']));
		$smarty->assign("credits_amount", $credits_amount);
		// pending credits
		$pending_credits=credits::getPendingCredits($crt_usr);
		$smarty->assign("pending_credits", $pending_credits);

		// other payment processors
		require_once "classes/payment_processors.php";
		$processors = new payment_processors();
		$no_processors = $processors->getNoActive();
		$smarty->assign("no_processors",$no_processors);

	}
}
$smarty->assign("credits_allowed", $allowed);

global $usr_sett;
if($usr_sett['affiliate']) {
	$aff = new affiliates;
	$last_payment = $aff->getLastPayment($crt_usr);
	$next_payment_date = $aff->nextPaymentDate($crt_usr);
	$total_due = $aff->getTotalDue($crt_usr);
	$total_payments = $aff->getTotalPayments($crt_usr);
	$pending_payment = $aff->getPendingPayment($crt_usr);

	$smarty->assign("last_payment", $last_payment);
	$smarty->assign("next_payment_date", $next_payment_date);
	$smarty->assign("total_due",$total_due);
	$smarty->assign("total_payments",$total_payments);
	$smarty->assign("pending_payment",$pending_payment);

}

do_action("userstats", array($smarty, $crt_usr, $user));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

$smarty->display('useraccount.html');

$db->close();
close();
?>
