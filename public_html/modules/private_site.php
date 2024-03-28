<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!in_array("private_site", $modules_array)) return;

function checkPrivateSite($smarty, $self_noext) {

	if($self_noext=="login" || $self_noext=="register") return;
	
	global $logged_in, $is_admin;
	if(!$logged_in && !$is_admin) {
		
		global $seo_settings, $sef_links, $config_live_site;

		if ($seo_settings['enable_mod_rewrite'])
			header("Location: ".$config_live_site."/".$sef_links['login']); 
		else 
			header("Location: ".$config_live_site."/login.php"); 
		exit(0);
	}
	
}

add_action('init_template', 'checkPrivateSite');

?>