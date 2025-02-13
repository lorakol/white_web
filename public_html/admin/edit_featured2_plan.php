<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/validator.php";
require_once "../classes/featured2_plans.php";
require_once "../classes/config/featured2_plans_config.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id']; else { header ('Location: extra_visibility_options.php'); exit(0); }
$smarty->assign("id",$id);

$tmp=array();
$fp_config=new featured2_plans_config();
$fp = new featured2_plans();
$tmp=$fp->getFeatured2Plan($id);

$error='';
if(isset($_POST['Submit'])){

	if(!$fp_config->edit($id)) { 
		$error=$fp_config->getError();
		$tmp=$fp_config->getTmp();
	} else { header ('Location: extra_visibility_options.php'); exit(0); }

}

$smarty->assign("tmp",$tmp);
$smarty->assign("error",$error);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('edit_featured2_plan.html');

$db->close();
close();
?>
