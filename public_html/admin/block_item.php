<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/users.php";
require_once "../classes/blocked_emails.php";
require_once "../classes/blocked_ips.php";
require_once "../classes/flagged_ips.php";
require_once "../classes/blocked_phones.php";
require_once "../classes/fields.php";
require_once "../classes/listings.php";

$post = get_numeric("post", 0);
$id = get_numeric("id", 0);
$listing_id = get_numeric("listing_id", 0);

global $db;
global $lng;

if(!$post) {
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
}
else common_no_template();

if($id) {
	$usr = new users();
	$user_group = $usr->getGroup($id);
}
else {
	$user_group = -1;
	$owner_info = listings::getOwnerInfo($listing_id);
}
$f = new fields("uf");

$where_str='';
if($user_group==-1) $where_str .= " and `groups` = $user_group";
if($user_group && $user_group!=-1) $where_str .= " and ( (`groups` REGEXP CONCAT('(^|,)(', REPLACE('$user_group', ',', '|'), ')(,|$)') and `groups`!=-1)  or `groups` = 0 )";

$array_fields = $f->getFieldsOfTypeShort("phone", $where_str);

$array_phones = array();
$i=0;
foreach($array_fields as $p) {

	$array_phones[$i]['caption'] = $p['caption'];
	$array_phones[$i]['name'] = $p['name'];
	$array_phones[$i]['international'] = 0;
	if(isset($p['ext'])) $array_phones[$i]['international'] = $p['ext'];
	if($id)
		$array_phones[$i]['val'] = $usr->getFieldValue($id,$p['caption']);
	else
		$array_phones[$i]['val'] = $owner_info[$p['caption']];
	$i++;

}

if($id) {
	$ip = users::getIp($id);
	$email = users::getEmail($id);
} else {
	$ip = $owner_info['ip'];
	$email = $owner_info['mgm_email'];
}

if(!$post) {

	$bi = new blocked_ips;
	$be = new blocked_emails;
	$bp = new blocked_phones;
	$ip_blocked = blocked_ips::isBlocked($ip);
	$ip_flagged = flagged_ips::isFlagged($ip);
	$email_blocked = blocked_emails::isBlocked($email);

	$ip_whitelisted = $bi->checkIfWhitelisted($ip);
	$email_whitelisted = $be->checkIfWhitelisted($email);

	$i=0;
	foreach($array_phones as $p) {
		if($array_phones[$i]['val']) {
			$array_phones[$i]['blocked'] = blocked_phones::isBlocked($array_phones[$i]['val']);
			$array_phones[$i]['whitelisted'] = $bp->checkIfWhitelisted($array_phones[$i]['val']);
		}
		else {
			$array_phones[$i]['blocked'] = 0;
			$array_phones[$i]['whitelisted'] = 0;
		}
		$i++;
	}
//_print_r($array_phones);
	$smarty->assign("lng",$lng);
	$smarty->assign("id",$id);
	$smarty->assign("listing_id",$listing_id);
	$smarty->assign("array_phones",$array_phones);
	$smarty->assign("ip",$ip);
	$smarty->assign("email",$email);
	$smarty->assign("ip_blocked",$ip_blocked);
	$smarty->assign("ip_flagged",$ip_flagged);
	$smarty->assign("email_blocked",$email_blocked);
	$smarty->assign("ip_whitelisted",$ip_whitelisted);
	$smarty->assign("email_whitelisted",$email_whitelisted);

}

if($post) {

	$ret = array("response" => 0, "error" => array(), "info" => null);

	// ------------------ BLOCK --------------------------
	if(isset($_POST['Block']) && $_POST['Block']) {

	if(isset($_POST['ip']) && $_POST['ip']=="on") {
		$bi = new blocked_ips();
		$bi->add($ip, "Blocked user");
	}

	if(isset($_POST['email']) && $_POST['email']=="on") {
		$be = new blocked_emails();
		$be->add($email, "Blocked user");
	}

	foreach($array_phones as $p) {

		if($p['val'] && isset($_POST[$p['caption']]) && $_POST[$p['caption']]=="on") {
			$bp = new blocked_phones();
			$bp->add($p['val'], "Blocked user");
		}
		$i++;
	}
	$ret['info'] = $lng['users']['info']['items_blocked'];
	} // ------------------ END BLOCK --------------------------

		// ------------------ FLAG --------------------------
	if(isset($_POST['Flag']) && $_POST['Flag']) {

	if(isset($_POST['ip']) && $_POST['ip']=="on") {
		$fi = new flagged_ips();
		$fi->add($ip, "Blocked user");
	}
	$ret['info'] = $lng['users']['info']['items_flagged'];
	}
	// ------------------ UN BLOCK --------------------------
	if(isset($_POST['Unblock']) && $_POST['Unblock']) {

	if(isset($_POST['ip']) && $_POST['ip']=="on") {
		$bi = new blocked_ips();
		$bi->deleteIp($ip);
	}

	if(isset($_POST['email']) && $_POST['email']=="on") {
		$be = new blocked_emails();
		$be->deleteEmail($email);
	}

	foreach($array_phones as $p) {

		if($p['val'] && isset($_POST[$p['caption']]) && $_POST[$p['caption']]=="on") {
			$bp = new blocked_phones();
			$bp->deletePhone($p['val']);
		}
		$i++;
	}
	$ret['info'] = $lng['users']['info']['items_unblocked'];
	} // ------------------ END BLOCK --------------------------

		// ------------------ UN BLOCK --------------------------
	if(isset($_POST['Unflag']) && $_POST['Unflag']) {

	if(isset($_POST['ip']) && $_POST['ip']=="on") {
		$fi = new flagged_ips();
		$fi->deleteIp($ip);
	}
	$ret['info'] = $lng['users']['info']['items_unflagged'];
	}
	
	// ------------------ WHITELIST --------------------------
	if(isset($_POST['Whitelist']) && $_POST['Whitelist']) {

	if(isset($_POST['ip']) && $_POST['ip']=="on") {
		$bi = new blocked_ips();
		$bi->addtoWhitelist($ip, 'Whitelisted user');
	}

	if(isset($_POST['email']) && $_POST['email']=="on") {
		$be = new blocked_emails();
		$be->addtoWhitelist($email, 'Whitelisted user');
	}

	global $db;
	foreach($array_phones as $p) {

		if($p['val'] && isset($_POST[$p['caption']]) && $_POST[$p['caption']]=="on") {
			$bp = new blocked_phones();
			$bp->addtoWhitelist($p['val'], 'Whitelisted user');

		}
		$i++;
	}
	$ret['info'] = $lng['users']['info']['items_whitelisted'];
	} // ------------------ END WHITELIST --------------------------


	$ret['response'] = 1;

	require_once $config_abs_path."/libs/JSON.php";

	global $appearance_settings;
        if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);
}

if(!$post && $db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
if(!$post) $smarty->display('block_item.html');

$db->close();
close();
?>
