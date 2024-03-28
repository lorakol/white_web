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

$id = escape($_POST['id']);
if(!is_numeric($id)) exit(0);

$rating = escape($_POST['rating']);
if(!is_numeric($rating) || $rating<=0 || $rating>5) exit(0);

if(isset($_POST['ip'])) $ip = escape($_POST['ip']); else $ip='';

$r = new ratings();
$ip = getRemoteIp();
$result = $r->addRating($id, $rating, $ip);

global $db;
$v = $db->fetchAssoc("select rating, no_ratings from ".TABLE_ADS." where id='$id'");
$rating = round($v['rating']);
$no_ratings = $v['no_ratings'];
$vote = ($no_ratings ==1) ? $lng_ratings['vote'] : $lng_ratings['votes'];

echo "$rating|".$lng_ratings['rating'].": $rating ($no_ratings $vote)";

?>
