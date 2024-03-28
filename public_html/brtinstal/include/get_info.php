<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

session_start();

$default_charset = $_GET['charset'];
if(function_exists('mysqli_connect')) {
	$conn = @mysqli_connect($_SESSION['db_server'], $_SESSION['db_user'], $_SESSION['db_password']);
	@mysqli_select_db($conn, $_SESSION['db']);
	$res = @mysqli_query($conn, "show collation where charset = '$default_charset'");
}
else {
	$conn = @mysql_connect($_SESSION['db_server'], $_SESSION['db_user'], $_SESSION['db_password']);
	@mysql_select_db($_SESSION['db']);
	$res = @mysql_query("show collation where charset = '$default_charset'");
}
$i = 0;
while($array_collations = mysqli_fetch_assoc($res)) {

	if($i) echo ",";
	if($array_collations['Default']=="Yes") $default=1; else $default=0;
	echo $array_collations['Collation'].':'.$default;
	$i++;
}


?>
