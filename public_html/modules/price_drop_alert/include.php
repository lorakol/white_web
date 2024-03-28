<?php

global $crt_lang;
if(file_exists($config_abs_path."/modules/price_drop_alert/lang/".$crt_lang.".php"))
	require_once $config_abs_path."/modules/price_drop_alert/lang/".$crt_lang.".php";
else require_once $config_abs_path."/modules/price_drop_alert/lang/eng.php";
global $lng_price_drop_alert;

?>