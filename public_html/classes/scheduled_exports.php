<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class scheduled_exports {

	var $error;
	var $tmp;

	public function __construct()
	{
	
	}

	function delete($id=0) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$res_del=$db->query('delete from '.TABLE_SCHEDULED_EXPORTS.' where `id`="'.$id.'"');

	}

	function Enable($id) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$res=$db->query('update '.TABLE_SCHEDULED_EXPORTS.' set `active` = 1 where `id`="'.$id.'"');
		return 1;

	}

	function Disable($id) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$res=$db->query('update '.TABLE_SCHEDULED_EXPORTS.' set `active` = 0 where `id`="'.$id.'"');
		return 1;

	}

	function getScheduledExport($id) {

		global $db, $settings;
		$row=$db->fetchAssoc("select * from ".TABLE_SCHEDULED_EXPORTS." where id=".$id."");

		if(isset($row['user_id']) && $row['user_id']) {
			if($settings['enable_username'])
				$row['username'] = users::getUsername($row['user_id']);
			else 
				$row['username'] = users::getEmail($row['user_id']);
		}	
		return $row;

	}

	function getAll() {

		global $db, $settings;
		$array=$db->fetchAssocList("select * from ".TABLE_SCHEDULED_EXPORTS);

		$i = 0;
		foreach($array as $a) {
			if(isset($a['user_id']) && $a['user_id']) {
				if($settings['enable_username'])
					$array[$i]['username'] = users::getUsername($array[$i]['user_id']);
				else 
					$array[$i]['username'] = users::getEmail($array[$i]['user_id']);
				$i++;
			}	
		}
		return $array;

	}


	function getError() {
	
		return $this->error;

	}

	function addError($str) {

		$this->error.=	$str;

	}

	function setError($str) {

		$this->error=$str;

	}

	function getTmp() {
	
		return $this->tmp;

	}

	function correctKey($id, $key) {

		global $db;
		$exists = $db->fetchRow("select `id` from ".TABLE_SCHEDULED_EXPORTS." where `id`='$id' and `key` like '$key' and `active`=1");
		return $exists;

	}

	function check_form ($id='') {

		global $db;
		global $lng;
		$this->error='';
		$this->tmp=array();
		global $languages;

		global $config_demo;
		if($config_demo==1) $this->addError($lng['general']['errors']['demo'].'<br />');

		if(!$_POST['name']) $this->addError($lng['ie']['name_missing'].'<br />');

		if($_POST['save_to']=='folder' && !$_POST['folder']) $this->addError($lng['ie']['folder_missing'].'<br />');

		if($_POST['save_to']=='ftp' && (!$_POST['ftp_server'] || !$_POST['ftp_login'] || !$_POST['ftp_password'])) $this->addError($lng['ie']['ftp_info_missing'].'<br />');

		if($this->getError()!='')
		{
			if($id) $this->tmp['id']=$id;

			$array = array("name", "type", "format", "user_id", "username", "template", "category_id", "package_id", "group", "latest_days", "save_to", "folder", "ftp_server", "ftp_login", "ftp_password", "ftp_path");
			foreach($array as $a) {
				if(isset($_POST[$a])) $this->tmp[$a]=$_POST[$a]; else $this->tmp[$a]='';
			}

			$checkbox_fields_array = array("add_fields_at_top", "active");
			foreach($checkbox_fields_array as $field)
				$this->tmp[$field] = checkbox_value($field);

		}

		return 1;
	}

	function add() {

		global $db;
		$this->clean=array();
		$this->check_form();
		if($this->getError()!='') return 0;

		$fields_array_zero = array("category_id", "package_id", "group", "latest_days", "template");
		$str="";
		foreach ($fields_array_zero as $field) {
			if(isset($_POST[$field])) $this->clean[$field] = escape($_POST[$field]);
			else $this->clean[$field] = 0;
			$str.=", `$field`='{$this->clean[$field]}'";
		}

		$fields_array_null = array("name", "type", "format", "save_to", "folder", "ftp_server", "ftp_login", "ftp_password", "ftp_path");
		$str="";
		foreach ($fields_array_null as $field) {
			if(isset($_POST[$field])) $this->clean[$field] = escape($_POST[$field]);
			else $this->clean[$field] = '';
			$str.=", `$field`='{$this->clean[$field]}'";
		}

		$checkbox_fields_array = array("add_fields_at_top", "active");

		foreach($checkbox_fields_array as $field) {
			$this->clean[$field] = checkbox_value($field);
			$str.=", `$field`='{$this->clean[$field]}'";
		}

		$this->clean['user_id'] = 0;
		if(isset($_POST['user_id']) && $_POST['user_id']) $this->clean['user_id'] = escape($_POST['user_id']);
		else { 
			if(isset($_POST['username']) && $_POST['username']) {
				global $settings;
				if($settings['enable_username'])
					$this->clean['user_id'] = users::getUserId($_POST['username']);
				else 
				$this->clean['user_id'] = users::getIdByEmail($_POST['username']);
			}	
		}
		$str.=", `user_id`='{$this->clean['user_id']}'";

		$key=generate_random();

		$res=$db->query("insert into ".TABLE_SCHEDULED_EXPORTS." set `key` = '$key' ".$str);

		return 1;

	}

	function edit($id) {

		global $db;
		$this->clean=array();
		$this->check_form($id);
		if($this->getError()!='') return 0;

		$fields_array_zero = array("category_id", "package_id", "group", "latest_days", "template");
		$str="";
		foreach ($fields_array_zero as $field) {
			if(isset($_POST[$field]) && $_POST[$field]) $this->clean[$field] = escape($_POST[$field]);
			else $this->clean[$field] = 0;
			$str.=", `$field`='{$this->clean[$field]}'";
		}

		$fields_array_null = array("name", "type", "format", "save_to", "folder", "ftp_server", "ftp_login", "ftp_password", "ftp_path");
		foreach ($fields_array_null as $field) {
			if(isset($_POST[$field])) $this->clean[$field] = escape($_POST[$field]);
			else $this->clean[$field] = '';
			$str.=", `$field`='{$this->clean[$field]}'";
		}

		$checkbox_fields_array = array("add_fields_at_top", "active");

		foreach($checkbox_fields_array as $field) {
			$this->clean[$field] = checkbox_value($field);
			$str.=", `$field`='{$this->clean[$field]}'";
		}

		$this->clean['user_id'] = 0;
		if(isset($_POST['user_id']) && $_POST['user_id']) $this->clean['user_id'] = escape($_POST['user_id']);
		else { 
			if(isset($_POST['username']) && $_POST['username']) {
				global $settings;
				if($settings['enable_username'])
					$this->clean['user_id'] = users::getUserId($_POST['username']);
				else 
				$this->clean['user_id'] = users::getIdByEmail($_POST['username']);
			}	
		}
		$str.=", `user_id`='{$this->clean['user_id']}'";

		$str = trim($str, ",");
		$res=$db->query("update ".TABLE_SCHEDULED_EXPORTS." set ".$str." where id='$id'");
		
		return 1;

	}
	
	function autoExport($id) {

		global $db;
		global $lng;
		global $config_abs_path;

		$task = $this->getScheduledExport($id);

		$ie = new import_export();
		$ie->setScheduled(1);
		$ie->setShowFieldNames($task['add_fields_at_top']);

		$ie->setData($task['type']);
		$ie->setType($task['format']);
		if($task['template']) $ie->setTemplate($task['template']);
		
		
		if($task['type']=="ad") { 
			$table_name=TABLE_ADS; 
			$where=" where ".$table_name.".`active`=1 ";
			$first=1;
			if($task['category_id']) { 
				$where.=" and `category_id` =  {$task['category_id']}";
				$first = 0;
			}	
			if($task['package_id']) { 
				$where.=" and `package_id` =  {$task['package_id']}";
				$first = 0;
			}	
  			if($task['user_id']) { 
				$where.=" and `user_id` =  {$task['user_id']}";
				$first = 0;
			}	
			if($task['latest_days']>0) {
				$where.=" and ";
				
				$current_date = date("Y-m-d");

				$dn1 = $task['latest_days']+1;
				$date_x_days_before_start = $db->fetchRow("select date_sub('$current_date', INTERVAL $dn1 DAY)");

				$where .=" `date_updated`  > '$date_x_days_before_start' ";
				$first = 0;
			}
		}	
		else { 
			$table_name=TABLE_USERS;
			$where=" where ".$table_name.".`active`=1 ";
			if($task['group']) { 
				$where.=" and `group` =  {$task['category_id']}";
				$first = 0;
			}	
			
			if($task['latest_days']>0) {
				$where.=" and ";
				
				$current_date = date("Y-m-d");

				$dn1 = $task['latest_days']+1;
				$date_x_days_before_start = $db->fetchRow("select date_sub('$current_date', INTERVAL $dn1 DAY)");

				$where .=" `registration_date`  > '$date_x_days_before_start' ";
				$first = 0;
			}
			
		}

		$file_name = $ie->scheduledExport();

		if($task['save_to']=="folder")
			$ie->setExportPath($task['folder']);
		
		$ie->setQueryCondition($where);
		
		$file_name = $ie->scheduledExport();
			
		if($task['save_to']=="ftp")
		{

			// set up a connection
			$conn_id = ftp_connect($task['ftp_server']) or die("Couldn't connect to ".$task['ftp_server']); 

			// !!!!!! if(!$conn_id) log_it... 

			// login with username and password
			if($result = ftp_login($conn_id, $task['ftp_login'], $task['ftp_password'])) {

				global $config_abs_path;
				$local_file_name = $config_abs_path."/temp/".$file_name;
				$remote_file_name = $task['ftp_path']."/".$file_name;
				//echo "Remote file: ".$remote_file_name."\nLocal file:".$local_file_name."\n";
				if (ftp_put($conn_id, $remote_file_name, $local_file_name, FTP_BINARY)) {
					echo "File uploaded";
				} else {
					echo "Could not upload file";
				}

			} else {
				// log it !!!!!!!
				echo "Could not login with the provided username and password!";
			}

			// close the connection
			ftp_close($conn_id);
		}

		// remove temporary file !!!!!!! 
		$this->setError($ie->getError());
		//echo $this->error;// !!!!!!!

		return $result;

	}


}

?>