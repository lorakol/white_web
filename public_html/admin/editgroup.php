<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/config/groups_config.php";
require_once "../classes/sms_gateways.php";

global $db;
global $lng;
$errors_str='';
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","users");

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id']; else { header("Location: user_groups.php"); exit(0); }

$smarty->assign("lng",$lng);
$smarty->assign("id",$id);

$groups=array();
$gr=new groups_config();
$groups=$gr->getGroupLang($id);

global $config_vars;
$smarty->assign("credits_enabled",$config_vars['credits_enabled']);

$error='';
$info='';

if(isset($_POST['Submit'])) {
	if(!$gr->edit($id)) { 
		$groups=$gr->getTmp();
		$error=$gr->getError();
	} else { 
		header ('Location: user_groups.php');
		exit(0);
	}
}

$smarty->assign("error",$error);
$smarty->assign("info",$info);
$smarty->assign("groups",$groups);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('addgroup.html');

$db->close();
close();
?>
