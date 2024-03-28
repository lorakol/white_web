<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "libs/JSON.php";

global $db;
global $lng;
$post = get_numeric("post", 0);

if(!$post) {
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("section","other");
}

if($post) {

	my_session_start();

	require_once "classes/validator.php";
	$ret = array("response" => 0, "error" => array(), "info" => null);
	
	if(empty($_POST['name']))
		array_push($ret['error'], array("field"=> 'name', "error" => $lng['contact']['error']['name_missing']));

	if(empty($_POST['subject']))
		array_push($ret['error'], array("field"=> 'subject', "error" => $lng['contact']['error']['subject_missing']));

	if(empty($_POST['email']))
		array_push($ret['error'], array("field"=> 'email', "error" => $lng['contact']['error']['email_missing']));

	else if(!validator::valid_email($_POST['email']))
		array_push($ret['error'], array("field"=> 'email', "error" => $lng['contact']['error']['invalid_email']));

	if(!empty($_POST['webpage']) && !validator::valid_url($_POST['webpage']))
		array_push($ret['error'], array("field"=> 'webpage', "error" => $lng_comments['error']['invalid_website']));

	if(empty($_POST['comments']))
		array_push($ret['error'], array("field"=> 'comments', "error" => $lng['contact']['error']['comments_missing']));

	// check captcha if enabled
	if($settings['contact_captcha'] ) { 
		
		global $config_abs_path;
		require_once $config_abs_path."/include/captcha.php";
		if($settings['enable_recaptcha']) $field = 'recaptcha_div'; else $field = 'number';
		$error = checkCaptcha();
		if($error) array_push($ret['error'], array("field"=> $field, "error" => $error));

		//$error.=checkCaptcha();

	}

	if(empty($ret['error'])) {

		$ret['response'] = 1;
		require_once "classes/mails.php";
		$mail = new mails();
		$mail->init($settings['contact_email'], $settings['admin_name']);
		$mail->setSubject(cleanStr($_POST['subject']));
		$mail->setFrom(cleanStr($_POST['email']));

		global $mail_settings;
		$html_mails=$mail_settings["html_mails"];

		if(strtoupper(substr(PHP_OS,0,3)) == 'WIN') $newLine="\r\n";
		else $newLine="\n";
		
		$mail->setFromName(cleanStr($_POST['name']));
		if($html_mails) {
			$msg=nl2br(cleanStr($_POST['comments']).$newLine.$newLine.cleanStr($_POST['name']).$newLine.cleanStr($_POST['email'])).'<br/>';
			
		}	
		else {
		    $msg=cleanStr($_POST['comments']).$newLine.$newLine.cleanStr($_POST['name']).$newLine.cleanStr($_POST['email']);
		}
		
		if(!empty($_POST['webpage'])) { 

			if($html_mails) { 
				$weblink=html_link(escape($_POST['webpage']));
				$newLine = "<br/>";
			}
			else { 
				$weblink=correct_href(escape($_POST['webpage']));
			}
			$msg.=$weblink;

		}

		$mail->setMessage($msg);
		if($mail->send()) $ret['info']=$lng['contact']['message_sent'];
		else $ret['info']=$lng['contact']['sending_message_failed'];

	}

        global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

}


if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

if(!$post) {
	$smarty->display('contact.html');
	close();
}
$db->close();
?>
