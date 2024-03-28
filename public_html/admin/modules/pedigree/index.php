<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 7.0
	* (c) 2011 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../../include/include.php";
require_once '../../../modules/pedigree/classes/pedigree.php';

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $crt_lang;
global $config_abs_path, $config_admin_folder;
if(file_exists($config_abs_path.'/'.$config_admin_folder.'/modules/pedigree/lang/'.$crt_lang.'.php'))
	require_once $config_abs_path.'/'.$config_admin_folder.'/modules/pedigree/lang/'.$crt_lang.'.php';
else 
	require_once $config_abs_path.'/'.$config_admin_folder.'/modules/pedigree/lang/eng.php';

global $lng_pedigree;
$smarty->assign("lng_pedigree",$lng_pedigree);

$pedigree = new pedigree();
$pg_settings = $pedigree->getSettings();

$info = '';
$error = '';
if(isset($_POST['Submit'])) {
	$pedigree->saveSettings();
	$info=$lng_pedigree['settings_saved'];
	$smarty->assign("info",$info);
	$pg_settings = $pedigree->getSettings();
}

$smarty->assign("pg_settings",$pg_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/pedigree/index.html');

$db->close();
close();
?>
