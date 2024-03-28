<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/custom_pages.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);

if(isset($_GET['code'])) $code = $_GET['code']; else $code='';
if(isset($_GET['cp_slug']) && $_GET['cp_slug']) {
	$id = slugs::getCustomPageId(escape($_GET['cp_slug']));
}
else 
	$id = get_numeric("id"); 

if(!$id && !$code) { 

	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");

	if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
	$smarty->display('notfound.html');
	
	$db->close();
	exit(0);

}

$smarty->assign("id",$id);
$smarty->assign("section","custom");

$cp = new custom_pages();
if($code) {
	$content = $cp->getContentByCode($code);
	$id = $cp->getIdByCode($code);
}
else
	$content = $cp->getContent($id);

$title = $cp->getTitle($id);

$smarty->assign('content', $content);
$smarty->assign('title', $title);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('content.html');

$db->close();
close();
?>
