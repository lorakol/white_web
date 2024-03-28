<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "classes/comments.php";

$id = get_numeric_only("id");
$lid = get_numeric_only("lid");

$comm = new comments;
$comments_settings = $comm->getSettings();

$smarty = new Smarty;
$smarty = smartyShowDBVal($smarty);

// seo settings, allows to you modify search engine friendly links
global $seo;
$seo = new seo();
$seo->init($smarty);
$smarty->registerObject('seo', $seo, null, false);

global $config_live_site, $crt_usr, $lng;
$smarty->assign("live_site",$config_live_site);
$smarty->assign("comments_settings",$comments_settings);
$smarty->assign("crt_usr",$crt_usr);
$smarty->assign("lng",$lng);
$smarty->assign("id",$id);
$smarty->assign("lid",$lid);
global $lng_comments;
$smarty->assign("lng_comments", $lng_comments);

$str="";
$comment = $comm->getComment($id);
$smarty->assign("comment",$comment);
$str .= $smarty->fetch("modules/comments/edit_comment.html");

//echo $str;
global $config_abs_path;
require_once $config_abs_path."/libs/JSON.php";

echo json_encode($str);

$db->close();
if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

?>
