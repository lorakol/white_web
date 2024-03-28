<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
global $config_abs_path;
require_once $config_abs_path."/classes/fieldsets.php";
require_once '../../../modules/price_extra/classes/price_extra.php';

$id = get_numeric_only("id");

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("id",$id);

global $appearance_settings, $config_admin_folder;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/price_extra/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/price_extra/lang/eng.php";
require_once $lang_file;

global $lng_pe;
$smarty->assign("lng_pe",$lng_pe);
$smarty->assign("id",$id);

$array_fieldsets=fieldsets::getFieldsets();
$smarty->assign("array_fieldsets",$array_fieldsets);

$pe = new price_extra();
$pconfig = $pe->getPriceConfig($id);
$error = '';
if(isset($_POST['Submit'])) {

	if($pe->edit($id)) {
		global $config_live_site;
		$path = $config_live_site."/".$config_admin_folder."/modules/price_extra/";
		header("Location: ".$path."index.php");
		exit(0);
	} else { 
		$error = $pe->getError();
		$pconfig = $pe->getTmp();
	}
}

$smarty->assign("pconfig",$pconfig);
$smarty->assign("error",$error);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/price_extra/add.html');

$db->close();
close();
?>
