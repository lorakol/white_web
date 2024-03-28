<?php

global $crt_lang;
if(file_exists($config_abs_path."/modules/claim_listing/lang/".$crt_lang.".php"))
	require_once $config_abs_path."/modules/claim_listing/lang/".$crt_lang.".php";
else require_once $config_abs_path."/modules/claim_listing/lang/eng.php";
global $lng_claim_listing;

?>