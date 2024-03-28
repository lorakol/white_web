<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","tools");
$smarty->assign("lng",$lng);

$info='';
global $appearance_settings;
if($appearance_settings['maintenance_mode'])
	$info = $lng['maintenance']['info']['site_in_maintenance_mode'];


if(isset($_POST['Clear_cache'])) {

	$c = new cache();
	$c->clearAllCacheFiles();
	$info .= $lng['maintenance']['info']['cache_cleared'];

}

if(isset($_POST['Maintenance'])) {

	global $config_abs_path;
	require_once $config_abs_path."/classes/config/settings_config.php";
	$sc = new settings_config();
	$sc->setMaintenance(1);
	header("Location: maintenance.php");
	exit(0);

}

if(isset($_POST['RemMaintenance'])) {

	global $config_abs_path;
	require_once $config_abs_path."/classes/config/settings_config.php";
	$sc = new settings_config();
	$sc->setMaintenance(0);
	header("Location: maintenance.php");
	exit(0);

}

if(isset($_POST['MaintenanceIPs'])) {
	global $config_abs_path;
	require_once $config_abs_path."/classes/config/settings_config.php";
	if(isset($_POST['ips'])) {
	
		$ips = escape($_POST['ips']);
		$sc = new settings_config();
		$sc->addMaintenanceIPs($ips);
	}	
	header("Location: maintenance.php");
	exit(0);

}


$smarty->assign("info",$info);

$smarty->display('maintenance.html');
close();
?>
