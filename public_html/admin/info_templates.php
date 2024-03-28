<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/info.php";

global $db;

$info_templates=new info();
if(isset($_GET['template'])) {
	$template_code = escape($_GET['template']);
	$crt_template=$info_templates->getRegLang($template_code);
}
else { 
	$template_code=$info_templates->getFirst();
	$crt_template = $info_templates->getRegLang($template_code);
}

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","templates");
$smarty->assign("lng",$lng);

$array_templates=$info_templates->getAll();
$smarty->assign("array_templates",$array_templates);

$error='';
if(isset($_POST['Save'])) {

	global $limited_permissions;
	if($config_demo==1 || $limited_permissions) {
		$error= "Function disabled in the demo!";
		}
	else {

	$info_templates->edit($template_code);
	$crt_template=$info_templates->getRegLang($template_code);

	}
	
}

$smarty->assign("error",$error);
$smarty->assign("crt_template",$crt_template);
$smarty->assign("template_code",$template_code);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('info_templates.html');

$db->close();
close();
?>
