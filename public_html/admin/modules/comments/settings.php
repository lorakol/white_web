<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "../../../classes/paginator.php";
require_once "../../../classes/fields.php";
require_once '../../../modules/comments/classes/comments.php';

global $db;
global $lng;
global $lng_comments;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_comments",$lng_comments);
$smarty->assign("smenu",'settings');

$no_per_page = 20;
$comments = new comments();
$comments->autoCheckLang();
$comments_settings = $comments->getSettings();

if(isset($_POST['Submit'])) {

	$comments->saveSettings();
	$comments_settings = $comments->getSettings(1);
}

$smarty->assign("comments_settings",$comments_settings);

$short_categories=common::getCachedObject("base_short_categories");
$smarty->assign("categories",$short_categories);

$html_tags = array("a","b","blockquote","br","caption","center","cite","code","div","em","font","frame","h1","h2","h3","h4","h5","h6","hr","i","img","label","li","object","ol","p","pre","script","span","strong","style","table","tbody","td","th","tr","u","ul");
$smarty->assign("html_tags",$html_tags);

$uf = new fields("uf");
$user_fields = $uf->getFieldsOfType("image,logo");
$smarty->assign("user_fields",$user_fields);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/comments/settings.html');

$db->close();
close();
?>
