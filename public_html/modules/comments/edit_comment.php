<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
global $config_abs_path;
require_once $config_abs_path."/classes/validator.php";
require_once $config_abs_path."/classes/badwords.php";
require_once $config_abs_path."/classes/categories.php";
require_once $config_abs_path."/classes/pictures.php";

require_once "classes/comments.php";

global $db, $lng, $settings;

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id'];
else exit(0);

if(isset($_GET['lid']) && is_numeric($_GET['lid'])) $lid=$_GET['lid'];
else exit(0);

$comm = new comments();
$comments_settings = $comm->getSettings();

if(!$comments_settings['allow_owner_edit']) exit(0);

my_session_start();
	
$ret = array("response" => 0, "error" => array(), "info" => array());
	
$sp_response = array();
$comments_email = '';
if(isset($_POST['comments_email_edit'])) $comments_email = $_POST['comments_email_edit'];
do_action("comments_post", array(&$sp_response, getRemoteIp(), $comments_email));
if($sp_response && is_array($sp_response)) { 
    array_push($ret['error'], $sp_response); 
    global $appearance_settings;
    if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

    echo json_encode($ret); 
    return; 
}
	
$done = $comm->user_edit($id);
$ret['response'] = $done;
$ret['error'] = $comm->getError();
$ret['info'] = $comm->getInfo();
$ret['comment_id'] = $id;

// get comment content
$ret['comment'] = '';

$smarty = new Smarty;
$smarty = smartyShowDBVal($smarty);

// seo settings, allows to you modify search engine friendly links
global $seo;
$seo = new seo();
$seo->init($smarty);
$smarty->registerObject('seo', $seo, null, false);

global $config_live_site, $crt_usr, $lng;
$smarty->assign("live_site",$config_live_site);
$smarty->assign("comments_settings",$comments_settings);
$smarty->assign("crt_usr",$crt_usr);
$smarty->assign("lng",$lng);

$listing_id = get_numeric("id", 0);
$listing = new listings;
$listing_array = $listing->getListing($lid);
$smarty->assign("listing",$listing_array);


$v = $comm->getComment($id);
$smarty->assign("v", $v);
$ret['comment'] = $smarty->fetch("modules/comments/comment.html");


//echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

global $config_abs_path;
require_once $config_abs_path."/libs/JSON.php";

global $appearance_settings;
if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

echo json_encode($ret);

if($db->error!='') { 
	$db_error = $db->getError(); 
	echo $db_error;
}

?>
