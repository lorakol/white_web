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
require_once "../../classes/users.php";
require_once "../../classes/mails.php";
require_once "../../classes/mail_templates.php";
require_once "classes/price_extra.php";
require_once "include.php";

global $db, $lng, $settings;

if(isset($_GET['aid']) && is_numeric($_GET['aid'])) $ad_id=$_GET['aid'];
else exit(0);
if(isset($_GET['offer']) && is_numeric($_GET['offer'])) $offer=$_GET['offer']; else $offer="";
if(isset($_GET['currency'])) $currency=$_GET['currency']; else $currency="";

$pe = new price_extra();

my_session_start();
checkAuth();

$ret = array("response" => 0, "error" => array(), "info" => array());
	
$sp_response = array();

global $crt_usr;
$pd_email = users::getEmail($crt_usr);
do_action("price_drop_alert_post", array(&$sp_response, getRemoteIp(), $pd_email));
if($sp_response && is_array($sp_response)) { 
    array_push($ret['error'], $sp_response);
	    
    global $appearance_settings;
    if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

    echo json_encode($ret); 
    return; 
}
	
$done = $pe->addOffer($ad_id, $offer, $currency);
$ret['response'] = $done;
$ret['error'] = $pe->getError();
$ret['info'] = "";

if($done) {
	global $lng_pe, $crt_lang, $config_abs_path;
	if(file_exists($config_abs_path."/modules/price_extra/lang/".$crt_lang.".php"))
		require_once $config_abs_path."/modules/price_extra/lang/".$crt_lang.".php";
	else require_once $config_abs_path."/modules/price_extra/lang/eng.php";

	$ret['info'] = $lng_pe['offer_sent'];
}	
//echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

global $config_abs_path;
require_once $config_abs_path."/libs/JSON.php";

global $appearance_settings;
if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

echo json_encode($ret);

 ?>