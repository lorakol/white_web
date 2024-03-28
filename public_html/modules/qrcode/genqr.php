<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
	require_once "../../include/include.php";
	global $config_abs_path;
	require_once($config_abs_path.'/modules/qrcode/libs/phpqrcode/qrlib.php');
	
	$id = get_numeric_only('id');
	
	global $is_mobile;
	if($is_mobile) return;
	
	global $seo_settings;
	if($seo_settings['enable_mod_rewrite']) {
		$seo = new seo();
		$link=$seo->makeDetailsLink($id);
	}
	else $link=$config_live_site.'/details.php?id='.$id;

	header('Content-type: image/png');
	QRcode::png($link);

?>