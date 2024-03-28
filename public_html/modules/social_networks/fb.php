<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

function postOnFacebook($id, $ad_url, $title, $cat_path, $description, $picture, $location) {

	global $config_abs_path;
	global $sn_settings;
	require_once $config_abs_path."/libs/Facebook/autoload.php";

	$fb_config = array();
	$fb_config['app_id'] = $sn_settings['fb_appid'];
	$fb_config['app_secret'] = $sn_settings['fb_secret'];
	$fb_config['default_graph_version'] = 'v2.10';
 
	$fb = new Facebook\Facebook($fb_config);
 
	// the link cannot be localhost !!!!
	$params = array(
  "message" => $cat_path, // category path
  "link" => $ad_url, // details link
  "picture" => $picture,
  "name" => $title, // title
  "caption" => $location, // location
  "description" => $description // description
);

	$access_token = $sn_settings['fb_page_access_token'];
	$post_to = $sn_settings['fb_pageid'];

	// post to Facebook
	// see: https://developers.facebook.com/docs/reference/php/facebook-api/
	try {

		$ret = $fb->post('/'.$post_to.'/feed', $params, $access_token);
//		_print_r($ret);
	//	echo 'Successfully posted to Facebook';

	} catch(Exception $e) {

		echo $e->getMessage();
	}

}

?>