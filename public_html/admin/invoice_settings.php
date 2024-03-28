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
require_once $config_abs_path."/classes/settings.php";
require_once $config_abs_path."/classes/fields.php";
require_once $config_abs_path."/classes/config/settings_config.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("smenu","payment");
$smarty->assign("lng",$lng);

if(isset($_GET['delete']) && $_GET['delete']=="logo") { 
	$sc=new settings_config;
	$sc->deleteInvoiceLogo();
	header("Location: invoice_settings.php");
	exit(0);

}

$errors_str='';
if(isset($_POST['Submit'])){
	require_once $config_abs_path."/classes/images.php";
	$sc=new settings_config;
	if(!$sc->editInvoiceSettings()) { 
		$errors_str.=$sc->getError();
		$invoice_settings=$sc->getTmp();
	}
} 

if(!isset($_POST['Submit']) || $errors_str=='') { 
	$settings=new settings; 
	$invoice_settings=settings::getInvoiceSettings();
}

$smarty->assign("error",$errors_str);
$smarty->assign("invoice_settings",$invoice_settings);

$uf = new fields("uf");
$fields = $uf->getFieldsOfType("textbox,menu,textarea,htmlarea,depending,url,email,phone,date,user_email");
$smarty->assign("fields",$fields);

//deleteInvoiceLogo()

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('invoice_settings.html');

$db->close();
close();

?>