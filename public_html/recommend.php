<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";

global $db;
global $lng;

$post = get_numeric("post", 0);
$id = get_numeric_only("id");
if(isset($_GET['extension']) && $_GET['extension']) $extension = $_GET['extension'];

if(!$post) {
$smarty = new Smarty;
$smarty->caching = 0;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("extension",$extension);
}
else my_session_start();


if($post) {

	require_once "classes/validator.php";
	require_once "classes/blocked_emails.php";

	$ret = array("response" => 0, "error" => array(), "info" => null);

	if(empty($_POST['your_name']))
		array_push($ret['error'], array("field"=> 'your_name', "error" => $lng['recommend']['error']['your_name_missing']));

	if(empty($_POST['your_email']))
		array_push($ret['error'], array("field"=> 'your_email', "error" => $lng['recommend']['error']['your_email_missing']));

	else if(!validator::valid_email($_POST['your_email']))
		array_push($ret['error'], array("field"=> 'your_email', "error" => $lng['recommend']['error']['invalid_email']));

	else if(blocked_emails::isBlocked(escape($_POST['your_email'])))
		array_push($ret['error'], array("field"=> 'your_email', "error" => $lng['users']['errors']['email_not_permitted']));



	if(empty($_POST['friend_name']))
		array_push($ret['error'], array("field"=> 'friend_name', "error" => $lng['recommend']['error']['friend_name_missing']));

	if(empty($_POST['friend_email']))
		array_push($ret['error'], array("field"=> 'friend_email', "error" => $lng['recommend']['error']['friend_email_missing']));

	else if(!validator::valid_email($_POST['friend_email']))
		array_push($ret['error'], array("field"=> 'friend_email', "error" => $lng['recommend']['error']['invalid_email']));

	else if(blocked_emails::isBlocked(escape($_POST['friend_email'])))
		array_push($ret['error'], array("field"=> 'friend_email', "error" => $lng['users']['errors']['email_not_permitted']));


	// check captcha if enabled
	if($settings['contact_captcha'] ) { 
		
		global $config_abs_path;
		require_once $config_abs_path."/include/captcha.php";
				if($settings['enable_recaptcha']) { 
			$field = 'recaptcha_div'; 
			if(isset($_GET['extension']) && $_GET['extension']) $field .= $_GET['extension']; 
		}
		else $field = 'number';
		$error = checkCaptcha();
		if($error) array_push($ret['error'], array("field"=> $field, "error" => $error));

	}

	if(empty($ret['error'])) {

		$ret['response'] = 1;

		require_once "classes/mails.php";
		require_once "classes/mail_templates.php";
		require_once "classes/pictures.php";

		if($appearance_settings['charset']=="UTF-8") {
			$friend_name = cleanStr($_POST['friend_name']);
			$your_email = cleanStr($_POST['your_email']);
			$your_name = cleanStr($_POST['your_name']);
			$clean_message = cleanStr($_POST['message']);
		}
		else {
			$friend_name = cleanStr(utf8_decode($_POST['friend_name']));
			$your_email = cleanStr(utf8_decode($_POST['your_email']));
			$your_name = cleanStr(utf8_decode($_POST['your_name']));
			$clean_message = cleanStr(utf8_decode($_POST['message']));
		}

		$details_link = listings::makeDetailsLink($id);
		// get listing details
		$listings = new listings;
		$details = $listings->getBriefListing($id);
		$ad_title = $details['title'];

		global $mail_settings;
		$html_mails=$mail_settings['html_mails'];

		if($html_mails) $user_message = str_replace("\n", "<br/>",$clean_message);
		else $user_message = $clean_message;

		// send email
		$mail2send=new mails();
		$mail2send->init(escape($_POST['friend_email']), $friend_name, $your_email, $your_name);

		$array_subject = array("title"=>$ad_title, "sender_name"=>$your_name, "name"=> $friend_name);

		$array_message = array("title"=>$ad_title, "ad_link"=>$details_link, "name"=> $friend_name, "sender_name"=>$your_name, "message"=>$user_message, "ip"=>getRemoteIp());

		$sent = $mail2send->composeAndSend("recommend_ad", $array_message, $array_subject);

		if($sent) $ret['info']=$lng['contact']['message_sent'];
		else $ret['info']=$lng['contact']['sending_message_failed'];

	}//end if(empty($ret['error']))

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);
} // if post
else { 

	$smarty->assign("id",$id);

} // end if post

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
if(!$post) {
$smarty->display('recommend.html');

$db->close();
close();
}
?>