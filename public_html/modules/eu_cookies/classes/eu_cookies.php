<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class eu_cookies {

	var $tmp;
	var $error;

	public function __construct()
	{

	}

	function getCPLink() {
		
		global $db, $config_live_site;
		// get cp id with "eu_cookie" code
		$id = $db->fetchRow("select `id` from ".TABLE_CUSTOM_PAGES." where `code` like 'eu_cookie'");
		return $id;

	}
	function autoCheckSlug() {
	
		global $db, $config_table_prefix;
		$cp_id = $db->fetchRow("select id from ".$config_table_prefix."custom_pages where `code` like 'eu_cookie'");
		$exists = $db->fetchRow("select count(*) from ".$config_table_prefix."slugs where `type`= 'content' and `object_id`='$cp_id'");
		if(!$exists) {
			$slug = new slugs();
			$slug->addContent($cp_id, "eu_cookie");
		}
	
	}

}
?>
