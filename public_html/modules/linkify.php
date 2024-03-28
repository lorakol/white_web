<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("linkify", $modules_array)) return;

function Linkify_addToTemplate($smarty, $listing_id, $listing_array) {
	
	global $config_abs_path;
	require_once $config_abs_path."/modules/linkify/classes/linkify.php";

	$linkify = new linkify();
	$lnk_settings = $linkify->getSettings();
	
	// check if specific listings condition is met
	if(	!$lnk_settings['all'] &&
	!($lnk_settings['featured'] && $listing_array['featured']) && 
	!($lnk_settings['prioritized'] && $listing_array['priority']>0) && 
	!($lnk_settings['groups']!='' && $listing_array['user_id']!=0 && in_array($listing_array['user']['group'], $lnk_settings['groups_array']))) return;

    $file = "modules/linkify/details.html";
    $details_bottom_inclusions = $smarty->getTemplateVars('details_bottom_inclusions');
    if(!$details_bottom_inclusions) $details_bottom_inclusions = array();
    array_push( $details_bottom_inclusions, $file);
    $smarty->assign("details_bottom_inclusions", $details_bottom_inclusions);

}


add_action('details_page', 'Linkify_addToTemplate');

?>