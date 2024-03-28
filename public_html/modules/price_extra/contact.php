<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../../include/include.php";

global $db;
global $lng;
$post = get_numeric("post", 0);
$id = get_numeric("id");

if(!$post) {

	global $lng_pe, $crt_lang, $config_abs_path;
	if(file_exists($config_abs_path."/modules/price_extra/lang/".$crt_lang.".php"))
		require_once $config_abs_path."/modules/price_extra/lang/".$crt_lang.".php";
	else require_once $config_abs_path."/modules/price_extra/lang/eng.php";

	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("id",$id);
	$pe = new price_extra();
	$offer = $pe->getOffer($id);
	$offer_value = add_currency($offer['offer'], $offer['currency']);
	$smarty->assign("offer_value",$offer_value);
	$smarty->assign("lng_pe",$lng_pe);
}

else common_no_template();

//global $appearance_settings;
//header('Content-type: text/html; charset='.$appearance_settings['charset']);


if($post) {

	global $config_abs_path;
	require_once $config_abs_path."/classes/messages.php";
	require_once $config_abs_path."/classes/mails.php";
	require_once $config_abs_path."/classes/mail_templates.php";

	global $mail_settings;
	$ret = array("response" => 0, "error" => array(), "info" => null);

	$pe = new price_extra();
	$offer_user_info=$pe->getOfferUserInfo($id);

	$usr = new users;
	$from_details = $usr->getContactData($crt_usr);
	
	if(!isset($_POST['comments']) || $_POST['comments']=='' ) {

		array_push($ret['error'], array("field"=> 'comments', "error" => $lng_pe['error']['message_missing']));

	}
	
	if(empty($ret['error'])) {

		$ret['response'] = 1;

		$offer = $pe->getOffer($id);
		$ad_id = $offer['ad_id'];
		$ad_title = listings::getTitle($ad_id);

		// send the message via email if should not wait for admin aproval
		if(!$settings['internal_messaging'] || !$settings['contact_messages_pending']) {

			$to_email = $offer_user_info['contact_email']; 
			$to_name = $offer_user_info['contact_name'];
		
			// send email
			$mail2send=new mails();
			$mail2send->init($to_email, $to_name, $from_details['email'], $from_details[$settings['contact_name_field']]);

			$array_subject = array("ad_title" => $ad_title);

			$array_message = array("message" => nl2br(cleanStr($_POST['comments'])), "ad_title" => $ad_title, "offer" => $offer['offer_curr'], "contact_name" =>$to_name);

			$sent = $mail2send->composeAndSend("offer_reply", $array_message, $array_subject);

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
			
				$msg = new messages();
				$msg->setStarting($starting);

				$msg->add($message['from'], $message['from_email'], $crt_usr, $from_details[$settings['contact_name_field']], '', $ad_id, escape($_POST['comments']), $ad_id, $pending);
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
	$smarty->display('modules/price_extra/contact.html');
	close();
}

$db->close();
?>