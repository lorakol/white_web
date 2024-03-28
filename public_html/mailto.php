<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/users.php";

global $db;
global $lng;
$post = get_numeric("post", 0);

global $settings;

if(isset($_GET['aid']) && is_numeric($_GET['aid'])) $ad_id=$_GET['aid'];
else exit(0);

if(!$post) {
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$ad_title = cleanStr(listings::getTitle($ad_id));
$smarty->assign("ad_title", $ad_title);
}

else common_no_template();

$nologin = 0;
$user = array();
if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']) {
	$id=$_GET['id'];
}
else { 
	$listings = new listings;
	$id=0;
	$nologin = $listings->isNologinAd($ad_id);
	if(!$nologin) exit(0);
}

global $ads_settings, $crt_usr;

if(!$nologin) {
	$users=new users();
	$user=$users->getUser($id);
	$username=$user['username'];
	if(!$post) {
		$contact_name = $user[$settings['contact_name_field']];
		$smarty->assign("crt_usr_email", $user['email']);
		$smarty->assign("crt_usr_contact_name", $user[$settings['contact_name_field']]);
		$smarty->assign("contact_name", $contact_name);
		$smarty->assign("nologin", $nologin);
	}
} else {
	$user_info = listings::getOwnerInfo($ad_id);
	$username = $user_info['mgm_name'];
	if(!$post) {
		$smarty->assign("contact_name", $username);
		$smarty->assign("nologin", $nologin);
	}
}

if($post) {

	require_once "classes/validator.php";
	require_once "classes/blocked_emails.php";
	require_once "libs/JSON.php";


	$ret = array("response" => 0, "error" => array(), "info" => null);

	$sp_response = array();
	do_action("mailto_post", array(&$sp_response, getRemoteIp(), $_POST['email']));
	if($sp_response && is_array($sp_response)) { array_push($ret['error'], $sp_response);}
	//_print_r($sp_response);
	if(empty($_POST['name']))
		array_push($ret['error'], array("field"=> 'name', "error" => $lng['contact']['error']['name_missing']));

	// if internal messaging is enabled an email must be present
	if($settings['internal_messaging']) { 
	
		if(empty($_POST['email']))
			array_push($ret['error'], array("field"=> 'email', "error" => $lng['contact']['error']['email_missing']));
	}
	// at least one of email or phone must be present
	else {
		if(empty($_POST['email']) && empty($_POST['phone'])) 
			array_push($ret['error'], array("field"=> 'email', "error" => $lng['contact']['error']['phone_or_email_missing']));
	}
	
	// email validation
	if(!empty($_POST['email'])) {
		if(!validator::valid_email($_POST['email']))
			array_push($ret['error'], array("field"=> 'email', "error" => $lng['contact']['error']['invalid_email']));

		else if(blocked_emails::isBlocked(escape($_POST['email'])))
			array_push($ret['error'], array("field"=> 'email', "error" => $lng['users']['errors']['email_not_permitted']));
	}
	
	if(empty($_POST['comments']))
		array_push($ret['error'], array("field"=> 'comments', "error" => $lng['contact']['error']['comments_missing']));
	else {
	    require_once "classes/badwords.php";
	    $badword=new badwords();
	    if($badword->check($_POST['comments'])) {
		array_push($ret['error'], array("field"=> 'comments', "error" => $lng['contact']['error']['comments_forbidden_words']));
	    }
	}

	// check captcha if enabled
	if($settings['contact_captcha'] ) { 
		
		global $config_abs_path;
		require_once $config_abs_path."/include/captcha.php";
		if($settings['enable_recaptcha']) $field = 'recaptcha_div'; else $field = 'number';
		$error = checkCaptcha();
		if($error) array_push($ret['error'], array("field"=> $field, "error" => $error));

	}

	if(empty($ret['error'])) {

		$ret['response'] = 1;

		require_once "classes/mails.php";
		require_once "classes/mail_templates.php";
		require_once "classes/pictures.php";

		if(!$nologin) {
			$useremail=$user['email'];
			$name=$user[$settings['contact_name_field']];
			$usr = $username;
		} else {
			$useremail = $user_info['mgm_email'];
			$name = $user_info['mgm_name'];
			$usr = $name;

		}

		$clean_name = cleanStr($_POST['name']);
		$clean_comments = cleanStr($_POST['comments']);

		$pending = 0;

		// send the message via email if should not wait for admin aproval
		if(!$settings['internal_messaging'] || !$settings['contact_messages_pending']) {

			$details_link = listings::makeDetailsLink($ad_id);

			// get listing details
			$listings = new listings;
			$details = $listings->getBriefListing($ad_id);

			$ad_title = $details['title'];

			// send email
			$mail2send=new mails();
			$mail2send->init($useremail, $name, cleanStr($_POST['email']), $clean_name);

			global $mail_settings;
			if($mail_settings["html_mails"])
				$message = nl2br($clean_comments); else $message = $clean_comments;

			$array_subject = array("ad_id"=>$ad_id, "username"=>$usr, "contact_name"=>$name, "sender_name"=>$clean_name, "title"=>$ad_title);

			$from_phone = "";
			if(isset($_POST['phone']) && $_POST['phone']) $from_phone = cleanStr($_POST['phone']);
			
			$array_message = array("ad_id"=>$ad_id, "username"=>$usr, "contact_name"=>$name, "sender_name"=>$clean_name, "sender_email"=> cleanStr($_POST['email']), "sender_phone"=> $from_phone, "ad_link"=>$details_link, "title"=>$ad_title, "ip"=>getRemoteIp(), "message" => $message);

			$sent = $mail2send->composeAndSend("mailto", $array_message, $array_subject);

			if($sent) $ret['info']=$lng['contact']['message_sent'];
			else $ret['info']=$lng['contact']['sending_message_failed'];

		} else { 
			$ret['info'] = $lng['contact']['message_waits_admin_aproval'];
			$pending = 1;
		}

		// if either sender or receiver has a user account
		// and if internal_messaging is enabled
		// then add to mesages table
		if($settings['internal_messaging']) {

			if($crt_usr || $id || $settings['contact_messages_pending']) {

				global $config_abs_path;
				require_once $config_abs_path."/classes/messages.php";
				$msg = new messages();

				if(!$crt_usr) $from_email=escape($_POST['email']); else $from_email ="";
				if(!$id) $to_email = $useremail; else $to_email = "";
				$from_phone="";
				if(isset($_POST['phone']) && $_POST['phone']) $from_phone = escape($_POST['phone']);
				$msg->add($id, $to_email, $crt_usr, $from_email, $from_phone, $ad_id, nl2br($clean_comments), '', $pending);

			}
		} // end internal messaging

	}//end if(empty($ret['error']))

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

}// end if post
else { 

	$smarty->assign("id",$id);
	$smarty->assign("ad_id",$ad_id);
	$smarty->assign("username",$username);
	$smarty->assign("user",$user);

}

if(!$post) {
if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('mailto.html');

close();
}

$db->close();
?>
