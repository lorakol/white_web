<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "../../../classes/categories.php";
require_once '../../../modules/multicurrency/classes/multicurrency.php';

// use for moderators page detection
global $self_noext;
$self_noext = "multicurrency";
//echo $self_noext; exit(0);

$mc = new multicurrency();

if(isset($_GET['default']) && is_numeric($_GET['default'])) {
	$mc->setDefault($_GET['default']);
	exit(0);
}

if(isset($_POST['id'])) {
	$mc->saveRatio();
	exit(0);
}

if(isset($_POST['Recalculate'])) {
	$mc->recalculatePrices();
	header("Location: index.php");
	exit(0);
}

global $db;
global $lng;

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/multicurrency/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/multicurrency/lang/eng.php";
require_once $lang_file;

global $lng_ac;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_mc",$lng_mc);

$mc->autoCheck();

$mc_settings = $mc->getSettings();

$default_currency = '';
foreach($mc_settings as $m) {

	if($m['default']==1) $default_currency = $m['currency'];

}

$smarty->assign("mc_settings",$mc_settings);
$smarty->assign("default_currency",$default_currency);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/multicurrency/index.html');

$db->close();
close();
?>
