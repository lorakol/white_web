<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/


require_once "../../include/include.php";
require_once "classes/price_drop_alert.php";
require_once "include.php";

global $db, $lng, $settings;

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id'];
else exit(0);

if(isset($_GET['key'])) $key=escape($_GET['key']); else exit(0);

$pd = new price_drop_alert();

$error='';
$info='';
$smarty = new Smarty;
$smarty = common($smarty);

if(!$pd->isKeyCorrect($id, $key)) $error = $lng_price_drop_alert['incorrect_url'];
else { 
	$pd->deleteAlert($id, $key);
	$info = $lng_price_drop_alert['info']['alert_deleted'];
}

$ad_title = cleanStr(listings::getTitle($id));
$smarty->assign("lng_price_drop_alert", $lng_price_drop_alert);
$smarty->assign("ad_title", $ad_title);
$smarty->assign("id",$id);
$smarty->assign("info",$info);
$smarty->assign("error",$error);
$smarty->assign("lng",$lng);
$smarty->assign("section","other");

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/price_drop_alert/remove_alert.html');

$db->close();
close();

?>
