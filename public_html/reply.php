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
$id = get_numeric("id");

if(!$post) {
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("id",$id);
}

else common_no_template();

//global $appearance_settings;
//header('Content-type: text/html; charset='.$appearance_settings['charset']);


if($post) {

	require_once "classes/messages.php";
	require_once "classes/mails.php";
	require_once "classes/mail_templates.php";

	global $mail_settings;
	$ret = array("response" => 0, "error" => array(), "info" => null);

	$msg = new messages();
	$message=$msg->getMessage($id);

	$to = $message['to'];
	$ad_id = $message['ad_id'];
	$usr = new users;
	$from_details = $usr->getContactData($to);
	
	if(!isset($_POST['comments']) || $_POST['comments']=='' ) {

		array_push($ret['error'], array("field"=> 'comments', "error" => $lng['contact']['error']['comments_missing']));

	}
	
	if(empty($ret['error'])) {

		$ret['response'] = 1;

		// send the message via email if should not wait for admin aproval
		if(!$settings['internal_messaging'] || !$settings['contact_messages_pending']) {

			// user or guest we reply to
			if($message['from']) { 
				$to_email = $message['email']; 
				$to_name=$message[$settings['contact_name_field']];
			}
			else { 
				$to_email = $message['from_email'];
				$to_name="";
			}
		
			// send email
			$mail2send=new mails();
			$mail2send->init($to_email, $to_name, $from_details['email'], $from_details[$settings['contact_name_field']]);

			$array_subject = array();

			$array_message = array("message" => nl2br(cleanStr($_POST['comments'])));

			$sent = $mail2send->composeAndSend("reply", $array_message, $array_subject);

			if($sent) $ret['info']=$lng['contact']['message_sent'];
			else $ret['info']=$lng['contact']['sending_message_failed'];
			$pending=0;
			
		} // end if should not wait for admin aproval
		else { 
			$ret['info'] = $lng['contact']['message_waits_admin_aproval'];
			$pending = 1;
		}

		// add to db
		if($settings['internal_messaging']) {

			global $crt_usr;
			if($crt_usr || $id || $settings['contact_messages_pending']) {
			
				$timestamp = date("Y-m-d H:i:s");

				$starting = $message['starting'];
				if(!$starting) $starting = $id;
			
				$msg->setStarting($starting);

				$msg->add($message['from'], $message['from_email'], $crt_usr, $from_details[$settings['contact_name_field']], '', $ad_id, escape($_POST['comments']), $id, $pending);
//add($to, $to_email, $from, $from_email, $from_phone, $ad_id, $message, $reply_to='', $pending = 0) 
			}
		} // end internal messaging

		

		}  // end if no error

		global $config_abs_path;
		require_once $config_abs_path."/libs/JSON.php";

		global $appearance_settings;
		if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

		echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

}// end if post
else { 

	$smarty->assign("id",$id);

}


if($db->error!='') { $db_error = $db->getError(); if(!$post) $smarty->assign('db_error',$db_error); else echo $db_error; }
if(!$post) {
	$smarty->display('reply.html');
	close();
}

$db->close();
?>