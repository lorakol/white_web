<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/comments/classes/comments.php';

$id = get_numeric_only("id");

global $db;
global $lng;
global $lng_comments;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_comments",$lng_comments);
$smarty->assign("smenu",'index');
$smarty->assign("id",$id);

$comments = new comments();

if(isset($_POST['Submit'])) {

	$comments->edit($id);	
	global $config_live_site, $config_admin_folder;
	$path = $config_live_site."/".$config_admin_folder."/modules/comments/";
	header("Location: ".$path."index.php");
	exit(0);

}

$comments_settings = $comments->getSettings();
$comment = $comments->getComment($id);
$smarty->assign("comment",$comment);
$smarty->assign("comments_settings",$comments_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/comments/edit_comment.html');

$db->close();
close();
?>
