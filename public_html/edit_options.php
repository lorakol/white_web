<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/coupons.php";
require_once "classes/priorities.php";
require_once "classes/featured_plans.php";
require_once "classes/validator.php";
require_once "classes/users.php";
require_once "classes/payment_processors.php";

$id = get_numeric_only("id");
$step = get_numeric("step", 1);
global $lng;

if($step==1) {
	global $db;
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);

	$smarty->assign("id",$id);
	$smarty->assign("step",$step);
	$smarty->assign("section","account");
}
else common_no_template();

global $ads_settings, $settings;
global $crt_usr, $usr_sett;

$nologin = 0;
if(!$crt_usr) $nologin = 1;
$error='';
$listing = new listings;

// verifications
if($step==1) {

	if(!$crt_usr && !$settings['nologin_enabled']) { header("Location: ".$config_live_site."/login.php?loc=edit_options.php?id=".$id); exit(0); }
	else if($settings['nologin_enabled'] && !$crt_usr) {
		if(!isset($_GET['key'])){ header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }
		$key = escape($_GET['key']);
		if(!$listing->correctKey($id, $key)) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }
		$smarty->assign("key",$key);
	} else {
	if(($crt_usr && !$settings['users_feature_ads']) || ($crt_usr!=listings::getUser($id)) ) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }
	}

	$smarty->assign("nologin", $nologin);

	if($ads_settings['enable_featured'] || $ads_settings['enable_highlited'] || $ads_settings['enable_priorities'] || $ads_settings['enable_video'] || $ads_settings['enable_urgent'] || $ads_settings['enable_url']) $extra_options=1; else $extra_options=0;

	if(!$extra_options) $error=$lng['listings']['no_extra_options_available'];

	$smarty->assign("error",$error);

}



// check the options that the ad already has
$options = $listing->getAdOptions($id);

// get expiration dates
$expiration_dates = array("featured"=>"", "highlited"=>"", "priority"=>"", "enabled_video"=>"", "urgent"=>"", "enabled_url"=>"");
foreach($expiration_dates as $key=>$value) {

	if(isset($options[$key]) && $options[$key]>=1) { 
		if($key=="enabled_video") { $expiration_dates["video"] = $listing->getOptionExpirationDate("video", $id); continue; }
		if($key=="enabled_url") { $expiration_dates["url"] = $listing->getOptionExpirationDate("url", $id); continue; }
		$expiration_dates[$key] = $listing->getOptionExpirationDate($key, $id);
	}
}

$category = $listing->getCategory($id);

// get priorities
$pri = new priorities();
$priorities = common::getCachedObject("base_priorities");

// get featured plans
$fp = new featured_plans();
$featured_plans = common::getCachedObject("base_featured_plans");

$total = 0;

if($step==1 && !$error) {

	// get old video code
	$video_code = listings::getVideo($id);
	$site_url = listings::getUrl($id);
	$title = listings::getUrlTitle($id);
	$smarty->assign("listing_title", $title);

	$smarty->assign("full_total", $total);
	$smarty->assign("total", $total);
	$smarty->assign("video_code",$video_code);
	$smarty->assign("site_url",$site_url);

	$smarty->assign("options",$options);
	$smarty->assign("expiration_dates",$expiration_dates);

	$smarty->assign("category",$category);
	$smarty->assign("priorities",$priorities);
	$smarty->assign("featured_plans",$featured_plans);

	if(!$nologin) {

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
			$smarty->assign("needed_credits", 0);

		}
	} // end if !$nologin

	$processors = new payment_processors();
	$payment_processors = $processors->getActivePaymentProcessors();
	$no_processors = $processors->getNoActive();
	$smarty->assign("payment_processors",$payment_processors);
	$smarty->assign("no_processors",$no_processors);

	// $enable_coupons
	require_once "classes/coupons.php";
	if(coupons::typeExists('ads')) $enable_coupons = 1; else $enable_coupons = 0;
	$smarty->assign("enable_coupons", $enable_coupons);

} // end if step=1

if($step==2) {

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	$ret = array("response" => 1, "error" => null, "payment_form"=>"");

	$actions_array = createActionsArray();
	$actions_array['ad_id'] = $id;

	$amount = 0;
	$new_option = 0;

	$eop = array("featured", "highlited", "priority", "video", "urgent", "url");
	foreach($eop as $e) {
		$actions_array[$e]['value']=0;
		$actions_array[$e]['price']=0;
	}

	$extra_price = 0;
	if( isset($_POST['featured']) && $_POST['featured']) {
		if(!$options['featured']) {
			$ad_featured_plan = escape($_POST['featured']);
			foreach($featured_plans as $fp) if($fp['id']==$ad_featured_plan) $featured_plan_amount = $fp['amount'];
			$extra_price+=$featured_plan_amount;
			$actions_array['featured']['value']=$ad_featured_plan;
			$actions_array['featured']['price']=$featured_plan_amount;
			$new_option = 1;
		}
	}

	if( isset($_POST['highlited']) && $_POST['highlited']=="on") {
		if(!$options['highlited']) {
			$extra_price+=$ads_settings['highlited_price'];
			$actions_array['highlited']['value']=1;
			$actions_array['highlited']['price']=$ads_settings['highlited_price'];
			$new_option = 1;
		}
	}

	if( isset($_POST['urgent']) && $_POST['urgent']=="on") {
		if(!$options['urgent']) {
			$extra_price+=$ads_settings['urgent_price'];
			$actions_array['urgent']['value']=1;
			$actions_array['urgent']['price']=$ads_settings['urgent_price'];
			$new_option = 1;
		}
	}

	if( isset($_POST['priority']) && $_POST['priority']) {
		if(!$options['priority']) {
			$ad_priority = escape($_POST['priority']);
			foreach($priorities as $p) if($p['order_no']==$ad_priority) $pri_amount = $p['price'];
			$extra_price+=$pri_amount;
			$actions_array['priority']['value']=$ad_priority;
			$actions_array['priority']['price']=$pri_amount;
			$new_option = 1;
		}
	}

	if( (isset($_POST['video']) && $_POST['video']=="on") || $options['enabled_video']) {
		if(!$options['enabled_video']) {
			$extra_price+=$ads_settings['video_price'];
			$actions_array['video']['value']=1;
			$actions_array['video']['price']=$ads_settings['video_price'];
			$new_option = 1;
		}
		if(isset($_POST['video_code'])) { 
			$video_code = escape($_POST['video_code']);
			if(!strstr($video_code, " wmode=\"transparent\"")) $video_code = str_replace("></embed>", " wmode=\"transparent\"></embed>", $video_code);
		}
		if($video_code) { 
			require_once "classes/validator.php";
			if(!validator::valid_youtube($_POST['video_code'])) 
			{ 

				global $lng; 
				$ret['error'] = $lng['listings']['errors']['invalid_youtube_video'];
				$ret['response'] = 0;
				
				global $appearance_settings;
				if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

				echo json_encode($ret);
				exit(0);
		
			 }
			else listings::saveVideo($id, $video_code, $options['enabled_video']);
		}

	}

	if( (isset($_POST['url']) && $_POST['url']=="on") || $options['enabled_url']) {
		if(!$options['enabled_url']) {
			$extra_price+=$ads_settings['url_price'];
			$actions_array['url']['value']=1;
			$actions_array['url']['price']=$ads_settings['url_price'];
			$new_option = 1;
		}
		if(isset($_POST['site_url'])) { 
			$site_url = escape($_POST['site_url']);
		}
		if($site_url) { 
			require_once "classes/validator.php";
			if(!validator::valid_url($_POST['site_url'])) 
			{ 

				global $lng; 
				$ret['error'] = $lng['listings']['errors']['invalid_url'];
				$ret['response'] = 0;
				
				global $appearance_settings;
				if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

				echo json_encode($ret);
				exit(0);
		
			 }
			else listings::saveUrl($id, $site_url, $options['enabled_video']);
		}

	}

	if(!$new_option) { 

		$ret['error']=$lng['listings']['no_extra_options_selected'];
		$ret['response'] = 0;
		
		global $appearance_settings;
		if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

		echo json_encode($ret);
		exit(0);

	}

	$amount = $extra_price + $amount;

	$discount_code = '';
	if(isset($_POST['discount_code'])) {

		require_once "classes/coupons.php";
		$discount_code = escape($_POST['discount_code']);

		// check if valid code
		global $usr_sett;
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
/*	require_once "classes/payment_actions.php";
	$pa = new payment_actions();
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
		$cp->addDiscount($id, 'upgrade', $discount_code, $crt_usr);
	}

	require_once "classes/settings.php";
	$credits_allowed = settings::getCreditsEnabled();

	if($credits_allowed) {

		require_once "classes/credits.php";
		$cr = new credits();
		$credits_settings = $cr->getSettings();

		$allowed = credits::creditsAllowed($credits_settings);
		
	}

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

	// recalculate amount with tax 
	$pp = new payment_processors();
	$tax = $pp->calculateTax($processor, $amount);

	// set payment details
	require_once "classes/payment.php";
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

} // end step=2


if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

if($step==1) $smarty->display('edit_options.html');
if($step<=1)  close();

$db->close();
?>
