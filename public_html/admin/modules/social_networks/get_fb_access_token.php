<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

if(isset($_GET['code']) && $_GET['code']) { echo($_GET['code']); exit(0); }


require_once "../../include/include.php";
require_once '../../../modules/social_networks/classes/social_networks.php';

// check if curl is installed
if(!_isCurl()) exit(0);

$sn = new social_networks;
$sn_settings = $sn->getSettings();

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/social_networks/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/social_networks/lang/eng.php";
require_once $lang_file;

global $lng_sn;

$ret = array("response" =>0, "error" => "", "info" => "", "expires" => 0);

$fb_access_token = $_POST['access_token'];
$fb_appid = $_POST['fb_appid'];
$fb_secret = $_POST['fb_secret'];
$fb_pageid = $_POST['fb_pageid'];

// upgrade the received token to a long-lived token
require_once $config_abs_path."/libs/Facebook/autoload.php";

$fb_config = array();
$fb_config['app_id'] = $fb_appid;
$fb_config['app_secret'] = $fb_secret;
$fb_config['default_graph_version'] = 'v2.10';
 
$fb = new Facebook\Facebook($fb_config);
$client = $fb->getOAuth2Client();
$expires_at = '';
try {
	// Returns a long-lived access token
	$longLivedAccessToken = $client->getLongLivedAccessToken($fb_access_token);
	$expires_at = $longLivedAccessToken->getExpiresAt();
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	// There was an error communicating with Graph
	$ret['error']=$e->getMessage();
	echo json_encode($ret);
	exit;
}

// get the FB page access token
if(isset($longLivedAccessToken)) {
	$url="https://graph.facebook.com/".$fb_pageid."?fields=access_token&access_token=".$longLivedAccessToken;
	
	$ch = curl_init();
			
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$data = trim(curl_exec($ch));
	curl_close($ch);

	$data_json = json_decode($data, true);
	$page_access_token = $data_json['access_token'];

	if($page_access_token) {

		// save all these in the database: FB app id, app secret, page id and page access token
		$sn = new social_networks;
		$sn->setAccessToken($longLivedAccessToken, $fb_appid, $fb_secret, $fb_pageid, $page_access_token, $expires_at);
		$ret['info'] = $lng_sn['info']['page_access_token_configured'];
		$ret['response'] = 1;

	}
	else {
		$ret['error']="There was an error while retrieving the access token. The response was: <br/><pre>".$data."</pre>"; 
	
	}

	echo json_encode($ret);
	exit(0);
} else {
		$ret['error']="A long lived access token could not be aquired!";
		echo json_encode($ret);
		exit(0);
}

echo json_encode($ret);

?>