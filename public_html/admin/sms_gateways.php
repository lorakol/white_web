<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
//require_once "include/lists.php";

global $config_abs_path;
//require_once($config_abs_path."/classes/sms_verification.php");
require_once($config_abs_path."/classes/sms_gateways.php");
require_once($config_abs_path."/classes/groups.php");

if(isset($_GET['processor']) && $_GET['processor']) $processor = escape($_GET['processor']); else $processor = '';

if(!$processor) {
	$pp_list = sms_gateways::getAllSGList();

	foreach($pp_list as $pp) { 
		require_once($config_abs_path.'/classes/sms_verification/'.$pp.'.php');
	}
	
}
else {
	$class_name = sms_gateways::getSMSGatewayClass($processor);
	require_once($config_abs_path.'/classes/sms_verification/'.$class_name.'.php');
}	

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("smenu","sms_gateways");
$smarty->assign("lng",$lng);


if(!$processor) {

	$pp = new sms_gateways;
	$processors = sms_gateways::getAll();
	$array_processors = array();
	$i=0;
	foreach($processors as $proc) {

		$array_processors[$i] = $proc;
		$array_processors[$i]['settings'] = $pp->getSettings($proc['gateway_code']);
		$i++;
	}
	$smarty->assign("array_processors",$array_processors);

} else {

	$pp = new sms_gateways;
	$processor_settings = $pp->getSettings($processor);
	$smarty->assign("processor_settings",$processor_settings);

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
		$info = $lng['settings']['settings_saved'];
		$smarty->assign("processor_settings",$processor_settings);

	}
}

$smarty->assign("processor",$processor);
$gateway_name = '';
if($processor)
	$gateway_name = $pp->getSMSGateway($processor);
$smarty->assign("processor_name",$gateway_name);
$smarty->assign("error",$error);
$smarty->assign("info",$info);

$groups_list = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups_list);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('sms_gateways.html');

$db->close();
close();

?>