<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/templates.php";
require_once "../classes/validator.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","templates");
$smarty->assign("lng",$lng);

$mobile=0;
if(isset($_GET['mobile']) && $_GET['mobile']==1 ) { 
	$mobile=1;
	$smarty->assign("smenu", "mobile");
}

if(isset($_GET['template']) && validator::valid_alphanum($_GET['template']) ) $crt_template=escape($_GET['template']);
else {
	if(!$mobile) {
		global $appearance_settings;
		$crt_template=$appearance_settings["template"];
	} else {
		global $mobile_settings;
		if($mobile_settings['enable_mobile_templates']) $crt_template = $mobile_settings['mobile_template'];
		else {
			$tpl=new templates($mobile);
			$array_templates=$tpl->getTemplates();
			$crt_template = $array_templates[0];
		}
	}
}

if(isset($_GET['file'])) { 

	// allow only html extensions
	$crt_file=str_replace( "/", "", escape($_GET['file']));
	$ext = getExtension($crt_file);
	if($ext!="css") $crt_file="";

}

$error='';
$tpl=new templates($mobile);
$tpl->setTemplate($crt_template);
$array_files=$tpl->getCSSFiles("css");
$smarty->assign("array_files",$array_files);

$array_templates=$tpl->getTemplates();
$smarty->assign("array_templates",$array_templates);

if((!isset($crt_file) || !$crt_file) && count($array_files)>0) $crt_file = "style.css";

if($tpl->readCssFile($crt_file)) {

	$content=$tpl->getContent();
	$warning=$tpl->isWriteable();
	$smarty->assign("content",$content);
	$smarty->assign("warning",$warning);

} else $error=$tpl->getError();

if(isset($_POST['Save'])) {

	global $limited_permissions;
	if($config_demo==1 || $limited_permissions) {
		$error= "Function disabled in the demo!";
		}
	else {

	//$content=(_get_magic_quotes_gpc ()) ? stripslashes ($_POST['content']) : $_POST['content'];

	// fix for backslashes in css file
	$content=$_POST['content'];
/*
$content = str_replace('\\\\\\', "::BACKSLASH::", $content);
	$content = str_replace("\'", "'", $content);
	$content = str_replace('\"', '"', $content);
	$content = str_replace("::BACKSLASH::", '\\\\', $content);
*/	
	// end fix for backslashes in css file

	if(!$crt_template) $error=$lng['templates']['errors']['invalid_template_file'];

	else {

		$tpl->setTemplate($crt_template);
		$tpl->setFolder("css");
		$tpl->setFile($crt_file);
		$tpl->setContent($content);
		if(!$tpl->saveTemplate()) $error=$tpl->getError();
		$smarty->assign("content", stripslashes($content));

	}
	} //end if limited
}

$smarty->assign("crt_file",$crt_file);
$smarty->assign("crt_template",$crt_template);
$smarty->assign("error",$error);
$smarty->assign("mobile",$mobile);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('css_editor.html');

$db->close();
close();
?>
