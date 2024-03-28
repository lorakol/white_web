<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/images.php";
require_once "classes/import_export.php";
require_once "classes/info.php";
require_once "classes/pictures.php";
require_once "classes/packages.php";
require_once "classes/validator.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

global $crt_usr, $usr_sett;
if(!$crt_usr) { header("Location: ".$config_live_site."/login.php?loc=bulk_uploads.php"); exit(0); }
$smarty->assign("username",$usr_sett['username']);

if(!$usr_sett['bulk_uploads']) exit(0);

$group = $usr_sett['group'];

$categories=common::getCachedObject("base_short_categories", array("group" => $group));
$smarty->assign("bulk_categories",$categories);

$ie = new import_export;
$ie_settings = $ie->getSettings();
$smarty->assign("ie_settings",$ie_settings);
$type = $ie_settings['bulk_type'];

//$help = info::getVal('bulk_uploads_info');
//$smarty->assign("help",$help);

$error='';
$info='';
$import_id=0;
if(isset($_POST['Submit'])) {

	$import_id = $ie->bulkUploads();
	$error = $ie->getError();
//	if(!$error) $info = $ie->getStats();

}

$smarty->assign("error",$error);
$smarty->assign("info",$info);
$smarty->assign("type",$type);
$smarty->assign("import_id",$import_id);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('bulk_uploads.html');

$db->close();
close();
?>
