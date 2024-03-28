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
require_once $config_abs_path."/classes/badwords.php";
require_once $config_abs_path."/classes/validator.php";

require_once "include.php";
require_once "classes/ratings.php";

global $db, $lng, $lng_ratings, $settings;
$post = get_numeric("post", 0);
$aid = get_numeric("aid", 0);
$user_id = get_numeric("user_id", 0);

if(!$post) {

	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("lng_ratings",$lng_ratings);

	$rc = new ratings();
	$rs = $rc->getSettings();
	$smarty->assign("ratings_settings", $rs);

	$smarty->assign("aid",$aid);
	$smarty->assign("user_id",$user_id);

}

if($post) {
	my_session_start();
	
	$ret = array("response" => 0, "error" => array(), "info" => array());
	
	$sp_response = array();
	$reviews_email = '';
	if(isset($_POST['ratings_email'])) $reviews_email = $_POST['ratings_email'];
	do_action("reviews_post", array(&$sp_response, getRemoteIp(), $reviews_email));
	if($sp_response && is_array($sp_response)) { 
	    array_push($ret['error'], $sp_response); 
	    
	    global $appearance_settings;
	    if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	    echo json_encode($ret); 
	    return; 
	}
	
	$rc = new ratings;
	$done = $rc->addReview();
	$ret['response'] = $done;
	$ret['error'] = $rc->getError();
 	$ret['info'] = $rc->getInfo();

	//echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret);
}



if($db->error!='') { 
	$db_error = $db->getError(); 
	if(!$post)
		$smarty->assign('db_error',$db_error); 
	else echo $db_error;	
}

if(!$post) {
$smarty->display('modules/ratings/add_listing_review.html');
$db->close();
close();
}
?>
