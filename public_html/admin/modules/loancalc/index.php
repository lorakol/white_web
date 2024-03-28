<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/loancalc/classes/loancalc.php';

global $db;
global $lng;
global $lng_loancalc;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_loancalc",$lng_loancalc);

$calc = new loancalc();
$lc_settings = $calc->getSettings();

$categories = common::getCachedObject("base_short_categories");
$smarty->assign("categories",$categories);

$info = '';
$error = '';
$calc->autoCheckLang();
if(isset($_POST['Submit'])) {
	$calc->saveSettings();
	$lc_settings = $calc->getSettings(1);
}

$smarty->assign("lc_settings",$lc_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/loancalc/index.html');

$db->close();
close();
?>
