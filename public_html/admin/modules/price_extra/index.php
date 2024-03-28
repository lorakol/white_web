<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/price_extra/classes/price_extra.php';

$delete = get_numeric("delete");

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/price_extra/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/price_extra/lang/eng.php";
require_once $lang_file;

global $lng_pe;
$smarty->assign("lng_pe",$lng_pe);

$pe = new price_extra();

$unique_configuration = $pe->allFieldsetsConfiguration();
$smarty->assign("unique_configuration",$unique_configuration);

$array_pe = $pe->getAll();
$smarty->assign("array_pe",$array_pe);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/price_extra/index.html');

$db->close();
close();
?>
