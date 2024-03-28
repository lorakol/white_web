<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("extra_visits", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/extra_visits/classes/extra_visits.php";


function addFakeVisits($smarty, $id) {

	$ev = new extra_visits();
	$ev->addFakeVisits($id);

}

add_action('details_not_owner', 'addFakeVisits');

?>