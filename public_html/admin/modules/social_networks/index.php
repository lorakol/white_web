<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "../../include/lists.php";
require_once '../../../modules/social_networks/classes/social_networks.php';

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/social_networks/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/social_networks/lang/eng.php";
require_once $lang_file;

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_sn",$lng_sn);

global $array_locales;
$smarty->assign("array_locales",$array_locales);

$sn = new social_networks();
$sn_settings = $sn->getSettings();

$info = '';
$error = '';
if(isset($_POST['Submit'])) {
	if($sn->saveSettings()) {
		$info=$lng['settings']['settings_saved'];
		$sn_settings = $sn->getSettings(1);
	} else {
		$sn_settings = $sn->getTmp();
		$error = $sn->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("sn_settings",$sn_settings);

$gplus_languages = array("ar" => "Arabic", "bg" => "Bulgarian", "ca" => "Catalan", "zh-CN" => "Chinese (Simplified)", 
"zh-TW" => "Chinese (Traditional)", "hr" => "Croatian", "cs" => "Czech", "da" => "Danish", "nl" => "Dutch - Nederlands", 
"en-US" => "English (US)", "en-GB" => "English (UK)", "et" => "Estonian", "fil" => "Filipino", "fi" => "Finnish", 
"fr" => "French", "de" => "German", "el" => "Greek", "iw" => "Hebrew", "hi" => "Hindi", "hu" => "Hungarian", "id" => "Indonesian", 
"it" => "Italian", "ja" => "Japanese", "ko" => "Korean", "lv" => "Latvian", "lt" => "Lithuanian", "ms" => "Malay", "no" => "Norwegian", 
"fa" => "Persian", "pl" => "Polish", "pt-BR" => "Portuguese (Brazil)", "pt-PT" => "Portuguese (Portugal)", "ro" => "Romanian", 
"ru" => "Russian", "sr" => "Serbian", "sv" => "Swedish", "sk" => "Slovak", "sl" => "Slovenian", "es" => "Spanish", 
"es-419" => "Spanish (Latin America)", "th" => "Thai", "tr" => "Turkish", "uk" => "Ukranian", "vi" => "Vietnamese");

$smarty->assign("gplus_languages",$gplus_languages);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/social_networks/index.html');

$db->close();
close();
?>
