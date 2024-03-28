<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once('../classes/users.php');
require_once('../classes/mails.php');

global $db;
global $lng;

$post = get_numeric("post", 0);

if(!$post) {
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
}

else common_no_template();


if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id']; else { 
	$id = 0;
	if(isset($_GET['aid']) && is_numeric($_GET['aid'])) { 
		require_once('../classes/listings.php');
		$aid=$_GET['aid'];
		$id = listings::getUser($aid);
	}
	else exit(0);
}

if(isset($_GET['type'])) $type=$_GET['type']; else $type="user";
if(!$post) $smarty->assign("type",$type);

// send mail to user
$users=new users();

global $settings;
if(isset($id) && $id) { 

	if($settings['enable_username'])
		$username=users::getUsername($id);
	else $username="";
	$useremail = users::getEmail($id);

}
else {

	$user_details = listings::getOwnerInfo($aid);
	$username = $user_details['mgm_email'];
	$useremail = $user_details['mgm_email'];
	$name = $user_details['mgm_name'];

}

if($post) {

	$ret = array("response" => 0, "error" => array(), "info" => null);

	if(isset($id) && $id) { 
		$name=users::getContactName($id);
	}

	$mail2send=new mails();
	$mail2send->init($useremail, $name);

	$mail2send->setSubject(cleanStr($_POST['subject']));
	$msg=nl2br(cleanStr($_POST['content'])).'
';
	$mail2send->setMessage($msg);
	if($mail2send->send()) $ret['info']=$lng['mailto']['message_sent'];
	else $ret['info']=$lng['mailto']['sending_message_failed'];

	$ret['response'] = 1;

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	global $appearance_settings;
        if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

}
else {
	if(isset($id)) $smarty->assign("id",$id);
	if(isset($aid)) $smarty->assign("aid",$aid);
	$smarty->assign("username",$username);
	$smarty->assign("useremail",$useremail);
}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
if(!$post) $smarty->display('mailto.html');

$db->close();
close();
?>
