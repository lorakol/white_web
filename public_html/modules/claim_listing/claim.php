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
require_once "../../classes/mails.php";
require_once "../../classes/mail_templates.php";
require_once "classes/claim_listing.php";
require_once "include.php";

global $db, $lng, $settings;

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id'];
else exit(0);


$cl = new claim_listing();

my_session_start();
	
$ret = array("response" => 0, "error" => array(), "info" => array());
	
$sp_response = array();

do_action("claim_listing_post", array(&$sp_response, getRemoteIp(), escape($_POST['claim_email'])));
if($sp_response && is_array($sp_response)) { 
    array_push($ret['error'], $sp_response); 
	    
    global $appearance_settings;
    if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

    echo json_encode($ret); 
    return; 
}
	
$done = $cl->claim($id);
$ret['response'] = $done;
$ret['error'] = $cl->getError();
$ret['info'] = $cl->getInfo();
//echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

global $config_abs_path;
require_once $config_abs_path."/libs/JSON.php";

global $appearance_settings;
if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

echo json_encode($ret);

?>
