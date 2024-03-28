<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class meta_extension {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."meta_extension";

	}

	function initTemplatesVals($smarty) {

	}

	function add($id='') {

		global $lng;
		global $lng_meta_extension;
		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $lng_meta_extension;

		$array = array("title", "meta_keywords", "meta_description");
		foreach($array as $a)
			if(isset($_POST[$a])) $clean[$a] = escape($_POST[$a]); else $clean[$a]='';

		$clean['search_values'] = '';
		$clean['search_values_ext'] = '';
		if(isset($_POST['category']) && $_POST['category']) { 
			$clean['search_values'] = "category=".escape($_POST['category']);
			$clean['search_values_ext'] = $lng['categories']['category']." = ".cleanStr(categories::getName(escape($_POST['category'])));
		}

		global $keyword_name;
		if((isset($_POST['choose_word']) && $_POST['choose_word']==1) && (isset($_POST['word']) && $_POST['word'])) {
			if($clean['search_values']) { $clean['search_values'].="|"; $clean['search_values_ext'].=", "; }
			$clean['search_values'] .= $keyword_name."=".escape($_POST['word']);
			$clean['search_values_ext'] .= $lng_meta_extension['keyword']." = ".escape($_POST['word']);
		}
		
		$fields = common::getCachedObject("base_listing_fields");

		$array_no_search = array("image", "file", "google_maps", "youtube", "checkbox_group", "radio_group");
		foreach($fields as $f) {

			if(in_array($f['type'], $array_no_search)) continue;
			if($f['type']=="depending") {

				for($i=1; $i<=4; $i++) {

					if($f['depending']['no'] < $i) break;
					if((isset($_POST['choose_'.$f['depending']['caption'.$i]]) && $_POST['choose_'.$f['depending']['caption'.$i]]==1) && ( isset($_POST[$f['depending']['caption'.$i]]) && $_POST[$f['depending']['caption'.$i]]) )  { 
						if($clean['search_values']) { 
							$clean['search_values'].="|";
							$clean['search_values_ext'].=", ";
						}
						$clean['search_values'] .= $f['depending']['caption'.$i]."=".escape($_POST[$f['depending']['caption'.$i]]);
						$clean['search_values_ext'] .= $f['depending']['name'.$i]." = ".escape($_POST[$f['depending']['caption'.$i]]);
					}
				}
			}
			else {
				if($f['type']=="checkbox") {
					if($_POST[$f['caption']] != -1) {
						if($clean['search_values']) { 
							$clean['search_values'].="|";
							$clean['search_values_ext'].=", ";
						}
						$clean['search_values'] .= $f['caption']."=".escape($_POST[$f['caption']]);
						if($_POST[$f['caption']]==1) $clean['search_values_ext'] .= $f['name']." = ".$lng_meta_extension['selected'];
						else  $clean['search_values_ext'] .= $f['name']." = ".$lng_meta_extension['not_selected'];
					}
				} else if($f['type']=="select" || $f['type']=="multiselect" || $f['type']=="radio") {

					if(isset($_POST[$f['caption']]) && $_POST[$f['caption']]) {
						if($clean['search_values']) { 
							$clean['search_values'].="|";
							$clean['search_values_ext'].=", ";
						}
						$clean['search_values'] .= $f['caption']."=".escape($_POST[$f['caption']]);
						$clean['search_values_ext'] .= $f['name']." = ".escape($_POST[$f['caption']]);
					}

				}
				 else {

					if((isset($_POST['choose_'.$f['caption']]) && $_POST['choose_'.$f['caption']]==1) && (isset($_POST[$f['caption']]) && $_POST[$f['caption']])) {
						if($clean['search_values']) { 
							$clean['search_values'].="|";
							$clean['search_values_ext'].=", ";
						}
						$clean['search_values'] .= $f['caption']."=".escape($_POST[$f['caption']]);
						$clean['search_values_ext'] .= $f['name']." = ".escape($_POST[$f['caption']]);
					}
				}
			}
		}

		if(!$id)
			$db->query("insert into `".$this->table."` set `title` = '".$clean['title']."', `meta_keywords` = '".$clean['meta_keywords']."', `meta_description` = '".$clean['meta_description']."',`search_terms` = '".$clean['search_values']."', `search_terms_ext` = '".$clean['search_values_ext']."' ;");
		else $db->query("update `".$this->table."` set `title` = '".$clean['title']."', `meta_keywords` = '".$clean['meta_keywords']."', `meta_description` = '".$clean['meta_description']."',`search_terms` = '".$clean['search_values']."', `search_terms_ext` = '".$clean['search_values_ext']."' where id='$id';");
		return 1;

	}

	function getExtension($id) {

		global $db;
		$result = $db->fetchAssoc("select * from ".$this->table." where id='$id'");
		$st = explode("|", $result['search_terms']);
		foreach($st as $s) {
			$arr = explode("=", $s);
			$result['search_terms_array'][$arr[0]] = $arr[1];
		}
		return $result;

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

	function getAll() {

		global $db;
		$array = $db->fetchAssocList("select * from ".$this->table);
		$result = array();
		$i = 0;
		foreach($array as $row) {
			$result[$i] = $row;
			$result[$i]['search_terms_array'] = explode("|", $row['search_terms']);
			$i++;
		}
		return $result;

	}

	function delete($id) {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		$db->query("delete from ".$this->table." where id='$id'");
		return 1;

	}

	function getMetaExtensions($post_array) {

		$no_keys_post = count($post_array);
		if(!$no_keys_post) return 0;
		global $config_table_prefix;
		global $db;
		$sql = "select id from ".$this->table." where ";
		$n = 0;
		$where = "";
		$i = 0;

		// shorten the list where to look for meta extensions
		foreach ($post_array as $key=>$value) {
			$value = escape(trim($value));
			if(!$value) continue;
			if($key=="page" || $value=="show") continue;
			if($where) $where.=" or ";
			$where .= " search_terms like '%".$key."=".$value."%'";
			$i++;
		}
		if(!$i) return 0;
		$sql.=$where;
		$arr = $db->fetchRowList($sql);

		$page_info = array();
		$match_id = 0;
		$no_matches = 0;

		foreach($arr as $id) {

			$not_valid = 0;

			$p = $db->fetchAssoc("select * from ".$this->table." where id='$id'");
			$st = explode("|", $p['search_terms']);
			$st_no = count($st);
			// the number of parameters must be lower or equal with the number of search parameters
			if($st_no > $no_keys_post) continue;

			// check if all parameters from meta extension are the same as the search
			foreach($st as $term) {
				$term_arr = explode("=",$term);
				$key = $term_arr[0];
				$value = $term_arr[1];
				if(!isset($post_array[$key]) || strtolower($post_array[$key]) != strtolower($value)) { $not_valid = 1;  break; }
			}

			if($not_valid) continue;

			// a valid meta extension was found
			// keep the id if no previous existing one or if number of matches greater than the previous match
			if( $match_id ==0 || ($match_id && $no_matches < $st_no ) ) {

				$match_id = $id;
				$no_matches = $st_no;

				$page_info['title'] = $p['title'];
				$page_info['meta_keywords'] = $p['meta_keywords'];
				$page_info['meta_description'] = $p['meta_description'];

			}

		}
		return $page_info;

	}

}
?>
