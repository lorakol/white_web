<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/payment_actions.php";
require_once "../classes/actions.php";
require_once "../classes/priorities.php";
require_once "../classes/featured_plans.php";
require_once "../classes/users_packages.php";
require_once "../classes/users.php";
require_once "../classes/fields.php";
require_once "../classes/depending_fields.php";
require_once "../classes/packages.php";
require_once "../classes/categories.php";
require_once "../classes/mails.php";
require_once "../classes/mail_templates.php";
require_once "../classes/credits.php";
require_once "../classes/listings.php";
require_once "../classes/pictures.php";

//area search module
global $modules_array;
if(in_array("areasearch", $modules_array)) {
	require_once($config_abs_path.'/modules/areasearch/include.php');
}

$post = get_numeric("post", 0);

global $db;
global $lng;

if(!$post) {
	$smarty = new Smarty;
	$smarty = common($smarty);
} 
else common_no_template();

$type_array = array("ad", "user", "sub", "invoice");
$id = get_numeric_only("id");
if(isset($_GET['type']) && in_array($_GET['type'], $type_array)) $type = $_GET['type']; else exit(0);

if(!$post) {
	$smarty->assign("lng",$lng);
	$smarty->assign("id",$id);
	$smarty->assign("type",$type);
}

$actions = new actions;
$action = $actions->getInvoiceActions($id, $type);

// if show actions for listings get also pending packages
if($type=='ad') {
	$usr_pkg = listings::getUserPackage($id);
	// if package is subscription
	$up = new users_packages();
	$pkg_type = $up->getPackageType($usr_pkg);
	if($pkg_type=="sub") {
		$action_sub = $actions->getInvoiceActions($usr_pkg, 'sub');
		$i = count($action);
		foreach ($action_sub as $a) {
			$action[$i] = $a;
			$i++;
		}
	}
}

if($post) {

	$ret = array("response" => 0, "error" => array(), "info" => null);

	$finish_upgrade = 0;
	$newad = 0;
	$featured=0; $highlited=0; $video=0; $urgent; $url; $priority=0;

	if(isset($_POST['complete_payment'.$action[0]['invoice']]) && $_POST['complete_payment'.$action[0]['invoice']]=="on") {
		$pa = new payment_actions;
		$pa->ActivateInvoice($action[0]['invoice']);
	}

	foreach ($action as $a) {

	// skip not pending actions
	if(!$a['pending']) continue;
	if($_POST['type']=="accept") {

	// options first , when sending mails the options will be already activated 
	if( ( $a['type'] == "featured" ) && isset($_POST['featured'.$a['object_id']]) && $_POST['featured'.$a['object_id']]=="on") {
		$listings = new listings;
		$listings->makeFeatured($a['object_id'], $a['featured_plan_id']);
		$finish_upgrade = 1;
		$user_id = $a['user_id'];
		$ad_id = $a['object_id'];
		$featured=1;
	}

	if( ( $a['type'] == "highlited" ) && isset($_POST['highlited'.$a['object_id']]) && $_POST['highlited'.$a['object_id']]=="on") {
		$listings = new listings;
		$listings->makeHighlited($a['object_id']);
		$finish_upgrade = 1;
		$user_id = $a['user_id'];
		$ad_id = $a['object_id'];
		$highlited=1;
	}

	if( ( $a['type'] == "priority" ) && isset($_POST['priority'.$a['object_id']]) && $_POST['priority'.$a['object_id']]=="on") {
		$listings = new listings;
		$listings->enablePriority($a['object_id'], $a['priority_id']);
		$finish_upgrade = 1;
		$user_id = $a['user_id'];
		$ad_id = $a['object_id'];
		$priority=priorities::getNameByOrder($a['priority_id']);
	}

	if( ( $a['type'] == "urgent" ) && isset($_POST['urgent'.$a['object_id']]) && $_POST['urgent'.$a['object_id']]=="on") {
		$listings = new listings;
		$listings->makeUrgent($a['object_id']);
		$finish_upgrade = 1;
		$user_id = $a['user_id'];
		$ad_id = $a['object_id'];
		$urgent=1;
	}

	if( ( $a['type'] == "video" ) && isset($_POST['video'.$a['object_id']]) && $_POST['video'.$a['object_id']]=="on") {
		$listings = new listings;
		$listings->enableVideo($a['object_id']);
		$finish_upgrade = 1;
		$user_id = $a['user_id'];
		$ad_id = $a['object_id'];
		$video = 1;
	}

	if( ( $a['type'] == "url" ) && isset($_POST['url'.$a['object_id']]) && $_POST['url'.$a['object_id']]=="on") {
		$listings = new listings;
		$listings->enableUrl($a['object_id']);
		$finish_upgrade = 1;
		$user_id = $a['user_id'];
		$ad_id = $a['object_id'];
		$url = 1;
	}

	if( ( $a['type'] == "bump" ) && isset($_POST['bump'.$a['object_id']]) && $_POST['bump'.$a['object_id']]=="on") {
		global $config_abs_path;
		require_once $config_abs_path."/modules/bump/classes/bump.php";
		$ba = new bump;
		$ba->bumpAd($a['object_id']);
	}

	if( ( $a['type'] == "showcase" ) && isset($_POST['showcase'.$a['object_id']]) && $_POST['showcase'.$a['object_id']]=="on") {
		global $config_abs_path;
		require_once $config_abs_path."/modules/showcase/classes/showcase.php";
		$sw = new showcase;
		$sw->addShowcase($a['object_id']);
	}

	if( ( $a['type'] == "auto_repost" ) && isset($_POST['repost'.$a['object_id']]) && $_POST['repost'.$a['object_id']]=="on") {
		global $config_abs_path;
		require_once $config_abs_path."/modules/auto_repost/classes/auto_repost.php";
		$ar = new auto_repost;
		$ar->enableForListing($a['object_id']);
	}

	if( ( $a['type'] == "newad" || $a['type'] == "renewad" ) && isset($_POST['ad'.$a['object_id']]) && $_POST['ad'.$a['object_id']]=="on") { 
		$listings = new listings;
		$listings->ActivatePending($a['object_id']);
		$newad = 1;
		
		// if expired renew
 		if($listings->isExpired($a['object_id'])) { 
			$listings->renew($a['object_id']);
			$listings->renewOptions($a['object_id']);
		}
	}

	if( ( $a['type'] == "newpkg" || $a['type'] == "renewpkg" ) && isset($_POST['pkg'.$a['object_id']]) && $_POST['pkg'.$a['object_id']]=="on") {

		$pkg = new users_packages;
		$pkg->ActivatePending($a['object_id']);
	}

	if( $a['type'] == "new_creditspkg" && isset($_POST['credits_pkg'.$a['object_id']]) && $_POST['credits_pkg'.$a['object_id']]=="on") {
		$cr = new credits;
		$cr->ActivatePending($a['id'], $a['object_id'], $a['user_id']);
	}

	if( ( $a['type'] == "store" ) && isset($_POST['store'.$a['object_id']]) && $_POST['store'.$a['object_id']]=="on") {
		$usr = new users;
		$usr->enablePendingStore($a['object_id']);
	}

	} else { 
	// reject !

		$act = new actions;
		$act->removePending($a['id']);

		if( ( $a['type'] == "newad" || $a['type'] == "renewad" ) && isset($_POST['ad'.$a['object_id']]) && $_POST['ad'.$a['object_id']]=="on") { 
			$listings = new listings;
			$listings->delete($a['object_id']);
		}
		if( ( $a['type'] == "newpkg" || $a['type'] == "renewpkg" ) && isset($_POST['pkg'.$a['object_id']]) && $_POST['pkg'.$a['object_id']]=="on") {
			$pkg = new users_packages;
			$pkg->delete($a['object_id']);
		}

	}
	} // end foreach 

	if($_POST['type']=="accept") $ret['info'] = $lng['listings']['invoice_actions_updated'];
	else $ret['info'] = $lng['listings']['invoice_actions_rejected'];

	$action = $actions->getInvoiceActions($id, $type);

	// send mail to announce upgrade status
	if($finish_upgrade && !$newad) {

		global $config_abs_path;
		require_once $config_abs_path."/classes/users.php";
		$user_details = listings::getUserDetails($ad_id, $user_id);
		$title = cleanStr(listings::getTitle($ad_id));
		$key=''; if($user_details['key']) $key=$user_details['key'];
		$details_link = listings::makeDetailsLink($ad_id, $key);

		// send email
		$mail2send=new mails();
		$mail2send->init($user_details['email'], $user_details['name']);

		$array_subject = array("title" => $title);

		$array_message = array("username"=>$user_details['username'], "contact_name"=> $user_details['name'], "ad_id" => $ad_id, "details_link" => $details_link, "featured" => $featured, "highlited" => $highlited, "priority" => $priority, "urgent" => $urgent, "video" => $video, "url" => $url, "title" => $title);

		$mail2send->composeAndSend("ad_options_upgrade_done", $array_message, $array_subject);

	} // end if($finish_upgrade && !$newad)

	$ret['response'] = 1;

	require_once $config_abs_path."/libs/JSON.php";

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);
}

if(!$post) $smarty->assign("action",$action);


if($db->error!='') { 
	$db_error = $db->getError(); 
	if(!$post) $smarty->assign('db_error',$db_error); 
	else echo $db_error;
}

if(!$post) $smarty->display('selective_invoice_accept.html');

$db->close();
close();
?>
