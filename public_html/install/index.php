<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

ini_set("display_errors", "On");
session_start();
require_once "lang/eng.php";

if(function_exists('mysqli_connect')) {
	require_once('../classes/mysqli.php');
	$mysqli=1;
}	
else {
	require_once('../classes/mysql.php');
	$mysqli=0;
}

global $lng;

ini_set("display_errors", 1);

if(isset($_GET['step']) && is_numeric($_GET['step'])) $step = $_GET['step']; else $step = 1;

$error='';
$script_title = 'OxyClassifieds';
if($step==1) {

	ob_start();
	eval("phpinfo();");
	$info1 = ob_get_contents();
	ob_end_clean();

	$info = array();

	foreach(explode("\n", $info1) as $line) {
	if(strpos($line, "PHP Version") !== false)
		$info["php_version"] = trim(str_replace("PHP Version", "", strip_tags($line)));

	if(strpos($line, "Client API version") !== false) {
		$str = trim(str_replace("Client API version", "", strip_tags($line)));
		$arr = explode("-", $str);
		$info["mysql_version"] = trim($arr[0]); 
	}
	elseif(strpos($line, "Client API library version") !== false) {
		$str = trim(str_replace("Client API library version", "", strip_tags($line)));
		$arr = explode("-", $str);
		$info["mysql_version"] = trim($arr[0]); 
	}


	if(strpos($line, "GD Version") !== false)
		$info["gd_version"] = trim(str_replace("GD Version", "", strip_tags($line)));
	elseif(strpos($line, "GD library Version") !== false)
		$info["gd_version"] = trim(str_replace("GD library Version", "", strip_tags($line)));

	if(strpos($line, "register_globals") !== false) {
		$info["register_globals"] = trim(str_replace("register_globals", "", strip_tags($line)));
		if($info["register_globals"]=="OffOff" || $info["register_globals"]=="OffOn") $info["register_globals"] = "Off";
		else $info["register_globals"]="On";
	}

	}//end foreach

}

if($step==2) {

	$cgi = 0;
	$sapi_type = php_sapi_name();
	if (substr($sapi_type, 0, 3) == 'cgi' || substr($sapi_type,0,9)=="litespeed" || strstr($sapi_type, "FastCGI")) $cgi = 1;

}

if($step==3) {

$tmp=array('db_server'=>"", 'db_user'=>"", 'db_password'=>"", 'db_database'=>"", 'db_prefix'=>"class_", 'create'=>0, 'data_set'=>"general", 'db_charset' =>'', 'db_collation' => '');

if(isset($_POST['Step3'])) {

	$error='';

	if(!isset($_POST['db_server']) || $_POST['db_server']=='') 
		$error.=$lng['errors']['db_server_missing'].'<br />';

	if(!isset($_POST['db_user']) || $_POST['db_user']=='') 
		$error.=$lng['errors']['db_user_missing'].'<br />';
	
	if(!isset($_POST['db_database']) || $_POST['db_database']=='') 
		$error.=$lng['errors']['db_missing'].'<br />';

	//$db_password = str_replace("$", "\$", $_POST['db_password']);

	global $config_db_server, $config_db_server_username, $config_db_server_password, $config_db_database, $config_db_charset, $config_db_collation, $config_db_port, $config_debug;

	$config_db_server = $_POST['db_server'];
	$config_db_server_username = $_POST['db_user'];
	$config_db_server_password = $_POST['db_password'];
	$config_db_database = $_POST['db_database'];
	$config_debug = 1;
	
	if($error=='') { 
		$db = new db_mysql(1, 1);
		$db->set_charset($config_db_charset, $config_db_collation);
		
		$error = $db->error;
	}	

	if($error=='' && isset($_POST['create']) && $_POST['create']=='on') {

		$db->query("create database ".$_POST['db_database']);
		$error = $db->error;

	}

	if($error=='') { 
	
			$db->selectDB ($_POST['db_database']);
			$error = $db->error;

	}
}


if(isset($_POST['Step3']) && $error=='') {

	$_SESSION['db_server'] = trim($_POST['db_server']);
	$_SESSION['db_user'] = trim($_POST['db_user']);
	$_SESSION['db_password'] = trim(str_replace("$", "\$", $_POST['db_password']));
	$_SESSION['db_database'] = trim($_POST['db_database']);
	$_SESSION['db_prefix'] = trim($_POST['db_prefix']);

	header("Location: index.php?step=4");
	exit(0);

} else {

	if(isset($_POST['db_server'])) $tmp['db_server'] = trim($_POST['db_server']);
	if(isset($_POST['db_user'])) $tmp['db_user'] = trim($_POST['db_user']);
	if(isset($_POST['db_password'])) $tmp['db_password'] = trim($_POST['db_password']);
	if(isset($_POST['db_database'])) $tmp['db_database'] = trim($_POST['db_database']);
	if(isset($_POST['db_prefix'])) $tmp['db_prefix'] = trim($_POST['db_prefix']);

}
} // end if step=3

if($step==4) {

	global $config_db_server, $config_db_server_username, $config_db_server_password, $config_db_database, $config_db_charset, $config_db_port, $config_debug;

	$config_db_server = $_SESSION['db_server'];
	$config_db_server_username = $_SESSION['db_user'];
	$config_db_server_password = $_SESSION['db_password'];
	$config_db_database = $_SESSION['db_database'];
	$config_debug = 1;
	
	$db = new db_mysql(0, 1);
	$error = $db->error;

	$res = $db->query("show charset");
	$i=0;
	$utf_found=0;
	while($array_charsets[$i] = $db->fetchAssocRes($res)) {
		if($array_charsets[$i]['Charset'] == 'utf8') { 
			$utf_found = 1;
			$default_collation = $array_charsets[$i]['Default collation'];
		}
		$i++;
	}

if($utf_found) {
	$default_charset = "utf8";
}
else { 
	$default_charset = $array_charsets[0]['Charset'];
	$default_collation = $array_charsets[0]['Default collation'];
}

if($default_charset) {

	$res = $db->query("show collation where charset = '$default_charset'");
	$i=0;
	while($array_collations[$i] = $db->fetchAssocRes($res)) {
		$i++;
	}

}

if(isset($_POST['Step4'])) {

	$_SESSION['db_charset'] = trim($_POST['db_charset']);
	$_SESSION['db_collation'] = trim($_POST['db_collation']);
	$_SESSION['data_set'] = trim($_POST['data_set']);

	$res = $db->query("alter database ".$_SESSION['db_database']." default character set ".$_SESSION['db_charset']." collate ".$_SESSION['db_collation']);

	$array_languages = array("eng", "esp", "french", "italian", "dutch", "german", "portuguese", "ru", "arabic", "hebrew", "tr", "ro", "el", "pl", "hr", "ms", "lv", "hu", "afr", "bg", "greek", "nor");
	$_SESSION['languages'] = array();
	$i = 0;
	foreach($array_languages as $l) {

		if(isset($_POST[$l]) && $_POST[$l]) $_SESSION['languages'][$l] = 1;

	}
	$error =  '';

	if(!count($_SESSION['languages'])) $error.=$lng['errors']['language_missing'].'<br />';
	else { 
		header("Location: index.php?step=5");
		exit(0);
	}
}

}

if($step==5) {
$tmp=array("site_name"=>"", "admin_email"=>"");
$root=$_SERVER['SERVER_NAME'];
$script=$_SERVER['SCRIPT_NAME'];
$script=str_replace("install/","",$script);
$script=str_replace("/index.php","",$script);

$path=getcwd();
if(preg_match("/\/install/i",$path)) $path=str_replace("/install","",$path);
else  $path=str_replace("\install","",$path);

$tmp['url']="https://".$root.$script;
$tmp['path']=$path;
$tmp['admin_username']="admin";
$tmp['password']="admin";

$error='';

if(isset($_POST['Step5'])) {
	if(!isset($_POST['url']) || $_POST['url']=='') 
		$error.=$lng['errors']['url_missing'].'<br />';

	if(!isset($_POST['path']) || $_POST['path']=='') 
		$error.=$lng['errors']['path_missing'].'<br />';

	if(!isset($_POST['admin_email']) || $_POST['admin_email']=='') 
		$error.=$lng['errors']['admin_email_missing'].'<br />';

	if(isset($_POST['password']) && $_POST['password']!='' && $_POST['password']!='admin' && $_POST['password'] != $_POST['password1'])
		$error.=$lng['errors']['passwords_dont_match'].'<br />';

}

if(isset($_POST['Step5']) && !$error) {

	global $crt_lang;
	$crt_lang = "eng";

	$url = $_POST['url'];
	$path = $_POST['path'];
	$admin_email = $_POST['admin_email'];
	if(isset($_POST['site_name'])) $site_name = $_POST['site_name']; else $site_name='';
	if(isset($_POST['admin_username']) && $_POST['admin_username']!='') $admin_username=$_POST['admin_username']; else $admin_username='';
	if(isset($_POST['password']) && $_POST['password']!='') $admin_password=$_POST['password']; else $admin_password='';

	$file=fopen("../config.php", "w");
//print_r($_SESSION);
	if($file != null)
	{
		$data='<?php
	$config_db_server=\''.$_SESSION['db_server'].'\';
	$config_db_server_username=\''.$_SESSION['db_user'].'\';
	$config_db_server_password=\''.$_SESSION['db_password'].'\';
	$config_db_database=\''.$_SESSION['db_database'].'\';
	$config_db_charset=\''.$_SESSION['db_charset'].'\';
	$config_db_collation=\''.$_SESSION['db_collation'].'\';
	$config_table_prefix=\''.$_SESSION['db_prefix'].'\';
	$config_live_site=\''.$url.'\';
	$config_abs_path=\''.$path.'\';
	$config_demo=0;
	$config_debug=0;
	$config_data_set=\''.$_SESSION['data_set'].'\';
	$config_admin_folder=\'admin\';
?>';

	fwrite($file, $data);
	} else $error=$lng['cannot_write_config_file'];

	if(!$error) {


		require_once ("../config.php");
		require_once ("../include/tables.php");
		require_once ("../classes/database.php");
		require_once ("../classes/users.php");
		require_once ("../include/cache.php");
		require_once ("../include/form.php");

		$link_db='';
		global $db;
		global $config_db_server, $config_db_server_username, $config_db_server_password, $config_db_database, $config_table_prefix, $config_db_charset, $config_db_collation;

		$db = new db_mysql();
		$db_error = $db->error;
		if($db_error!='') die($db_error);

		$db->set_charset($config_db_charset, $config_db_collation);
		
		// get default language
		$_SESSION['default_lang'] = 'eng';
		foreach( $_SESSION['languages'] as $key => $value ) {
			if($value==1) { $_SESSION['default_lang'] = $key; break; }
		}

		$database = new database;
		$database->setDir("sql");
		$database->setInstall(1);
		$database->installDB("sql/structure.sql", $config_table_prefix, $_SESSION['default_lang'], $_SESSION['db_charset'], $_SESSION['db_collation']);

		if($_SESSION['data_set']!="none" && $_SESSION['data_set'])
			$database->installDB("sql/data-".$_SESSION['data_set'].".sql", $config_table_prefix, $_SESSION['default_lang'], $_SESSION['db_charset'], $_SESSION['db_collation']);

		// update values for admin username, pass and site name
		require_once "../classes/config/settings_config.php";
		$settings = new settings_config();
		$settings->install_change_settings();
		if(isset($_POST['password']) && $_POST['password']!='') $_SESSION['admin_password']=$_POST['password']; else $_SESSION['admin_password']='admin';

		//set default charset for some charsets
		if($_SESSION['db_charset'] && $_SESSION['db_charset']!="utf8") {
			$change_charset = "";
			if($_SESSION['db_charset']=="latin1") $change_charset = "iso-8859-1";
			if($_SESSION['db_charset']=="latin2") $change_charset = "iso-8859-2";
			if($change_charset) $settings->changeCharset($change_charset);
		}

		header("Location: index.php?step=6");
		exit(0);
	}
} 
if(isset($_POST['Step5']) && $error!='') {

	if(isset($_POST['site_name'])) $tmp['site_name'] = trim($_POST['site_name']); else $tmp['site_name'] ='';
	if(isset($_POST['url'])) $tmp['url'] = trim($_POST['url']); else $tmp['site_name'] ='';
	if(isset($_POST['path'])) $tmp['path'] = trim($_POST['path']); else $tmp['path'] ='';
	if(isset($_POST['admin_email'])) $tmp['admin_email'] = trim($_POST['admin_email']); else $tmp['admin_email'] ='';
	if(isset($_POST['admin_username'])) $tmp['admin_username'] = trim($_POST['admin_username']); else $tmp['admin_username'] ='';
	if(isset($_POST['password'])) $tmp['password'] = trim($_POST['password']); else $tmp['password'] ='';
	if(isset($_POST['password1'])) $tmp['password1'] = trim($_POST['password1']); else $tmp['password1'] ='';

}

} // end if step==5

if($step==6) {

require_once "../classes/settings.php";
require_once "../classes/config/settings_config.php";
require_once "../config.php";
require_once ("../include/tables.php");
require_once ("../include/form.php");

function db_connect_install()
{
		global $config_db_server, $config_db_server_username, $config_db_server_password, $config_db_database, $config_db_charset, $config_db_collation;
		global $link_db;
		if(function_exists('mysqli_connect')) {
			$link_db = @mysqli_connect($config_db_server, $config_db_server_username, $config_db_server_password);
			if(!$link_db) { global $my_error; $my_error="Could not Connect to Database: ".mysqli_error($link_db); include "../offline.php"; exit(); }
			$result = @mysqli_select_db($link_db, $config_db_database);
			if(!$result) { global $my_error; $my_error="Could not Select Database: ".mysqli_error($link_db); include "../offline.php"; exit();  }
			
/*			if( function_exists( 'mysqli_set_charset' ) )  { @mysqli_set_charset( $link_db, $config_db_charset );  if($config_db_collation) @mysqli_query($link_db, "COLLATE $config_db_collation"); } 
			else { @mysqli_query($link_db, "SET NAMES $config_db_charset");	if($config_db_collation) @mysqli_query($link_db, "COLLATE $config_db_collation"); }
			*/
		} else {

			$link_db = @mysql_connect($config_db_server, $config_db_server_username, $config_db_server_password);
			if(!$link_db) { global $my_error; $my_error="Could not Connect to Database: ".mysql_error(); include "../offline.php"; exit(); }
			$result = @mysql_select_db($config_db_database);
			if(!$result) { global $my_error; $my_error="Could not Select Database: ".mysql_error(); include "../offline.php"; exit();  }
		
		}
		
        return $link_db;
}

db_connect_install();
settings_config::emptyCompiled();
settings_config::emptyCompiled(1);

session_destroy(); 

} // end if step==6

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>OxyClassifieds v9 Install Process</title>
<meta http-equiv="Pragma" content="no-cache" /> 
<meta http-equiv="Cache-Control" content="no-cache" /> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<link rel="stylesheet" type="text/css" href="style.css"/>

<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="../libs/jQuery/jquery.js"></script>
<script type="text/javascript" src="../libs/jQuery/plugins/powertip/jquery.powertip.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jQuery/plugins/powertip/css/jquery.powertip.min.css" />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Noto+Sans"/>

</head>
<body>
<div class="page_margins">

	<div class="top-page">&nbsp;</div>
    <div id="header"> 
	<h1><img src="images/logo.jpg" alt="OxyClassifieds" /></h1>
   </div>

<?php
$config_abs_path=dirname(__FILE__).'/../';
if(function_exists('date_default_timezone_set'))
	date_default_timezone_set("Europe/London");

$year=date("Y");

if($step==1) {

?>

<div id="nav">

	<div class="lfloat"><?php echo $lng['step']?> 1 <?php echo $lng['of']?> 6 : <?php echo $lng['server_configuration']?></div>
	<div class="rfloat p5">
		<div class="inline rfloat"><form method="post" name="install" id="install" action="index.php?step=2"><div class="next_btn ml10"><input name="Step1" type="submit" value="<?php echo $lng['next']?>"/></div></form></div>
		<div class="inline rfloat btn2"><input type="submit" value="<?php echo $lng['recheck']?>" onclick="window.location.reload()" /></div>
	</div>

</div>

    <!-- begin: main content area #main -->
    <div id="dmain">

<table cellpadding=0 cellspacing=0 id="nicetable" class="dcenter">
	<tr>
		<td class="lt"><?php echo $lng['php_version']?></td>
		<td class="md"></td>
		<td><?php echo $info['php_version']; ?></td>
	</tr>
	<tr>
		<td class="lt"><?php echo $lng['mysql_version']?></td>
		<td class="md"></td>
		<td><?php echo $info['mysql_version']; ?></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['gd_lib']?></td>
		<td class="md"></td>
		<td><?php if($info['gd_version']) { ?><?php echo $info['gd_version']; ?><?php } else { ?><div class="red"><?php echo $lng['not_installed']."</div>"; } ?></td>
		</tr>

	<?php if(isset($info['register_globals'])) { ?>
	<tr>
		<td class="lt"><?php echo $lng['register_globals']?></td>
		<td class="md"></td>
		<td><?php if(strtolower($info['register_globals'])=='off') { ?><div class="green"><?php echo $lng['off']; ?><?php } else { ?><div class="red"><?php echo $lng['on']; ?><?php } ?></div></td>
		</tr>
	<?php } ?>

</table>

<br />
<?php

if(!$info['gd_version']) {
?>
	<div class="error"><p><?php echo $lng['configuration_not_ok']; ?></p></div>
	<br/>
	<ul>

		<?php if(!$info['gd_version']) { ?>
		<li><?php echo $lng['error']['gd_version'] ?></li>
		<?php } ?>

	</ul>
	<br/>
<?php
} 

if($info['gd_version'] && isset($info['register_globals']) && strtolower($info['register_globals'])=="on") {
?>
<div class="error"><p><?php echo $lng['configuration_warning']; ?></p></div>
<br/>
	<ul>

		<?php if(strtolower($info['register_globals'])=="on") { ?>
		<li><?php echo $lng['error']['register_globals'] ?></li>
		<?php } ?>

	</ul>

<?php
}


if($info['gd_version'] && isset($info['register_globals']) && strtolower($info['register_globals'])!="on") {
?>
<div id="ok"><?php echo $lng['configuration_ok']; ?></div>
<br/><br/>
<?php
}

} //end if step==1

else if($step==2) {

//db_mysql::test();

if($cgi) {
	$folder_perm = "755";
	$files_perm = "644";
} else {
	$folder_perm = "777";
	$files_perm = "666";
}

$files_array=array(
	0 => array( "file" => "config.php", "perm_actual" => "", "perm_needed" =>$files_perm ),
	1 => array( "file" => "last.php", "perm_actual" => "", "perm_needed" =>$files_perm ),
	2 => array( "file" => "images", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	3 => array( "file" => "images/baners", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	4 => array( "file" => "images/categories", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	5 => array( "file" => "images/listings", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	6 => array( "file" => "images/listings/bigThmb", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	7 => array( "file" => "images/listings/medThmb", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	8 => array( "file" => "images/listings/thmb", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	9 => array( "file" => "images/listings/mobile_bigThmb", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	10 => array( "file" => "images/listings/mobile_thmb", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	11 => array( "file" => "images/languages", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	12 => array( "file" => "images/store", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	13 => array( "file" => "uploads", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	14 => array( "file" => "temp", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	15 => array( "file" => "temp_mobile", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	16 => array( "file" => "admin/temp", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	17 => array( "file" => "lang", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	18 => array( "file" => "db_backup", "perm_actual" => "", "perm_needed" =>$folder_perm ),
	19 => array( "file" => "sitemap", "perm_actual" => "", "perm_needed" =>$folder_perm )
);

$i=0;
foreach ( $files_array as $file ) {
	$mod = getMod($config_abs_path.$file['file']);
	$files_array[$i]['perm_actual']=$mod;
	if($files_array[$i]['perm_needed']==$mod) $files_array[$i]['string']='<div class="green">'.$lng['writeable'].'</div>';
	else $files_array[$i]['string']='<div class="red">'.$lng['unwriteable'].'('.$mod.')</div>';
	$i++;
}

if($cgi) $info_msg = $lng['info']['cgi_file_permissions_check']; 
else $info_msg = $lng['info']['file_permissions_check'];
?>

<div id="nav">

	<div class="lfloat"><?php echo $lng['step']?> 2 <?php echo $lng['of']?> 6 : <?php echo $lng['file_permissions_check']?></div>
	<div class="rfloat p5">
		<div class="inline rfloat"><form method="post" name="install" id="install" action="index.php?step=3"><div class="next_btn ml10"><input name="Step2" type="submit" value="<?php echo $lng['next']?>"/></div></form></div>
		<div class="inline rfloat btn2"><input type="submit" value="<?php echo $lng['recheck']?>" onclick="window.location.reload()" /></div>
	</div>

</div>


<div id="dmain">
<p><?php echo $info_msg?></p>

<table cellpadding=0 cellspacing=0 width=500px align=center id="nicetable" class="dcenter">
	<tr class="nicetable_top"><td><?php echo $lng['file']?></td><td align=center><?php echo $lng['state']?></td><td align=center><?php echo $lng['mod_needed']?></td></tr>
	<?php
	foreach ( $files_array as $file ) { ?>
		<tr><td><?php echo $file['file']?></td><td align=center><?php echo $file['string']?></td><td align=center><b><?php echo $file['perm_needed']?></b></td></tr>
	<?php
	} ?>
</table>
<br />

<?php
} //end if step==2
else if($step==3) {

?>

<form method="post" name="install" id="install" action="index.php?step=<?php echo $step?>">

<div id="nav">

	<div class="lfloat"><?php echo $lng['step']?> 3 <?php echo $lng['of']?> 6 : <?php echo $lng['database_information']?></div>
	<div class="rfloat p5">
		<div class="next_btn ml10"><input name="Step3" type="submit" value="<?php echo $lng['next']?>" /></div>
	</div>

</div>

<div id="dmain">
<p><?php echo $lng['info']['database_information']?></p>

<?php if($error!='') { ?>
<div class="error"><p><?php echo $error?></p></div>
<?php } ?>

<table cellpadding=0 cellspacing=0 id="nicetable" class="dcenter">
	<tr>
		<td class="lt"><?php echo $lng['database_server']?></td>
		<td class="md">*</td>
		<td><input type="text" size="40" id="db_server" name="db_server" value="<?php if($tmp['db_server']) echo $tmp['db_server']; else echo "localhost"; ?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['database_server']?>" /></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['mysql_database_name']?></td>
		<td class="md">*</td>
		<td><input type="text" id="db_database" name="db_database" value="<?php echo $tmp['db_database']?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['mysql_database_name']?>" /></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['mysql_username']?></td>
		<td class="md">*</td>
		<td><input type="text" id="db_user" name="db_user" value="<?php echo $tmp['db_user']?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['mysql_username']?>" /></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['mysql_password']?></td>
		<td class="md"></td>
		<td><input type="text" id="db_password" name="db_password" value="<?php echo $tmp['db_password']?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['mysql_password']?>" /></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['create_database']?></td>
		<td class="md"></td>
		<td><input type="checkbox" class="noborder" name="create" <?php if ($tmp['create']==1) { ?> checked<?php } ?> /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['create_database']?>" /></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['tables_prefix']?></td>
		<td class="md"></td>
		<td><input type="text" size=7 name="db_prefix" value="<?php echo $tmp['db_prefix']?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['tables_prefix']?>" /></td>
	</tr>
</table>

</form>
<script type="text/javascript">

$(document).ready(function() {

$('.tooltip').powerTip({
	placement: 'n'
});

});
</script>

<?php
} //end if step==3

else if($step==4) {

?>
<form method="post" name="install" id="install" action="index.php?step=<?php echo $step?>">

<div id="nav">

	<div class="lfloat"><?php echo $lng['step']?> 4 <?php echo $lng['of']?> 6 : <?php echo $lng['database_charset']?></div>
	<div class="rfloat p5">
		<div class="next_btn ml10"><input name="Step4" type="submit" value="<?php echo $lng['next']?>" /></div>
	</div>

</div>

<div id="dmain">
<?php if($error!='') { ?>
<div class="error"><p><?php echo $error?></p></div>
<?php } ?>

<div class="subtitle"><?php echo $lng['database_charset'] ?></div>
<p><?php echo $lng['info']['db_charset']; ?></p>
<table cellpadding=0 cellspacing=0 width=90% id="nicetable" align="center" class="dcenter">
	<tr>
		<td class="lft"><?php echo $lng['database_charset']?></td>
		<td>
			<select name="db_charset" id="db_charset" onChange="onCharset()">
			<?php foreach($array_charsets as $charset) { 
				if(!$charset['Charset']) continue; ?>
				<option value="<?php echo $charset['Charset']; ?>" <?php if($charset['Charset']==$default_charset) echo "selected"; ?>><?php echo $charset['Charset'].' - '.$charset['Description'] ?></option>
			<?php } ?>
			</select></td>
	</tr>

	<tr>
		<td class="lft"><?php echo $lng['database_collation']?></td>
		<td>
			<select name="db_collation" id="db_collation">
			<?php foreach($array_collations as $collation) { ?>
				<option value="<?php echo $collation['Collation']; ?>" <?php if($collation['Default']=="Yes") echo "selected" ?>><?php echo $collation['Collation'] ?></option>
			<?php } ?>
			</select></td>
	</tr>

</table>

<div class="subtitle"><?php echo $lng['initial_data'] ?></div>
<p><?php echo $lng['info']['initial_data_set']?></p><br/>
<table cellpadding=0 cellspacing=0 width="90%" id="nicetable" align="center" class="dcenter">

	<tr>
		<td class="lft"><?php echo $lng['initial_data_set']?></td>
		<td>
			<select name="data_set">
				<option value="none"><?php echo $lng['none']; ?></option>
				<option value="general" selected="selected"><?php echo $lng['data-general']; ?></option>
				<option value="cars"><?php echo $lng['data-cars']; ?></option>
				<option value="estate"><?php echo $lng['data-estate']; ?></option>
				<option value="boats"><?php echo $lng['data-boats']; ?></option>
			</select>
		</td>
	</tr>

</table>

<div class="subtitle"><?php echo $lng['installed_languages'] ?></div>
<p><?php echo $lng['info']['installed_languages']?></p><br/>
<table cellpadding=0 cellspacing=0 width="90%" id="nicetable" align="center" class="dcenter">

	<tr>
		<td style="width: 150px"><?php echo $lng['languages']?></td>
		<td>	
			<table cellpadding=2 cellspacing=2 border=0>
			<tr>
			<td style="border: 0"><input type="checkbox" name="eng" checked="checked" />&nbsp;English&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="esp" />&nbsp;Spanish&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="french" />&nbsp;French&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="italian" />&nbsp;Italian&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="dutch" />&nbsp;Dutch&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="german" />&nbsp;German&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="portuguese" />&nbsp;Portuguese&nbsp;</td>
			
			</tr><tr>

			<td style="border: 0"><input type="checkbox" name="ru" />&nbsp;Russian&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="arabic" />&nbsp;Arabic&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="hebrew" />&nbsp;Hebrew&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="tr" />&nbsp;Turkish&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="ro" />&nbsp;Romanian&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="el" />&nbsp;Greek&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="pl" />&nbsp;Polish&nbsp;</td>

			</tr><tr>

			<td style="border: 0"><input type="checkbox" name="hr" />&nbsp;Croatian&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="ms" />&nbsp;Malay&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="lv" />&nbsp;Latvian&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="hu" />&nbsp;Hungarian&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="bg" />&nbsp;Bulgarian&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="afr" />&nbsp;Afrikaans&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="dan" />&nbsp;Danish&nbsp;</td>
			<td style="border: 0"><input type="checkbox" name="nor" />&nbsp;Norwegian&nbsp;</td>

			</tr></table>
		</td>
	</tr>

</table>

</form>

<?php
} //end if step==4

else if($step==5) {

?>
<form method="post" name="install" id="install" action="index.php?step=<?php echo $step?>">

<div id="nav">

	<div class="lfloat"><?php echo $lng['step']?> 5 <?php echo $lng['of']?> 6 : <?php echo $lng['site_information']?></div>
	<div class="rfloat p5">
		<div class="btn1 ml10"><input name="Step5" type="submit" value="<?php echo $lng['finish']?>" /></div>
	</div>

</div>

<div id="dmain">
<br />
<?php if($error!='') { ?>
<div class="error"><p><?php echo $error?></p></div>
<?php } ?>

<table cellpadding=0 cellspacing=0 id="nicetable" align=center class="dcenter">

	<tr>
		<td class="lt"><?php echo $lng['site_name']?></td>
		<td class="md"></td>
		<td><input type="text" size=40 name="site_name" value="<?php echo $tmp['site_name']?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo str_replace("::SCRIPT_TITLE::", $script_title ,$lng['info']['site_name']);?>" /></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['url']?></td>
		<td class="md">*</td>
		<td><input type="text" size=40 name="url" value="<?php echo $tmp['url']?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['url']?>" />
</td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['path']?></td>
		<td class="md">*</td>
		<td><input type="text" size=40 name="path" value="<?php echo $tmp['path']?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['path']?>" /></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['admin_email']?></td>
		<td class="md">*</td>
		<td><input type="text" size=30 name="admin_email" value="<?php echo $tmp['admin_email']?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['admin_email']?>" /></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['admin_username']?></td>
		<td class="md">*</td>
		<td><input type="text" name="admin_username" value="<?php echo $tmp['admin_username']?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['admin_username']?>" /></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['admin_password']?></td>
		<td class="md">*</td>
		<td><input type="text" name="password" value="<?php echo $tmp['password']?>" /><img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['admin_password']?>" /></td>
	</tr>

	<tr>
		<td class="lt"><?php echo $lng['confirm_password']?></td>
		<td class="md"></td>
		<td><input type="text" name="password1" value="" />	<img src="images/info.png" class="info_img tooltip" title="<?php echo $lng['info']['confirm_password']?>" /></td>
	</tr>

</table>
</form>
<br />

<script type="text/javascript">

$(document).ready(function() {

$('.tooltip').powerTip({
	placement: 'n'
});

});
</script>

<?php
} //end if step==5
else if ($step==6) {

global $db;
global $crt_lang;
$crt_lang = "eng";
$db = new db_mysql();

// adding languages
require_once "../classes/config/languages_config.php";
require_once "../classes/settings.php";
require_once "../classes/categories.php";
require_once "../classes/custom_pages.php";
require_once "../classes/depending_fields.php";
require_once "../classes/config/depending_fields_config.php";
require_once "../classes/fields.php";
require_once "../classes/info.php";
require_once "../classes/mail_templates.php";
require_once "../classes/packages.php";
require_once "../classes/priorities.php";
require_once "../classes/featured_plans.php";
require_once "../classes/rss.php";
require_once "../classes/groups.php";
require_once "../include/cache.php";

$lang = new languages_config;
$array_lang = array( 
	array ("id"=>"eng", "name"=>"English", "image"=>"english.gif", "code"=>"en", "dir"=>"ltr"),
	array ("id"=>"esp", "name"=>"Spanish", "image"=>"spanish.gif", "code"=>"es", "dir"=>"ltr" ),
	array ("id"=>"french", "name"=>"French", "image"=>"french.gif", "code"=>"fr", "dir"=>"ltr"),
	array ("id"=>"italian", "name"=>"Italian", "image"=>"italian.gif", "code"=>"it", "dir"=>"ltr"),
	array ("id"=>"dutch", "name"=>"Dutch", "image"=>"dutch.gif", "code"=>"nl", "dir"=>"ltr"),
	array ("id"=>"german", "name"=>"German", "image"=>"german.gif", "code"=>"de", "dir"=>"ltr"),
	array ("id"=>"portuguese", "name"=>"Portuguese", "image"=>"portuguese.gif", "code"=>"pt", "dir"=>"ltr"),
	array ("id"=>"ru", "name"=>"Russian", "image"=>"russian.gif", "code"=>"ru", "dir"=>"ltr"),
	array ("id"=>"arabic", "name"=>"Arabic", "image"=>"sa.gif", "code"=>"ar", "dir"=>"rtl"),
	array ("id"=>"hebrew", "name"=>"Hebrew", "image"=>"hebrew.gif", "code"=>"he", "dir"=>"ltr"),
	array ("id"=>"tr", "name"=>"Turkish", "image"=>"turkish.gif", "code"=>"tr", "dir"=>"ltr"),
	array ("id"=>"ro", "name"=>"Romanian", "image"=>"romanian.gif", "code"=>"ro", "dir"=>"ltr"),
	array ("id"=>"greek", "name"=>"Greek", "image"=>"greek.gif", "code"=>"el", "dir"=>"ltr"),
	array ("id"=>"polish", "name"=>"Polish", "image"=>"polish.gif", "code"=>"pl", "dir"=>"ltr"),
	array ("id"=>"hr", "name"=>"Croatian", "image"=>"croatian.gif", "code"=>"hr", "dir"=>"ltr"),
	array ("id"=>"ms", "name"=>"Malay", "image"=>"malay.gif", "code"=>"ms", "dir"=>"ltr"),
	array ("id"=>"lv", "name"=>"Latvian", "image"=>"latvian.gif", "code"=>"lv", "dir"=>"ltr"),
	array ("id"=>"hu", "name"=>"Hungarian", "image"=>"hungarian.gif", "code"=>"hu", "dir"=>"ltr"),
	array ("id"=>"bg", "name"=>"Bulgarian", "image"=>"bulgarian.gif", "code"=>"bg", "dir"=>"ltr"),
	array ("id"=>"afr", "name"=>"Afrikaans", "image"=>"afrikaans.gif", "code"=>"af", "dir"=>"ltr"),
	array ("id"=>"danish", "name"=>"Danish", "image"=>"danish.gif", "code"=>"da", "dir"=>"ltr"),
	array ("id"=>"nor", "name"=>"Norwegian", "image"=>"norwegian.gif", "code"=>"no", "dir"=>"ltr")
	);


$order_no = 1;

foreach($array_lang as $l) {

	if($l['id']==$_SESSION['default_lang']) $default = 1; else $default = 0;

	if(isset($_SESSION['languages'][$l['id']]) && $_SESSION['languages'][$l['id']]) $enabled = 1; else $enabled = 0;

	$sql="insert into ".TABLE_LANGUAGES." set `id`= '".$l['id']."', `name` = '".$l['name']."', `image`='".$l['image']."', `default` = $default, `enabled` = $enabled, `order_no` = $order_no, `code` = '".$l['code']."', `direction`= '".$l['dir']."'";

	$db->query($sql);

	if (!$default && $enabled)  $lang->addLanguage($l['id'], $_SESSION['default_lang']);

	$order_no++;

}

global $crt_lang;
$crt_lang = $_SESSION['default_lang'];
$sett = new settings();
$settings = $sett->getSettings();

?>

<div id="nav">

	<?php echo $lng['step']?> 6 <?php echo $lng['of']?> 6 : <?php echo str_replace("::SCRIPT_TITLE::", $script_title ,$lng['script_installed']) ?>

</div>

<div id="dmain">

<div class="dcenter btn1 m10"><input type="button" value="<?php echo $lng['view_site']?>" onclick="window.location='../index.php'" /></div>

<div class="info"><p><?php echo $lng['info']['security_notice']?></p></div>

<br>
<p><?php echo $lng['info']['script_installed']?></p>
<br />
<table cellpadding=0 cellspacing=0 width=70% id="nicetable" align=center class="dcenter">

	<tr>
		<td class="lft"><?php echo $lng['site_name']?></td>
		<td><?php echo $settings['site_name']?></div></td>
	</tr>

	<tr>
		<td class="lft"><?php echo $lng['admin_email']?></td>
		<td><?php echo $settings['admin_email']?></td>
	</tr>

	<tr>
		<td class="lft"><?php echo $lng['admin_username']?></td>
		<td><?php echo $settings['admin_username']?></td>
	</tr>

	<tr>
		<td class="lft"><?php echo $lng['admin_password']?></td>
		<td><?php echo $_SESSION['admin_password']?></td>
	</tr>

</table>

<br />

<?php

unset($_SESSION);

} //end if step==6

function getMod($file_path) {

	$base=base_convert(fileperms($file_path), 10, 8);
	$len=strlen($base);
	$start=$len-3;
	$val = substr($base, $start);
	return $val;

}

/*function clean($str) {

	$clean_str = stripslashes (trim($str));
	return $clean_str;
}

function escape($str) {

	$clean_str = ( get_magic_quotes_gpc ()) ? mysql_real_escape_string(stripslashes(trim($str))) : mysql_real_escape_string(trim($str));
	return $clean_str;
}*/

function emptyCache() {
	
	global $config_abs_path;
	$tmp_dir = $config_abs_path."/temp";
	$files = dir($tmp_dir);
	while ($file = $files->read()) {
		if($file && $file!='.' && $file!='..' && $file!=".htaccess" && $file!="index.html") {
			$fis = $tmp_dir.'/'.$file;
			@unlink($fis);
		}
	} closedir($files->handle);
}

function emptyAdminCache() {
	
	global $config_abs_path;
	$tmp_dir = $config_abs_path."/admin/temp";
	$files = dir($tmp_dir);
	while ($file = $files->read()) {
		if($file && $file!='.' && $file!='..' && $file!=".htaccess" && $file!="index.html") {
			$fis = $tmp_dir.'/'.$file;
			@unlink($fis);
		}
	} closedir($files->handle);
}

/*function getExtension($str) {
	$i = strrpos($str,".");
	if (!$i) { return ""; }
	$l = strlen($str) - $i;
	$ext = substr($str,$i+1,$l);
	$ext=strtolower($ext);
	return $ext;
}
*/
?>
    </div>
    <!-- end: #main -->

    <!-- begin: #footer -->
	<div class="footer">Copyright &copy; https://www.oxyclassifieds.com 2006-<?php echo $year?></div>
	<div class="bottom-page">&nbsp;</div>
    <!-- end: #footer -->

</div>
</body>
</html>
