<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// builds url on Openid login
require_once "../../include/include.php";

global $config_abs_path;
require_once $config_abs_path."/modules/connect/external/openid.php";

$identity = '';
if(isset($_POST['identity']) && $_POST['identity'] ) $identity = escape($_POST['identity']); else exit(0);

$openid = new LightOpenID;
$openid->identity = $identity;

// build realm string
global $config_live_site;
$pos = strpos($config_live_site, "/", 8);
$openid->realm = substr($config_live_site,0,$pos);

// check if already registered, if not request information
$registered = $db->fetchRow("select count(*) from ".TABLE_USERS." where `identity`='$identity' and `auth_provider`='openid'");
if(!$registered) {
	$openid->required = array('namePerson/first', 'namePerson/last', 'contact/email');
	$openid->optional = array('namePerson/friendly');
}
// build return url
global $config_live_site;
$openid->returnUrl = $config_live_site."/modules/connect/easyauth.php?auth=openid";

// return authentication url
$url = "";
try {
	$url = $openid->authUrl();
} catch (Exception $e) {
	echo "|".$e->getMessage();
	exit(0);
}
echo $url;

?>
