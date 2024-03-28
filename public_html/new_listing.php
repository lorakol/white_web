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
require_once "classes/users_packages.php";
require_once "classes/priorities.php";
require_once "classes/featured_plans.php";
require_once "classes/users.php";

global $db;
global $lng;

$step = get_numeric("step", 0);

if($step<4 || $step==5) {
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");
}
else 
	common_no_template();

global $settings, $ads_settings, $crt_usr, $usr_sett, $is_admin;

if($is_admin) { 
	global $config_admin_folder;
	header("Location: ".$config_admin_folder."/new_listing.php"); 
	exit(0); 
}

if(!$crt_usr) $crt_usr = 0;

if($step<4 || $step==5) if(!$crt_usr && !$settings['nologin_enabled']) { header("Location: login.php?loc=new_listing.php"); exit(0); }

if(!$crt_usr && $settings['nologin_enabled']) $nologin = 1; else $nologin = 0;

if($step<4 || $step==5) $smarty->assign("nologin", $nologin);

if($step<4 || $step==5) {
// get categories allowed for user group
if($nologin) $group = '1000';
else { global $usr_sett; $group = $usr_sett['group']; }
$smarty->assign("group", $group);

}

if(!$step) {
	// do include actions
	do_action("newad", array($smarty));

	unset($_SESSION['pictures']);
	$_SESSION['pictures'] = array();

	$categories=common::getCachedObject("base_short_categories", array("group" => $group, "parent" => 0));
	$smarty->assign("short_categories", $categories);

} // end if step 0

// listing plans
if($step==2) {

	global $appearance_settings;
	header('Content-type: text/html; charset='.$appearance_settings['charset']);

	$category = get_numeric_only("category");
	
	// check if the user owns a package and the package is active
	$up = new users_packages();
	if($nologin) { 
		$subscriptions=array(); 
		$no_subscriptions=0; 
	}
	else {
		$subscriptions = $up->getActiveUserSubscriptions($crt_usr, $category);
		$no_subscriptions = count($subscriptions);
	}

	// get available plans array
	$pkg = new packages;
	$plans_array = $pkg->getAllPlans($group, $category, $crt_usr);
	$no_plans = count($plans_array);

	// no subscriptions, get plans array
	if($no_subscriptions==0) { 

		if($no_plans==1) { 
			//"only_plan|plan_id|plan_name|no_words"
			echo "only_plan|".$plans_array[0]['id']."|".$plans_array[0]['name']."|".$plans_array[0]['no_words'];
			return;
		}

	}

	// if only one subscription and no other plans to choose from
	else if($no_subscriptions==1 && $no_plans==0) {

		//"only_plan|sub_id|plan_id|plan_name|no_words|sub_details"
		$sub_details = users_packages::makeSubDetails($subscriptions[0]);
		echo "only_sub|".$subscriptions[0]['usr_pkg']."|".$subscriptions[0]['package_id']."|".$subscriptions[0]['package_name']."|".$subscriptions[0]['no_words']."|".$sub_details;
		return;

	}
	// more than one subscription
	else {
		$i = 0;
		foreach($subscriptions as $s) {
			$subscriptions[$i]['details'] = users_packages::makeSubDetails($subscriptions[$i]);
			$i++;
		}
	}

	$smarty->assign("plans_array",$plans_array);
	$smarty->assign("no_plans",$no_plans);

	$smarty->assign("subscriptions", $subscriptions);
	$smarty->assign("no_subscriptions", $no_subscriptions);

}

// ad details, photos and extra options
if($step==3) {

	do_action("newad_form", array($smarty));

	global $appearance_settings;
	header('Content-type: text/html; charset='.$appearance_settings['charset']);

	$category = get_numeric_only("category");
	$plan = get_numeric("plan", 0);
	$subscription = get_numeric("subscription", 0);

	if( !$plan ) exit(0);

	require_once "include/gmaps_util.php";
	require_once "classes/payment_processors.php";
	require_once "classes/coupons.php";
	require_once "classes/categories.php";

	// ************ CUSTOM FIELDS ****************

	// get number of words for current package
	$smarty->assign("no_words", packages::getNoWords($plan));

	// get custom fields for the selected category
	if($nologin) $gr="-1";
	else { 
		global $usr_sett;
		$gr = $usr_sett['group'];
	}

	$fieldset = categories::getFieldset($category);
	$fields=common::getCachedObject("base_listing_fields", array("fieldset" => $fieldset, "group"=>$gr));
	$smarty->assign("fields", $fields);
	$smarty->assign("fieldset", $fieldset);

	// set google maps fields 
	$gmaps_array = addGmaps('cf', $fieldset);

	$smarty->assign("tmp", array("user" => array()));

	// get contact info fields if not logged in user
	if($nologin) {
		$uf=new fields('uf');
		$user_fields=common::getCachedObject("base_user_fields", array("group" => -1));
		$smarty->assign("user_fields", $user_fields);
		// add to google maps fields 
		$gmaps_array = addGmaps('uf', -1, $gmaps_array);	
	}

	gmapsSmartyAssign($gmaps_array, $smarty);

	// ************ PHOTOS ****************

	$no_photos = packages::getNoPictures($plan);
	$smarty->assign("no_photos", $no_photos);

	// ************ EXTRA OPTIONS ****************
	// check if extra options are allowed
	$extra_options=0;
	if( (($crt_usr && $settings['users_feature_ads']) || (!$crt_usr && $settings['nologin_extra_options']) ) && ($ads_settings['enable_featured'] || $ads_settings['enable_highlited'] || $ads_settings['enable_priorities'] || $ads_settings['enable_video'] || $ads_settings['enable_urgent'] || $ads_settings['enable_url']))

		$extra_options=1; 

	$smarty->assign("extra_options",$extra_options);

	$pkg = new packages();
	$pkg_det = $pkg->getPackage($plan);
	$plan_name = $pkg_det['name'];
	$html_editor = $pkg_det['html_editor'];
	
	if(!$subscription) $amount = $pkg_det['amount']; else $amount = 0;

	$featured = 0; $highlited=0; $priority=0; $video = 0; $urgent=0; $url=0;
	// get extra options included with the plan
	if($plan && $extra_options) {

		if($pkg_det['featured']==1) $featured = 100;
		$highlited = $pkg_det['highlited'];
		$urgent = $pkg_det['urgent'];
		$priority = priorities::getOrderNo($pkg_det['priority']);
		$priority_name = priorities::getName($pkg_det['priority']);
		$video = $pkg_det['video'];
		$url = $pkg_det['url'];

	}
	$smarty->assign("featured",$featured);
	$smarty->assign("highlited",$highlited);
	$smarty->assign("urgent",$urgent);
	$smarty->assign("priority",$priority);
	$smarty->assign("priority_name",$priority_name);
	$smarty->assign("video",$video);
	$smarty->assign("url",$url);
	$smarty->assign("html_editor",$html_editor);
	$smarty->assign("plan_amount",add_currency(format_price($amount)));
	$smarty->assign("total",$amount);
	$smarty->assign("plan_name",$plan_name);
	$smarty->assign("subscription",$subscription);

	// get priorities list
	if($ads_settings['enable_priorities']) {
		$priorities = common::getCachedObject("base_priorities");
		$smarty->assign("priorities",$priorities);
	}

	// get featured plans list
	if($ads_settings['enable_featured']) {
		$featured_plans = common::getCachedObject("base_featured_plans");
		$smarty->assign("featured_plans",$featured_plans);
	}

	$processors = new payment_processors();
	$payment_processors = $processors->getActivePaymentProcessors();
	$no_processors = $processors->getNoActive();
	$smarty->assign("payment_processors",$payment_processors);
	$smarty->assign("no_processors",$no_processors);

	// $enable_coupons
	if(coupons::typeExists('ads')) $enable_coupons = 1; else $enable_coupons = 0;
	$smarty->assign("enable_coupons", $enable_coupons);

	// credits
	global $config_vars;
	$allowed=0;
	if($crt_usr)
		$allowed = $config_vars['credits_enabled'];
	if($allowed) {
	
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
}

// post ad step
if($step==4) {

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";
	require_once "classes/badwords.php";
	require_once "classes/pictures.php";
	require_once "classes/images.php";
	require_once "classes/validator.php";
	require_once "classes/listings_process.php";
	require_once "classes/fields.php";
	require_once "classes/fields_process.php";
	require_once "classes/categories.php";
	//require_once "include/gmaps_util.php";

	// send the following response back:
	// response = 1 / 0
	// error - array containing errors strings and fields which contain the error
	// amount calculated for the current options
	$ret = array("response" => 1, "error" => array(), "amount" => 0, "payment_form"=>"");

	if($nologin) {
	    $sp_response = array();
	    do_action("nologin_ad_post", array(&$sp_response, getRemoteIp(), $_POST['mgm_email']));
	    if($sp_response && is_array($sp_response)) { 
		array_push($ret['error'], $sp_response); 
		
		global $appearance_settings;
		if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

		echo json_encode($ret); 
		return;
	    }
	}

	$actions_array = createActionsArray();

	// check if valid !!!! if not throw error
	// save category and plan id

	$category = escape($_POST['category']);
	$package = escape($_POST['package']);
	$subscription = escape($_POST['subscription']);
	$user_package = $subscription;

	if($subscription) $actions_array['newpkg']['value'] = 0;
	else $actions_array['newpkg']['value'] = 1;
	// calculate total amount
	$amount = 0;

	// if subscription set amount = 0 !!!!!!!!!

	$pkg = new packages();
	$pkg_det = $pkg->getPackage($package);
	if($pkg_det['featured']==1) $featured = 100;
	$highlited = $pkg_det['highlited'];
	$urgent = $pkg_det['urgent'];
	$priority = priorities::getOrderNo($pkg_det['priority']);
	$video = $pkg_det['video'];
	$url = $pkg_det['url'];
	if(!$subscription) $amount = $pkg_det['amount'];

	$actions_array['newpkg']['price'] = $amount;

	$priorities = common::getCachedObject("base_priorities");
	
	$featured_plans = common::getCachedObject("base_featured_plans");

	$eop = array("featured", "highlited", "priority", "video", "urgent", "url");
	foreach($eop as $e) {
		$actions_array[$e]['value']=0;
		$actions_array[$e]['price']=0;
	}

	$extra_price = 0;
	if( isset($_POST['featured']) && $_POST['featured']) {
		if(!$featured) {
			$ad_featured_plan = escape($_POST['featured']);
			foreach($featured_plans as $fp) if($fp['id']==$ad_featured_plan) $featured_plan_amount = $fp['amount'];
			$extra_price+=$featured_plan_amount;
			$actions_array['featured']['value']=$ad_featured_plan;
			$actions_array['featured']['price']=$featured_plan_amount;
		}
	}

	if( isset($_POST['highlited']) && $_POST['highlited']=="on") {
		if(!$highlited) {
			$extra_price+=$ads_settings['highlited_price'];
			$actions_array['highlited']['value']=1;
			$actions_array['highlited']['price']=$ads_settings['highlited_price'];
		}
	}

	if( isset($_POST['urgent']) && $_POST['urgent']=="on") {
		if(!$urgent) {
			$extra_price+=$ads_settings['urgent_price'];
			$actions_array['urgent']['value']=1;
			$actions_array['urgent']['price']=$ads_settings['urgent_price'];
		}
	}

	if( isset($_POST['priority']) && $_POST['priority']) {
		if(!$priority) {
			$ad_priority = escape($_POST['priority']);
			foreach($priorities as $p) if($p['order_no']==$ad_priority) $pri_amount = $p['price'];
			$extra_price+=$pri_amount;
			$actions_array['priority']['value']=$ad_priority;
			$actions_array['priority']['price']=$pri_amount;
		}
	}

	$video_code = "";
	if( (isset($_POST['video']) && $_POST['video']=="on") || $video) {

		if(!$video) {
			$extra_price+=$ads_settings['video_price'];
			$actions_array['video']['value']=1;
			$actions_array['video']['price']=$ads_settings['video_price'];
		}
	
		if(isset($_POST['video_code'])) { 
			$video_code = escape($_POST['video_code']);
			if(!strstr($video_code, " wmode=\"transparent\"")) $video_code = str_replace("></embed>", " wmode=\"transparent\"></embed>", $video_code);
		}

		if($video_code) { 
			$valid_video_code = 0;
			require_once "classes/validator.php";
			if(!validator::valid_youtube($_POST['video_code'])) { 
				global $lng; 
				array_push($ret['error'], array("field"=> "video", "error" => $lng['listings']['errors']['invalid_youtube_video']));
				$ret['response'] = 0;
				
				global $appearance_settings;
				if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

				echo json_encode($ret);
				exit();

			}
			else $valid_video_code = 1; 
		}

	}

	$site_url = "";
	if( (isset($_POST['url']) && $_POST['url']=="on") || $url) {

		if(!$url) {
			$extra_price+=$ads_settings['url_price'];
			$actions_array['url']['value']=1;
			$actions_array['url']['price']=$ads_settings['url_price'];
		}
	
		if(isset($_POST['site_url'])) { 
			$site_url = escape($_POST['site_url']);
		}

		if($site_url) { 
			$valid_site_url = 0;
			require_once "classes/validator.php";
			if(!validator::valid_url($_POST['site_url'])) { 
				global $lng; 
				array_push($ret['error'], array("field"=> "url", "error" => $lng['listings']['errors']['invalid_url']));
				$ret['response'] = 0;
				
				global $appearance_settings;
				if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

				echo json_encode($ret);
				exit();

			}
			else $valid_site_url = 1; 
		}

	}

	$amount = $extra_price + $amount;
	$full_amount = $amount;

	$discount_code = "";
	if(isset($_POST['discount_code']) && $_POST['discount_code']) {

		require_once "classes/coupons.php";
		$code = escape($_POST['discount_code']);

		global $usr_sett; $group = $usr_sett['group']; 
		if(!$group) $group = 0;

		// check if valid code
		if($arr = coupons::codeValid($code, 'ads', $crt_usr, $group)) {

			$def_amount=$amount;
			$discount = $arr['discount'];
			if($arr['type'] == "fixed") {

				$amount = $def_amount-$discount;
				if($amount<0) $amount = 0;

			} else { // percent

				if($discount==100) $amount=0;
				else $amount = $def_amount - ($discount*$def_amount)/100;

			}

			$discount_code = $code;
			$actions_array['discount_code'] = $code;

		}

	}
	else {
		$discount_code = "";
	}

	$ret['amount'] = $amount;
//_print_r($_POST);
//_print_r($_FILES);

//exit(0);

	$lp = new listings_process();
	if(!$lp->add()) { 
		$ret['error'] = $lp->getError();
		$ret['response'] = 0;
		
		global $appearance_settings;
		if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

		echo json_encode($ret);
		exit();
	}

	$ad_id = $lp->getLast();

	$actions_array['ad_id'] = $ad_id;
	$actions_array['newad']['value'] = 1;
	$actions_array['pkg_id'] = listings::getUserPackage($ad_id);

	// add video if the case
	if( $video_code && $valid_video_code) listings::saveVideo($ad_id, $video_code, $video);

	// add url if the case
	if( $site_url && $valid_site_url) listings::saveUrl($ad_id, $site_url, $url);

	// set listing plan details
	$listing = new listings();
	$is_subscription = 0;
	$recurring_amount  = 0;
	//if($package) {

		//$actions_array['pkg_id'] = $package; // ???????? user_package value ?????

	$pkg = new packages();
	$is_subscription = $pkg->getType($package);
	if($is_subscription=="sub" && $pkg->getSubscriptionTime($package)) { 
		$is_subscription = 1;
		$recurring_amount = $pkg->getAmount($package);
		$subscription_time = $pkg->getSubscriptionTime($package);
	} 
	else $is_subscription = 0;

	//}

	require_once "include/payments.php";
	require_once "classes/actions.php";

	// recalculate amount
	/*$pa = new payment_actions();
	$calc_amount = $pa->recalculateAmount($crt_usr, $actions_array);

	if($amount!=$calc_amount) {

		array_push($ret['error'], array("field"=> "extra_options", "error" => "Error: invalid payment amount $amount != $calc_amount !"));
		$ret['response'] = 0;
		
		global $appearance_settings;
		if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

		echo json_encode($ret); 
		exit();

	} */

	if($discount_code) {
		$cp = new coupons;
		$cp->addDiscount($ad_id, 'newad', $discount_code, $crt_usr);
	}

	if($amount==0) { 
		$processor = 'free';
	}
	else { 


		// credits
		require_once "classes/settings.php";
		$credits_allowed = settings::getCreditsEnabled();
		$allowed = 0;
		if($credits_allowed) {

			require_once "classes/credits.php";
			$cr = new credits();
			$credits_settings = $cr->getSettings();

			$allowed = credits::creditsAllowed($credits_settings);
		
		}

		if(!$_POST['processor']) {

			if ($allowed) 	array_push($ret['error'], array("field"=> "extra_options", "error" => $lng['credits']['not_enough_credits']));
			else  array_push($ret['error'], array("field"=> "extra_options", "error" => $lng['buy_package']['error']['choose_processor']));
			$ret['response'] = 0;
			
			global $appearance_settings;
			if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

			echo json_encode($ret); 
			exit();
		}	

		$processor = escape($_POST['processor']);

		$found=0;
		$processors = new payment_processors();
		$payment_processors = $processors->getActivePaymentProcessors();


		foreach ($payment_processors as $p) if($p['processor_code'] == $processor) { 
			$found=1;
		}

		if($found && isset($_POST['recurring'.$processor]) && $_POST['recurring'.$processor]=="on") $recurring = 1;

		if($processor=="credits") {

			require_once "classes/credits.php";

			$cr = new credits();
			$credits_settings = $cr->getSettings();

			$needed_credits = $amount/$credits_settings['unit'];
			$needed_credits = format_price($needed_credits, '', '', '.');
			$current_credits = credits::creditsForUser($crt_usr);

			if($needed_credits>$current_credits) { 
				array_push($ret['error'], array("field"=> "extra_options", "error" => $lng['credits']['not_enough_credits']));
				$ret['response'] = 0; 
				
				global $appearance_settings;
				if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

				echo json_encode($ret); 
				exit();
			}
		}

		if(!$found && ($processor != "credits" || !$allowed)) { 
			array_push($ret['error'], array("field"=> "extra_options", "error" => $lng['buy_package']['error']['invalid_processor']));
			$ret['response'] = 0; 
			
			global $appearance_settings;
			if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

			echo json_encode($ret); 
			exit();
		}

	} // end if not free 


	$recurring = payment_processors::getRecurring($processor);
	// check if recurring
	if($is_subscription && $recurring) {
		if($recurring==2) {
			if(!isset($_POST['recurring'.$processor]) || $_POST['recurring'.$processor]!="on") $recurring = 0;
		} 
	} else $recurring = 0;

	
	if(!$nologin) {

		require_once $config_abs_path."/classes/groups.php";
		global $usr_sett; $user_group = $usr_sett['group'];
		$group = new groups();
		$listing_pending = $group->getListingPending($user_group);

	} else {

		if($settings['nologin_activate_via_email'] || $settings['nologin_activate_via_sms']) $listing_pending =1;

	}

	// recalculate amount with tax 
	$pp = new payment_processors();
	if($recurring_amount) $recurring_amount_tax = $pp->calculateTax($processor, $recurring_amount);
	$tax = $pp->calculateTax($processor, $amount);


	$payment = new payment( $processor );
	$payment->setUserId($crt_usr);

	if($recurring>0) { 

		// if discount set first payment the payment with discount and next the normal price
		$payment->setSubscription( $recurring_amount+$recurring_amount_tax, $subscription_time );
		// it is important to be set second, resets the full amount
		if( $amount != $recurring_amount ) $payment->setFirstSubscription( $amount+$tax, $subscription_time );

	}

	else 
		$payment->setAmount($amount+$tax);
//_print_r($actions_array);
//exit(0);
	$payment->setActionsArray($actions_array);
	$payment->setTax($tax);
	$payment->setFormTitle($lng['general']['finish']);
	$manual = $payment->getManual();
	$payment_form = $payment->writeForm();
	
	$err = $payment->getError();
	if($err!='') {
			array_push($ret['error'], array("field"=> "selected_processor", "error" => $err));
			$ret['response'] = 0; 
			
			global $appearance_settings;
			if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

			echo json_encode($ret); 
			exit();
	}
	else 
		$ret['payment_form'] = $payment_form;

        global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret); //htmlspecialchars(json_encode($ret), ENT_NOQUOTES);


} // end step 4

// plan details
if($step=="5") {

	$plan_id = get_numeric_only("plan"); 
	$pkg = new packages();
	$plan = $pkg->getPackage($plan_id);
	$smarty->assign("plan", $plan);

}


if($step<4 || $step==5) $smarty->assign("step",$step);

if($db->error!='' && ( $step<4 || $step==5 )) { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

if($step<4 || $step==5) $smarty->display('new_listing.html');
if($step==1) close();

$db->close();
?>
