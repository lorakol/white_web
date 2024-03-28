<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
global $config_abs_path;
require_once $config_abs_path."/classes/validator.php";
require_once $config_abs_path."/classes/badwords.php";

require_once "classes/comments.php";

global $db, $lng, $settings;
$post = get_numeric("post", 0);

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id'];
else exit(0);

if(!$post) {
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("lng_comments",$lng_comments);
	$ad_title = cleanStr(listings::getTitle($id));
	$smarty->assign("ad_title", $ad_title);
	$smarty->assign("id",$id);

	$comm = new comments();
	$comments_settings = $comm->getSettings();
	$smarty->assign("comments_settings", $comments_settings);

}

if($post) {
	my_session_start();
	
	$ret = array("response" => 0, "error" => array(), "info" => array());
	
	$sp_response = array();
	$comments_email = '';
	if(isset($_POST['comments_email'])) $comments_email = $_POST['comments_email'];
	do_action("comments_post", array(&$sp_response, getRemoteIp(), $comments_email));
	if($sp_response && is_array($sp_response)) { 
	    array_push($ret['error'], $sp_response); 
	    global $appearance_settings;
	    if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	    echo json_encode($ret); 
	    return; 
	}
	
	$com = new comments;
	$done = $com->add($id);
	$ret['response'] = $done;
	$ret['error'] = $com->getError();
	$ret['info'] = $com->getInfo();
	//echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret);
}



if($db->error!='') { 
	$db_error = $db->getError(); 
	if(!$post) $smarty->assign('db_error',$db_error); 
	else echo $db_error;
}
if(!$post) {
$smarty->display('modules/comments/add_comment.html');
$db->close();
close();
}

?>
