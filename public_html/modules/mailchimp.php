<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("mailchimp", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/mailchimp/classes/mailchimp.php";

function subscribeContact(&$sp_response, $ip='', $email='') {

	$mcp = new mailchimp();
	$mcp_settings = $mcp->getSettings();
	if(!$mcp_settings['subscribe_on_contact']) return;
	subscribeToMailchimp($mcp_settings, $email);

}

function subscribeUserContact($id) {

	global $db;
	$email = $db->fetchRow("select `mgm_email` from ".TABLE_ADS_EXTENSION." where id='$id'");
	$mcp = new mailchimp();
	$mcp_settings = $mcp->getSettings();
	if(!$mcp_settings['subscribe_on_register']) return;
	subscribeToMailchimp($mcp_settings, $email);

}

function subscribeUser($user, $id) {

	$mcp = new mailchimp();
	$mcp_settings = $mcp->getSettings();

	if(!$mcp_settings['subscribe_on_register']) return;
	$email = $user['email'];
	subscribeToMailchimp($mcp_settings, $email);

}

function subscribeToMailchimp($mcp_settings, $email) {

	// get server id
	if(!$mcp_settings['api_key']) return 0;
	$server_arr = explode("-", $mcp_settings['api_key']);
	$server = $server_arr[1];
	
	$url = "https://".$server.".api.mailchimp.com/3.0/lists/".$mcp_settings['list_id']."/members";

	$ch = curl_init();
		
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_USERPWD, "key:" . $mcp_settings['api_key']);
	// double opt in option - subscribers are pending until verified via email
	// some settings also need to be done to mailchimp account: https://kb.mailchimp.com/lists/signup-forms/about-double-opt-in
	$subscriber = json_encode( array( "email_address"=> $email, "status" => "pending" ) );
	
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $subscriber );
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	
	if(curl_error($ch)) return 0;
		
	$data = curl_exec($ch);
	//_print_r($data);
	curl_close($ch);

}

add_action('mailto_post', 'subscribeContact');
add_action('add_user', 'subscribeUser');
add_action('add_contact', 'subscribeUserContact');

?>