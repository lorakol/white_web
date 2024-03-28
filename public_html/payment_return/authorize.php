<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../include/include.php";
my_session_start();
header("Cache-Control: public"); // added for authorize.net to receive something immediatelly as response
global $config_abs_path;
require_once $config_abs_path."/classes/mail_templates.php";
require_once $config_abs_path."/classes/mails.php";
require_once $config_abs_path."/classes/info.php";
require_once $config_abs_path."/classes/actions.php";
require_once $config_abs_path."/classes/users_packages.php";
require_once $config_abs_path."/classes/packages.php";
require_once $config_abs_path."/include/payments.php";
require_once $config_abs_path."/classes/users.php";


global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty,false);
$smarty->assign("lng",$lng);
$smarty->assign("section","other");

$arr = array("receipt", "process");
if(!isset($_GET['mode']) || !in_array($_GET['mode'], $arr)) exit(0);

global $config_debug;
$payment = new payment("authorize");
$payment->setDebug($config_debug);

$info='';

switch($_GET['mode'])
{
	case 'receipt':
		$payment->paymentDone(0);
		$info=$payment->getInfo();
		$smarty->assign("info",$info);
		$smarty->display('payment_return.html');
	break;
	case 'process':
		$payment->process();
		$payment->paymentDone(0);
		$info=$payment->getInfo();
		$smarty->assign("info",$info);
		$smarty->display('payment_return.html');
	break;
}

?>
