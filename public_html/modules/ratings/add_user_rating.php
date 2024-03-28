<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "include.php";

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

my_session_start();

if(isset($_POST['id']) && is_numeric($_POST['id'])) $id = $_POST['id']; else exit(0);
if(isset($_POST['ip'])) $ip = escape($_POST['ip']); else $ip='';
if(isset($_POST['rating']) && is_numeric($_POST['rating']) ) $rating = $_POST['rating']; else exit(0);
if($rating<=0 || $rating>5) exit(0);

$r = new ratings();
$ip = getRemoteIp();
$result = $r->addUserRating($id, $rating, $ip);

global $db;
$v = $db->fetchAssoc("select rating, no_ratings from ".TABLE_USERS." where id='$id'");
$rating = round($v['rating']);
$no_ratings = $v['no_ratings'];
$vote = ($no_ratings ==1) ? $lng_ratings['vote'] : $lng_ratings['votes'];

echo "$rating|".$lng_ratings['rating'].": $rating ($no_ratings $vote)";

?>
