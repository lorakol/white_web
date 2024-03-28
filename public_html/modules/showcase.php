<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("showcase", $modules_array)) return;
global $self_noext;

function showcaseInclude() {
	global $config_abs_path;
	require_once $config_abs_path."/modules/showcase/classes/showcase.php";
	
	global $crt_lang, $config_abs_path, $lng_ba;
	$lang_file = $config_abs_path."/modules/showcase/lang/$crt_lang.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/showcase/lang/eng.php";
	require_once $lang_file;

}

function showcase_init_template($smarty) {

	showcaseInclude();
	//global $smarty;
	$sw = new showcase;
	$sw->initTemplatesVals($smarty);
	
}

function showcasePaymentAddAction($actions_array, $type, $object_id, $user_id, $invoice_no, $extra_options_pending) {

	showcaseInclude();
	if(!isset($actions_array['showcase']['value']) || !$actions_array['showcase']['value']) return;
	$action = new actions();
	$type="showcase";
	$action->add($type, $object_id, $user_id, $invoice_no, $extra_options_pending);
	//$sw = new showcase;
	//$sw->addOption($user_id);
	
	/*if(!$extra_options_pending) {
	
		$pa = new payment_actions();
		$pa->ActivateInvoice($invoice_no);
	
		$str_expires = " `date_expires` = null";
		global $db;
		$db->query("delete from ".TABLE_OPTIONS." where `object_id` = $user_id and `option` like 'showcase'");

		$timestamp = date("Y-m-d H:i:s");
		$db->query("insert into ".TABLE_OPTIONS." set `object_id` = '$user_id', `option` = 'showcase', `date_added` = '$timestamp', $str_expires ");
	}*/

}

function showcaseEnable($act_type, $actions_array, $pending, $invoice_no){

	if(isset($actions_array['showcase']) && $actions_array['showcase'] && !$pending) {

		$sw = new showcase();
		$sw->enableShowcase($actions_array['user_id']);
		$pa = new payment_actions();
		$pa->ActivateInvoice($invoice_no);
	
	}

}

function addShowcase($user_id) {

	$str_expires = " `date_expires` = null";
	global $db;
	$db->query("delete from ".TABLE_OPTIONS." where `object_id` = $user_id and `option` like 'showcase'");

	$timestamp = date("Y-m-d H:i:s");
	$db->query("insert into ".TABLE_OPTIONS." set `object_id` = '$user_id', `option` = 'showcase', `date_added` = '$timestamp', $str_expires ");

}

function removeShowcase($user_id) {

	global $db;
	$db->query("delete from ".TABLE_OPTIONS." where `object_id` = $user_id and `option` like 'showcase'");

}

function showcaseSetInfoStr($actions_array, $payment_pending, &$info, &$mail_template) {

	showcaseInclude();
	if(!isset($actions_array['showcase']['value']) || !$actions_array['showcase']['value']) return;

/*	if($payment_pending)
		$info = info::getVal("showcase_pending");
	else*/
		$info = info::getVal("showcase");

}

function showcaseMakeActionsStr($action, &$action_str, $ad_lnk) {

	showcaseInclude();
	if(isset($action['showcase']) && isset($action['showcase']['value']) && $action['showcase']['value']==1 ) {
		global $lng_sw;
		$action_str.=$lng_sw['buy_showcase']."<br>";
	}
}

function showcaseMakeInvoicePaymentDetails($action, &$payment_details) {

	if(isset($action['showcase']['value']) && $action['showcase']['value']==1 && $action['showcase']['price']>0) {
	
		global $lng_sw;
		$i = count($payment_details);
		$payment_details[$i]['description'] = $lng_sw['buy_showcase'];
		$payment_details[$i]['amount'] = $action['showcase']['price'];
		$payment_details[$i]['amount_nice'] = add_currency($payment_details[$i]['amount']);

	}

}

function enableShowcaseToGroup($group_id) {

	global $db;
	$sw_val = escape($_POST['showcase']);
	if(is_numeric($sw_val) && $sw_val>=0 && $sw_val<=2)
		$db->query("update ".TABLE_USER_GROUPS." set `showcase`='$sw_val' where id='$group_id'");

}

function getShowcaseAds($smarty, $user_id){

	$sw = new showcase();
	$showcase_array = $sw->getShowcaseAds($user_id);
	$smarty->assign("showcase_array", $showcase_array);
	$no_showcase_ads = count($showcase_array);
	$smarty->assign("no_showcase_ads", $no_showcase_ads);
}

function getShowcaseOption(&$user){

	$user['showcase'] = showcaseEnabled($user['id']);

}

function getShowcaseOption1(&$user, $i){

	$user[$i]['showcase'] = showcaseEnabled($user[$i]['id']);

}

function hasShowcase($smarty){

	global $crt_usr;
	$showcase = showcaseEnabled($crt_usr);
	$smarty->assign("showcase_enabled", $showcase);

}

function showcaseEnabled($user_id) {

	global $db;
	//$group = $db->fetchRow("select `group` from ".TABLE_USERS." where id='$user_id'");
	//$allowed = $db->fetchRow("select `showcase` from ".TABLE_USER_GROUPS." where `id`='$group'");
	//if(!$allowed) return 0;
	$enabled = $db->fetchRow("select count(*) from ".TABLE_OPTIONS." where `option` like 'showcase' and `object_id`='$user_id'");
	return $enabled;

}
function showcaseAllowed($smarty, $user_id, $user) {

	global $db;
	$group = $db->fetchRow("select `group` from ".TABLE_USERS." where id='$user_id'");
	$allowed = $db->fetchRow("select `showcase` from ".TABLE_USER_GROUPS." where `id`='$group'");
	$smarty->assign("showcase_allowed", $allowed);
	$user['showcase'] = showcaseEnabled($user_id);
//$user['showcase_pending']!!!!!!!!!!!!
/*
				$array_users[$i]['pending_actions'] = $db->fetchAssocList("select * from ".TABLE_ACTIONS." where `invoice` = ".$result['invoice']." and pending = 1");
				foreach($array_users[$i]['pending_actions'] as $action)
					if($action['type'] == "store") $array_users[$i]['pending_info'].=$lng['users']['pending_store'].'<br />';
*/
}

// on delete user delete option with user_id and showcase
//$res_del=$db->query("delete from ".TABLE_OPTIONS." where `object_id`='$id' and `option`='store'");

add_action('init_template', 'showcase_init_template');
add_action('payment_add_action', 'showcasePaymentAddAction');
add_action('payment_set_info_str', 'showcaseSetInfoStr');
add_action('payment_enable_extra_feature', 'showcaseEnable');
add_action('payment_actions_make_actions_str', 'showcaseMakeActionsStr');
add_action('make_invoice_payment_details', 'showcaseMakeInvoicePaymentDetails');
add_action('add_user_group', 'enableShowcaseToGroup');
add_action('edit_user_group', 'enableShowcaseToGroup');
add_action("user_page", 'getShowcaseAds');
add_action("get_user", 'getShowcaseOption');
add_action("get_users", 'getShowcaseOption1');
add_action("my_listings", 'hasShowcase');
add_action("userstats", 'showcaseAllowed');


?>