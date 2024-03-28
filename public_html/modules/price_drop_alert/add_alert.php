<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/


require_once "../../include/include.php";
require_once "../../classes/validator.php";
require_once "classes/price_drop_alert.php";
require_once "include.php";

global $db, $lng, $settings;

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id'];
else exit(0);

if(isset($_GET['post']) && $_GET['post']==1) $post=1; 
else $post = 0;

$pd = new price_drop_alert();

if(!$post) {
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("lng_price_drop_alert",$lng_price_drop_alert);
	$ad_title = cleanStr(listings::getTitle($id));
	$smarty->assign("ad_title", $ad_title);
	$smarty->assign("id",$id);

}

if($post) {
	my_session_start();
	
	$ret = array("response" => 0, "error" => array(), "info" => array());
	
	$sp_response = array();
	$comments_email = '';
	if(isset($_POST['pd_email'])) $pd_email = $_POST['pd_email'];
	do_action("price_drop_alert_post", array(&$sp_response, getRemoteIp(), $pd_email));
	if($sp_response && is_array($sp_response)) { 
	    array_push($ret['error'], $sp_response); 
	    
	    global $appearance_settings;
	    if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	    echo json_encode($ret); 
	    return; 
	}
	
	$done = $pd->add($id);
	$ret['response'] = $done;
	$ret['error'] = $pd->getError();
	$ret['info'] = $pd->getInfo();
	//echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret);
}


if(!$post) {
if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/price_drop_alert/add_alert.html');

$db->close();
close();
}

?>
