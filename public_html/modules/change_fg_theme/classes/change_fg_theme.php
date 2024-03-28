<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class change_fg_theme {

	var $tmp;
	var $error;

	public function __construct()
	{

	}
	function getTemplates() {

		global $db, $config_table_prefix;
		$templates = $db->fetchAssocList("select * from ".$config_table_prefix."cfgth_templates");
		return $templates;
	}
	function getActiveTemplates() {

		global $db, $config_table_prefix;
		$templates = $db->fetchAssocList("select * from ".$config_table_prefix."cfgth_templates where active=1");
		return $templates;
	}

	function getColorschemes($template_code='') {

		global $db, $config_table_prefix;
		$str='';
		if($template_code) $str = " where `tpl` like '$template_code'";
		$colorschemes = $db->fetchRowList("select `colorscheme` from ".$config_table_prefix."tpl_colorschemes".$str);
		return $colorschemes;
	}

	function saveUserSettings($user_id) {

		global $db, $config_table_prefix;

		$template = escape($_POST['template']);
		$ads_per_page = escape($_POST['ads_per_page']);
		if(!is_numeric($ads_per_page) || $ads_per_page<1) $ads_per_page=20;
		$dark_mode = checkbox_value("dark_mode");
		if(isset($_POST['template_colorscheme']) && $_POST['template_colorscheme']) $colorscheme = escape($_POST['template_colorscheme']);
		if(isset($_POST['first_page_type']) && $_POST['first_page_type']) $first_page_type = escape($_POST['first_page_type']);

		$exists = $db->fetchRow("select count(*) from `".$config_table_prefix."cfgth_user_templates` where `user_id`='$user_id'");
		if($exists)
			$db->query("update `".$config_table_prefix."cfgth_user_templates` set `template`= '$template', `template_colorscheme`= '$colorscheme', `first_page_type`= '$first_page_type', `ads_per_page`= '$ads_per_page', `dark_mode`= '$dark_mode' where `user_id`= '$user_id'");
		else
			$db->query("insert into `".$config_table_prefix."cfgth_user_templates` set `user_id`= '$user_id', `template`= '$template', `template_colorscheme`= '$colorscheme', `first_page_type`= '$first_page_type', `ads_per_page`= '$ads_per_page', `dark_mode`= '$dark_mode'");

		return 1;
	}

    function getCFGTHSettings($user_id) {

				global $db, $config_table_prefix;
				$cfgth_settings = $db->fetchAssoc("select * from ".$config_table_prefix."cfgth_user_templates where `user_id`='$user_id'");
				return $cfgth_settings;

    }

		function getTplSettings($template_code) {

				global $db, $config_table_prefix;
				$extra_settings = $db->fetchAssoc("select * from ".$config_table_prefix."cfgth_templates where `template_code` like '$template_code'");
				return $extra_settings;

		}

		function getDarkColorscheme($template_code) {

				global $db, $config_table_prefix;
				if($template_code=='flux') return 'dark';

		}

		function saveSettings() {

			global $db, $config_table_prefix;
			$templates = $this->getTemplates();
			foreach($templates as $t) {
					$active = checkbox_value("active".$t['id']);
					$max_cat_per_row = escape($_POST["max_cat_per_row".$t['id']]);
					$db->query("update ".$config_table_prefix."cfgth_templates set `active`='$active', `max_cat_per_row`='$max_cat_per_row' where id='{$t['id']}' ");
			}
		}

		function getTemplateInfo($template_code) {

				global $db, $config_table_prefix;
				$array = $db->fetchAssoc("select * from ".$config_table_prefix."cfgth_templates where `template_code` like '$template_code'");
				if($array['has_colorschemes']) {
						$array['colorschemes'] = $this->getColorschemes($template_code);
				}
				return $array;
		}

}
?>
