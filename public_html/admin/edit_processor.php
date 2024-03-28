<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";

global $config_abs_path;
require_once($config_abs_path."/classes/payment.php");
require_once($config_abs_path."/classes/payment_processors.php");

if(isset($_GET['processor']) && $_GET['processor']) $processor_code = escape($_GET['processor']); else $processor_code = '';

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("smenu","payment");
$smarty->assign("lng",$lng);
$smarty->assign("processor_code",$processor_code);

$pp = new payment_processors;
$processor = $pp-> getPaymentProcessor($processor_code);
$smarty->assign("processor",$processor);

if(isset($_POST['Submit'])){
 	$pp->editProcessor($processor_code);
	header("Location: payment_settings.php");
	exit(0);
}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('edit_processor.html');

$db->close();
close();

?>