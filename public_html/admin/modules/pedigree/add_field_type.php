<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 7.0
	* (c) 2011 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
global $extra_fields_types;
if(isset($extra_fields_types) && is_array($extra_fields_types)) array_push($extra_fields_types, "pedigree");
else $extra_fields_types = array("pedigree");
?>
