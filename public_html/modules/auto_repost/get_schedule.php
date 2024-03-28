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
require_once $config_abs_path."/modules/auto_repost/classes/auto_repost.php";

$no_reposts = get_numeric_only("no_reposts");
$repost_period = get_numeric_only("repost_period");
$repost_period_um = $_GET["repost_period_um"]; 
if($repost_period_um!="h" && $repost_period_um!='d') $repost_period_um='d';
$starting_hour = $ending_hour = '';
if(isset($_GET['starting_hour']) && $_GET['starting_hour']) $starting_hour = get_numeric_only("starting_hour");
if(isset($_GET['ending_hour']) && $_GET['ending_hour']) $ending_hour = get_numeric_only("ending_hour");

$rp = new auto_repost();
$schedule_array = $rp->getAutoRepostTimesFormatted($no_reposts, $repost_period, $repost_period_um, $starting_hour, $ending_hour);

$str='';
global $lng;
foreach($schedule_array as $time) { 
	if(!$time) 
		$str .= $lng['now']."<br/>";
	else 
		$str .= $time."<br/>";
}

echo $str;
?>
