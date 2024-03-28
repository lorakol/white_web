<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

  class auth_provider {
  
  var $auth_provider;
  var $error;  
  var $info;
  var $openid;

    var $name;
    var $email;

  // Openid
  var $identity;
  var $attributes;

public function __construct()
{
	$this->openid = 0; 
	$this->name=""; 
	$this->email=""; 
	$conn = new connect;
	$this->connect_settings = $conn->getSettings();
 }

   function __destructor() {}
   function setProvider($provider) {
	$this->auth_provider = $provider;
	return 1;
   }

    function setError($error) {
	$this->error .= $error;
    }

    function setInfo($info) {
	$this->info = $info;
    }

    function getError() {
	return $this->error;
    }

    function getInfo() {
	return $this->info;
    }

    function setAttributes($att) {
	if($this->error) return 0;
	$this->attributes = $att;
    }

    function setOpenID($val) {
	$this->openid=$val;
    }

    function isOpenID() {
	return $this->openid;
    }

    function setIdentity($i) {

		$this->identity = $i;
   }
   function checkAndRegisterUser () {
	if($this->error) return 0;
	global $db;
	$exists = $db->fetchAssoc("select `identity`, `auth_provider` from ".TABLE_USERS." where email like '".$this->email."'");

	// register if does not exist
	if(!$exists) {
	    $timestamp = date("Y-m-d H:i:s");
	    $group_id=$this->connect_settings['group_id'];
		$contact_str="";
		if($this->connect_settings['contact_field']) $contact_str = ", `".$this->connect_settings['contact_field']."`='".$this->name."'";
	    $ip=getRemoteIp();
	    $db->query("insert into ".TABLE_USERS." set `username`='".$this->name."', `identity`='".$this->identity."'".$contact_str.", `email`='".$this->email."', `auth_provider`='".$this->auth_provider."', `ip`='$ip', `registration_date`='$timestamp', `group`='$group_id', `active`=1, `password` = '".generate_random()."'");
	    
	    // add credits 
	    global $config_abs_path;
	    require_once $config_abs_path."/classes/users.php";
	    $usr = new users();
	    $user_id = $db->insertId();
	    $usr->addCreditsForGroup($user_id, $group_id);

	    require_once $config_abs_path."/classes/slugs.php";
		$slug = new slugs();
		$cname="";
		if(isset($this->name) && $this->name) $cname.=$this->name;
		$slug->addUser($user_id, $cname);
	    
	} else {

		if( (isset($exists['identity']) && $exists['identity'] != $this->identity) || (isset($exists['auth_provider']) && $exists['auth_provider'] != $this->auth_provider)) 
			$db->query("update ".TABLE_USERS." set `identity`='".$this->identity."', `auth_provider`='".$this->auth_provider."' where `email` like '".$this->email."'");

	}

   }

    function verify() {

	if($this->error) return 0;
	global $lng_connect;

	// don't check if the user is already registered
	global $db;
	$data = $db->fetchAssoc("select `email`, `{$this->connect_settings['contact_field']}` from ".TABLE_USERS." where `identity`='{$this->identity}' and `auth_provider`='{$this->auth_provider}'");
	if($data) { 
		$this->email = $data['email']; 
		$this->name = $data[$this->connect_settings['contact_field']];
		return 1;
	}

	if($this->isOpenID()) $result = $this->verifyOpenID();
	else if($this->auth_provider=="google") $result = $this->verifyGoogle();
	else $result = $this->verifyFacebook();

	if(!$result) $this->setError($lng_connect['error_while_logging']);
	
	return $result;
    
    }
    
    function verifyOpenID() {
	global $lng_connect;
	if(!$this->identity || !$this->attributes['contact/email'] || !( $this->attributes['namePerson/first'] ||  $this->attributes['namePerson/last'])) { $this->setError($lng_connect['oid_required_info_missing']); return 0; }
	return 1;
    }

    function verifyFacebook() {
	global $lng_connect;
	if(!isset($_POST['identity']) || !$_POST['identity'] || !isset($_POST['email']) || !$_POST['email'] || !isset($_POST['name']) || !$_POST['name']) { $this->setError($lng_connect['oid_required_info_missing']); return 0;}
	return 1;
	
    }

    function verifyGoogle() {
	global $lng_connect;
	if(!isset($_POST['identity']) || !$_POST['identity'] || !isset($_POST['email']) || !$_POST['email'] || !isset($_POST['name']) || !$_POST['name']) { $this->setError($lng_connect['oid_required_info_missing']); return 0;}
	return 1;
	
    }

    function getData() {

	if($this->isOpenID()) $this->getOpenIDData();
	else $this->getFacebookData();
	
	$this->checkAndRegisterUser();

    }

    function getOpenIDData() {

	if($this->attributes['namePerson/first'] && $this->attributes['namePerson/last']) $this->name = escape($this->attributes['namePerson/first'] ." ".  $this->attributes['namePerson/last']);
	if($this->attributes['contact/email']) $this->email = escape($this->attributes['contact/email']);
    }

    // facebook and google
    function getFacebookData() {
    
	$this->identity = escape($_POST['identity']);
	$this->name = escape($_POST['name']);
	$this->email = escape($_POST['email']);

    }


    function authenticate() {
	global $lng_connect;
	$auth = new auth;
	if($auth->checkIdentity($this->name,$this->identity)) {
	    $ip=getRemoteIp();
	    $auth->saveIdentityLogin($ip, $this->name, $this->auth_provider, $this->identity);
	    $this->setInfo($lng_connect['logged_in']);
	} else { $this->setError($lng_connect['invalid_login']); }
    }

  }
?>
