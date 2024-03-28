<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

ini_set("display_errors", 1);
require_once "include/include.php";
require_once "include/lists.php";

global $config_abs_path;
require_once($config_abs_path."/classes/payment.php");
require_once($config_abs_path."/classes/payment_processors.php");
require_once($config_abs_path."/classes/groups.php");
require_once($config_abs_path."/classes/credits.php");
require_once($config_abs_path."/classes/fields.php");

if(isset($_GET['processor']) && $_GET['processor']) $processor = escape($_GET['processor']); else $processor = '';

if(!$processor) {
	$pp_list = payment_processors::getAllPPList();

	foreach($pp_list as $pp) { 
		require_once($config_abs_path.'/classes/payment/'.$pp.'.php');
	}
}
else {
	$class_name = payment_processors::getPaymentProcessorClass($processor);
	require_once($config_abs_path.'/classes/payment/'.$class_name.'.php');
}	

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("smenu","payment");
$smarty->assign("lng",$lng);

if(!$processor || $processor=="paypal") {
	global $paypal_currencies;
	$smarty->assign("paypal_currencies",$paypal_currencies);
}

if(!$processor || $processor=="mb") {
	global $mb_currencies;
	$smarty->assign("mb_currencies",$mb_currencies);

	global $mb_languages;
	$smarty->assign("mb_languages",$mb_languages);
}

if($processor=="webxpay" || $processor=="aamarpay") {
	$uf = new fields("uf");
	$fields = $uf->getFieldsOfType(0, "password,username,user_email,terms", "", " and `groups`!=-1");
	$smarty->assign("fields",$fields);

	$uf = new fields("uf");
	$nologin_fields = $uf->getFieldsOfType(0, "password,username,user_email,terms", "", " and `groups`=-1");
	$smarty->assign("nologin_fields",$nologin_fields);
}
if($processor=="ebanx") {
	$uf = new fields("uf");
	$fields = $uf->getFieldsOfType(0, "password,username,terms", "", " and `groups`!=-1");
	$smarty->assign("fields",$fields);

	$uf = new fields("uf");
	$nologin_fields = $uf->getFieldsOfType(0, "password,username,terms", "", " and `groups`=-1");
	$smarty->assign("nologin_fields",$nologin_fields);
}
if($processor=="iyzico") {
	$uf = new fields("uf");
	$fields = $uf->getFieldsOfType(0, "password,username,user_email,terms,multiselect,radio,radio_group,checkbox,checkbox_group,url,twitter,youtube,video,audio,google_maps,logo,image", "", " and `groups`!=-1");
	$smarty->assign("fields",$fields);
}

if(!$processor) {

	$pp = new payment_processors;
	$processors = payment_processors::getAll();
	$array_processors = array();
	$i=0;
	$other_paypal_currency = 0;
	foreach($processors as $proc) {

		$array_processors[$i] = $proc;
		$array_processors[$i]['settings'] = $pp->getSettings($proc['processor_code']);
		$i++;
	}
	$smarty->assign("array_processors",$array_processors);
	$smarty->assign("other_paypal_currency",$other_paypal_currency);

} else {

	$pp = new payment_processors;
	$processor_settings = $pp->getSettings($processor);
	$other_paypal_currency = 0;
	if($processor=="paypal") {
		if(!in_array($processor_settings['paypal_currency'], $paypal_currencies)) $other_paypal_currency = 1;
	}
	if($processor=="credits") {

		$cr = new credits;
		$array_credits = $cr->getAll();
		$smarty->assign("array_credits",$array_credits);
		$smarty->assign("no_credits",count($array_credits));

	}

	$smarty->assign("processor_settings",$processor_settings);
	$smarty->assign("other_paypal_currency",$other_paypal_currency);

	global $array_charsets;
	$smarty->assign("array_charsets", $array_charsets);

}

$error='';
$info='';

if($processor && isset($_POST['Submit_'.$processor])){

	if(!$pp->saveSettings($processor)) { 
		$error = $pp->getError();
		$tmp = $pp->getTmp();
	}
	else { 
		$processor_settings = $pp->getSettings($processor);
		$other_paypal_currency = 0;
		if($processor=="paypal") {
			if(!in_array($processor_settings['paypal_currency'], $paypal_currencies)) $other_paypal_currency = 1;
		}
		$info = $lng['settings']['settings_saved'];
		$smarty->assign("processor_settings",$processor_settings);
		$smarty->assign("other_paypal_currency",$other_paypal_currency);

	}
}

if($processor && isset($_POST['Add'])) {
	$pr = new $class_name;
	$pr->addProduct();
	header("Location: payment_settings.php?processor=".$processor);
	exit(0);
}
if($processor=="btcpay") {

	$uf = new fields("uf");
	$fields = $uf->getFieldsOfType(0, "password,username,user_email,terms,multiselect,radio,radio_group,checkbox,checkbox_group,url,twitter,youtube,video,audio,google_maps,logo,image", "", " and `groups`!=-1");
	$smarty->assign("fields",$fields);

	$uf = new fields("uf");
	$nologin_fields = $uf->getFieldsOfType(0, "password,username,user_email,terms,multiselect,radio,radio_group,checkbox,checkbox_group,url,twitter,youtube,video,audio,google_maps,logo,image", "", " and `groups`=-1");
	$smarty->assign("nologin_fields",$nologin_fields);
	
	$bp = new btcpay();

	if(isset($_GET['generate_keys'])) {
	
		$return = $bp->generateKeys();
		$error = $bp->getError();
		if($return) $info = $lng['settings']['keys_generated'].$processor_settings['path'].'/btcpayserver.pri , '.$processor_settings['path'].'/btcpayserver.pub';
	
	}
	if(isset($_GET['generate_token'])) {
	
		$pairing_code = $bp->generateToken();
		$error = $bp->getError();
		if($pairing_code) $smarty->assign("pairing_code", $pairing_code);
		$processor_settings = $bp->getSettings();
		$smarty->assign("processor_settings",$processor_settings);
	
	}
	if(isset($_GET['generate_test_token'])) {
	
		$test=1;
		$pairing_code = $bp->generateToken($test);
		$error = $bp->getError();
		if($pairing_code) $smarty->assign("test_pairing_code", $pairing_code);
		$processor_settings = $bp->getSettings();
		$smarty->assign("processor_settings",$processor_settings);
	
	}

	$bp->checkSettings();
	$error = $bp->getError();
	
}

$smarty->assign("processor",$processor);
$processor_name = '';
if($processor)
	$processor_name = $pp->getPaymentProcessor($processor);
$smarty->assign("processor_name",$processor_name['processor_name']);

$smarty->assign("error",$error);
$smarty->assign("info",$info);

$groups_list = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups_list);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('payment_settings.html');

$db->close();
close();

?>