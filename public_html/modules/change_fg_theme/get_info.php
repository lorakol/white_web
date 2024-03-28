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
require_once $config_abs_path."/modules/change_fg_theme/classes/change_fg_theme.php";

$type = escape($_GET['type']);

global $db;
$th = new change_fg_theme();
$template_code = escape($_GET['template_code']);

if($type == 'template') {
  $template_info = $th->getTemplateInfo($template_code);

  // has_colorschemes|has_darkmode|has_first_page_type|colorschemes(comma separated)
  echo $template_info['has_colorschemes']."|".$template_info['has_dark_mode']."|".$template_info['has_first_page_type']."|";

  if($template_info['has_colorschemes']) {
    echo implode(",", $template_info['colorschemes']);
  }
  
} // end if template

if($type=='dark_mode') {

  echo $th->getDarkColorscheme($template_code);

}

?>
