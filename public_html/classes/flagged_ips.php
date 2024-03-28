<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class flagged_ips {

	public function __construct()
	{
	
	}

	function delete($id) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		if(!$id) return;
		
		$res_del=$db->query('delete from '.TABLE_FLAGGED_IPS.' where `id`="'.$id.'"');
		return 1;

	}

	function deleteIP($ip) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$res_del=$db->query('delete from '.TABLE_FLAGGED_IPS.' where `ip`="'.$ip.'"');
		return 1;

	}

	function deleteFromWhitelist($id){

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		if(!$id) return;
		$res_del=$db->query('delete from '.TABLE_WHITELIST_IPS.' where `id`="'.$id.'"');
		return 1;

	}

	function searchIPs($post_array, $start_from, $no_per_page) {

		global $db;
		global $appearance_settings;
		$date_format=$appearance_settings["date_format_long"];

		$where='';
		if(isset($post_array['ip']) && $post_array['ip']) $where=" where `ip` like '{$post_array['ip']}'";
		if(isset($post_array['info']) && $post_array['info']) { 
			if($where=='')
				$where=" where `info` like '%{$post_array['info']}%'";
			else $where.=" and `info` like '%{$post_array['info']}%'";
			
		}
		
		$array_ip=$db->fetchAssocList("select * from ".TABLE_FLAGGED_IPS.$where." order by `id` desc limit ".$start_from.", ".$no_per_page);
		$i = 0;
		foreach($array_ip as $row) {
			$array_ip[$i]['info'] = cleanStr($row['info']);
			$i++;
		}
		
		return $array_ip;

	}

	function getNo($post_array) {

		global $db;

		$where='';
		if(isset($post_array['ip']) && $post_array['ip']) $where=" where `ip` like '{$post_array['ip']}'";
		if(isset($post_array['info']) && $post_array['info']) { 
			if($where=='')
				$where=" where `info` like '%{$post_array['info']}%'";
			else $where.=" and `info` like '%{$post_array['info']}%'";
			
		}

		$no=$db->fetchRow('select count(*) from '.TABLE_FLAGGED_IPS.$where);
		return $no;

	}

	function searchWhitelistIPs($post_array, $start_from, $no_per_page) {

		global $db;

		$where='';
		if(isset($post_array['ip']) && $post_array['ip']) $where=" where `ip` like '{$post_array['ip']}'";
		if(isset($post_array['info']) && $post_array['info']) { 
			if($where=='')
				$where=" where `info` like '%{$post_array['info']}%'";
			else $where.=" and `info` like '%{$post_array['info']}%'";
			
		}
		
		$array_ip=$db->fetchAssocList("select * from ".TABLE_WHITELIST_IPS.$where." order by `id` desc limit ".$start_from.", ".$no_per_page);
		$i = 0;
		foreach($array_ip as $row) {
			$array_ip[$i]['info'] = cleanStr($row['info']);
			$i++;
		}
		
		return $array_ip;

	}

	function getNoWhitelistIPs() {

		global $db;

		$where='';
		if(isset($post_array['ip']) && $post_array['ip']) $where=" where `ip` like '{$post_array['ip']}'";
		if(isset($post_array['info']) && $post_array['info']) { 
			if($where=='')
				$where=" where `info` like '%{$post_array['info']}%'";
			else $where.=" and `info` like '%{$post_array['info']}%'";
			
		}

		$no=$db->fetchRow('select count(*) from '.TABLE_WHITELIST_IPS.$where);
		return $no;

	}

	function add($str, $info) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$ip=escape($str);
		$info=escape($info);

		if($this->checkIfWhitelisted($ip)) return 0;
		if( flagged_ips::isFlagged($ip) ) return 1;

		$res=$db->query("insert into ".TABLE_FLAGGED_IPS." set `ip`= '$ip', `info`='$info'");
		return 1;

	}

	function addBulk($str, $info) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$word_array = explode('|', $str);
		$count_word = count($word_array);
		for($i=0;$i<$count_word;$i++)
		{
			$ip=trim($word_array[$i]);
			if($ip=='') continue;
			if(!validator::valid_ip($ip)) continue;
			$this->add($ip, $info);
		}
	}

	function addToWhitelist($str, $info='') {

		global $db;
		global $config_demo;
		if($config_demo==1) return;
	
		$ip=escape($str);
		$info = escape($info);
		$whitelisted = $this->checkIfWhitelisted($ip);
		if(!$whitelisted) $db->query("insert into ".TABLE_WHITELIST_IPS." set `ip`= '$ip', `info`='$info'");
		$db->query("delete from ".TABLE_FLAGGED_IPS." where `ip` like '$ip'");
		$db->query("delete from ".TABLE_BLOCKED_IPS." where `ip` like '$ip'");
		return 1;

	}

	function addBulkToWhitelist($str, $info) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$word_array = explode('|', $str);
		$count_word = count($word_array);
		for($i=0;$i<$count_word;$i++)
		{
			$ip=trim($word_array[$i]);
			if($ip=='') continue;
			if($this->checkIfWhitelisted($ip)) continue;
			if(!validator::valid_ip($ip)) continue;
			$this->addToWhitelist($ip, $info);
		}
	}

	function checkIfWhitelisted($ip){
	
		global $db;
		$res=$db->query("select * from ".TABLE_WHITELIST_IPS." where `ip` like '$ip'");
		return $db->numRows($res);
	    
	
	}
	
	static function isFlagged($ip) {
		
		global $db;

		$res=$db->query("select * from ".TABLE_FLAGGED_IPS." where `ip` like '$ip'");
		return $db->numRows($res);
		
	}

	function Block($ip) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;
	
		$ip=escape($ip);
		$info = $db->fetchRow("select `info` from ".TABLE_FLAGGED_IPS." where `ip` like '$ip'");
		$whitelisted = $this->checkIfWhitelisted($ip);
		if(!$whitelisted) $db->query("insert into ".TABLE_BLOCKED_IPS." set `ip`= '$ip', `info`='$info'");

		$db->query("delete from ".TABLE_FLAGGED_IPS." where `ip` like '$ip'");
		return 1;

	}
}
?>
