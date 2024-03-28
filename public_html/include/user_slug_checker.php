<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../config.php";
global $config_abs_path;
require_once $config_abs_path."/include/include_min.php";
require_once $config_abs_path."/classes/slugs.php";

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

global $crt_usr;
global $settings, $lng, $seo_settings;

$error = '';
$info ='';

$user_slug = escape($_POST['user_slug']);

$no_chars = $seo_settings['maximum_slug_width'];
$user_slug_enc = _urlencode($user_slug, 1, $no_chars, 1);

$s = new slugs();
if($s->slugExists($user_slug_enc, $crt_usr))
	$error = $lng['users']['errors']['slug_already_used'];

if(!$error) $info = $lng['users']['slug_available'];

echo $user_slug_enc."|".$error."|".$info;

?>
