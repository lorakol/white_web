<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once('config.php');
require_once('classes/mysqli.php');
$db = new db_mysql();
$config_debug=1;
?>
<html>
<title></title>
<body>
<table width=100% height=100% align=center><tr><td>
<table width="500" height="150" cellspacing="0" cellpadding="0" align=center>
    <tbody>
        <tr>
            <td bgcolor="#cee8f4" style="border: 1px dotted rgb(85, 85, 85); padding: 5px;">
            <p style="font-weight: bold; font-size: 12px; color: rgb(0, 0, 128); font-family: Helvetica;">The site is not accesible!</p>
            <p style="font-size: 12px; font-family: Helvetica;">The problem was:</p>
            <p style="font-size: 12px; font-family: Helvetica;" align=center><font color="#ff3300"><?=$db->getError()?></font></p>
            </td>
        </tr>
    </tbody>
</table>
</td></tr></table>
</body>
</html>
