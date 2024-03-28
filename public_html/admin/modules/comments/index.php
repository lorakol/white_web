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
require_once '../../../modules/comments/classes/comments.php';

$page = get_numeric("page", 1);
$delete = get_numeric("delete");

if($_POST) {

	$comm = new comments();
	// actions for multiple items
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(cm)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 2);
		if(!is_numeric($id)) continue;
		if (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) $comm->Delete($id);
		if (isset($_POST['activate_selected']) || isset($_POST['activate_selected_x'])) $comm->Enable($id);
		if (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x'])) $comm->Disable($id);
	}

	if ( (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) 
	|| ( isset($_POST['activate_selected']) || isset($_POST['activate_selected_x']) ) 
	|| (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x']))) // IE image submit fix

	{
		$location="index.php?page=".$page;
		header("Location: ".$location);
		exit(0);
	}
	// end actions for multiple items
}

global $db;
global $lng;
global $lng_comments;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_comments",$lng_comments);
$smarty->assign("page",$page);
$smarty->assign("smenu",'index');

$no_per_page = 20;
$comments = new comments();
$comments_settings = $comments->getSettings();
$array_comments = $comments->getAll($page, $no_per_page);
$smarty->assign("array_comments",$array_comments);

$no = $comments->getNo();
$smarty->assign("no",$no);
$smarty->assign("comments_settings",$comments_settings);

$html_tags = array("a","b","blockquote","br","caption","center","cite","code","div","em","font","frame","h1","h2","h3","h4","h5","h6","hr","i","img","label","li","object","ol","p","pre","script","span","strong","style","table","tbody","td","th","tr","u","ul");
$smarty->assign("html_tags",$html_tags);

$user_fields = $db->getTableFields(TABLE_USERS);
$smarty->assign("user_fields",$user_fields);

$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no);
$paginator->setAdmin(1);
$paginator->addToPath("/modules/comments");
$paginator->setNoSeo(1);
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/comments/index.html');

$db->close();
close();
?>
