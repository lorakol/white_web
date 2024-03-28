<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class auto_renew {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."ar_settings";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings() {

		global $db;
		$ev_settings = $db->fetchAssoc("select * from ".$this->settings_table);

		return $ev_settings;

	}

	function saveSettings() {

		global $config_demo, $lng;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $languages;
		$str_update = "";

		if(isset($_POST['days']) && is_numeric($_POST['days']))

			$this->clean['days'] = $_POST['days'];
			
		else 
			$this->clean['no']=2;
			
		$str_update.=" `days` = '".$this->clean['days']."'";

		if(isset($_POST['choose_plans']) && $_POST['choose_plans']=="choose")
		{
			$this->clean['plans']='';
			$i=0;
			while (isset($_POST['plans'][$i]) ){
				$plan=escape($_POST['plans'][$i]);
				if($i) $this->clean['plans'].=',';
				$this->clean['plans'].=$plan;
				$i++;
			}
		} else $this->clean['plans']='0';

		$str_update.=", `plans` ='{$this->clean['plans']}' ";
		
		$db->query("update `".$this->settings_table."` set $str_update");

		return 1;
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

	function periodic() {

	    $ar_settings = $this->getSettings();
	    $days = $ar_settings['days'];
	    $plans = $ar_settings['plans'];

	    global $db;

		$current_date = date("Y-m-d");

		$date_x_days_ago = $db->fetchRow("select date_sub('$current_date', INTERVAL $days DAY)");

		$sql_plans="";
		if($plans!='0') $sql_plans=" and `package_id` in($plans)";
		
		$result=$db->query("select ".TABLE_ADS.".id, `package_id` from ".TABLE_ADS." where ".TABLE_ADS.".active=0 and date_expires < '$date_x_days_ago'".$sql_plans);

		$l = new listings();
		
		while($row = $db->fetchAssocRes($result)) {

			$id = $row['id'];
			$pkg = $row['package_id'];
			//echo "Renewing ".$id." from ".$pkg."<br/>";
			$l->renew($id);

		}
		
	    return;
	
	}
	
}
?>
