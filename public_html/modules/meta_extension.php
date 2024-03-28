<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("meta_extension", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/meta_extension/classes/meta_extension.php";

function meta_extension($smarty, $post_array) {

	global $smarty;
	$mext = new meta_extension();
	$page_info = $mext->getMetaExtensions($post_array);
	if($page_info) $smarty->assign("page_info", $page_info);

}

add_action('search_meta', 'meta_extension');

?>