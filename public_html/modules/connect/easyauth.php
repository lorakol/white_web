<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

    require_once "../../include/include.php";
    require_once "../../modules/connect/classes/connect.php";

	// include language file
	global $crt_lang;
	$lang_file = $config_abs_path."/modules/connect/lang/$crt_lang.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/connect/lang/eng.php";
	require_once $lang_file;

	my_session_start();
	// if already logged in exit
	$auth = new auth();
	if($auth->loggedIn() || $auth->adminLoggedIn()) exit(0);
	$ip=getRemoteIp();


	global $config_abs_path;
	require_once $config_abs_path."/modules/connect/auth_provider.php";
	$ap = new auth_provider();

	$auth_provider = $_GET['auth'];
	$conn = new connect;
	$connect_settings = $conn->getSettings();
	if(!$connect_settings['enable_'.$auth_provider.'_login']) exit(0);
	$ap->setProvider($auth_provider);

	switch($auth_provider){
		case "facebook":
		case "google":
		break;
		case "openid":
		    $ap->setOpenID(1);
		break;
	}

	global $lng_connect;
	// if openid
	if($ap->isOpenID()) { 
		require_once $config_abs_path."/modules/connect/external/openid.php";
		$openid = new LightOpenID;
		// authentication was canceled
		if($openid->mode == 'cancel') { $error = $lng_connect['auth_canceled']; $ap->setError($error);}
		try {
			$result = $openid->validate();
			$attr = $openid->getAttributes();
			$identity = $openid->identity;

			$ap->setAttributes($attr);
			$ap->setIdentity($identity);

		} catch (Exception $e) {
			$ap->setError($e->getMessage());
		}
	} else {
		$ap->setIdentity($_POST['identity']);
	}

	if($ap->verify())
	{
		$data = $ap->getData();
		$ap->authenticate();
	}

if($ap->isOpenID()) {

$info = $ap->getInfo();
$error = $ap->getError();
global $appearance_settings;
$template_path = $config_live_site."/templates/".$appearance_settings['template']."/";

?>

<link href="<?php echo $template_path ?>css/style.css" rel="stylesheet" type="text/css"/>
<div style="text-align: center">

<?php if($auth_provider=="google") { ?>
<img src="<?php echo $template_path; ?>modules/connect/images/google_box.png" /><br/>
<?php } else { ?>
<img src="<?php echo $template_path; ?>modules/connect/images/openid_box.png" /><br/>
<?php 
} 
if($info) { ?><div class="info"><p><?php echo $info ?></p></div><?php }
if($error) {
?>
<div class="error"><p><?php echo $error ?></p></div>
<?php } ?>
</div>

<script type="text/javascript">
window.setTimeout(function() { window.close(); }, 2000);
</script>

<?php } ?>
