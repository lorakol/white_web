<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class default_images
{

	public function __construct()
	{
	
		$this->error = '';
		$this->err = 0;
		$this->error = '';

	}

	function getError() {
	
		return $this->error;

	}

	function addError($str) {

		$this->error.=$str;
		$this->err = 1;

	}

	function setError($str) {

		$this->error=$str;

	}

	function hasError() {

		return $this->err;

	}

	function Delete($id) {

		global $db, $config_table_prefix;
		$db->query("delete from ".$config_table_prefix."default_images where `category_id`=$id");
		return 1;

	}

	function check_form() {

		global $lng_default_images, $lng, $config_abs_path;

		$this->clean['category'] = escape($_POST["category"]);
		if(!$this->clean['category'] || !is_numeric($this->clean['category'])) $this->addError($lng_default_images['error']['choose_category']."<br/>"); 

		if(isset($_FILES['thmb']['name']) && $_FILES['thmb']['name']) {
			$this->thmb=new image('thmb',$config_abs_path.'/images','nopic');
			if(!$this->thmb->verify()) $this->addError($lng['settings']['errors']['nopic_image'].$this->thmb->getError()."<br/>");
		}
		else $this->addError($lng_default_images['error']['upload_thmb']."<br/>"); 

		if(isset($_FILES['big_thmb']['name']) && $_FILES['big_thmb']['name']) {
			$this->big_thmb=new image('big_thmb','../../../images','big_nopic');
			if(!$this->big_thmb->verify()) $this->addError($lng['settings']['errors']['nopic_image'].$this->big_thmb->getError()."<br/>");
		}
		else $this->addError($lng_default_images['error']['upload_big_thmb']."<br/>");

		global $mobile_settings;
		if($mobile_settings['enable_mobile_templates']) {

			if(isset($_FILES['mobile_thmb']['name']) && $_FILES['mobile_thmb']['name']) {
				$this->mobile_thmb=new image('mobile_thmb','../../../images','mobile_nopic');
				if(!$this->mobile_thmb->verify()) $this->addError($lng['settings']['errors']['nopic_image'].$this->mobile_thmb->getError()."<br/>");
			}
			else $this->addError($lng_default_images['error']['mobile_upload_thmb']."<br/>"); 

			if(isset($_FILES['mobile_big_thmb']['name']) && $_FILES['mobile_big_thmb']['name']) {
				$this->mobile_big_thmb=new image('mobile_big_thmb','../../../images','mobile_big_nopic');
				if(!$this->mobile_big_thmb->verify()) $this->addError($lng['settings']['errors']['nopic_image'].$this->mobile_big_thmb->getError()."<br/>");
			}
			else $this->addError($lng_default_images['error']['mobile_upload_big_thmb']."<br/>"); 

		}


	}

	function add() {

		$this->clean=array();
		$this->check_form();
		if($this->hasError()) return 0;

		$this->clean['apply_subcategories'] = checkbox_value("apply_subcategories");

		if($this->thmb->upload()) { 
			$this->clean['thmb']=$this->thmb->getUploadedFile();
		}
		else  $this->addError($this->thmb->getError());

		if($this->big_thmb->upload()) { 
			$this->clean['big_thmb']=$this->big_thmb->getUploadedFile();
		}
		else  $this->addError($this->big_thmb->getError());

		global $mobile_settings;

		if($mobile_settings['enable_mobile_templates']) {

			if($this->mobile_thmb->upload()) { 
				$this->clean['mobile_thmb']=$this->mobile_thmb->getUploadedFile();
			}
			else  $this->addError($this->mobile_thmb->getError());

			if($this->mobile_big_thmb->upload()) { 
				$this->clean['mobile_big_thmb']=$this->mobile_big_thmb->getUploadedFile();
			}
			else  $this->addError($this->mobile_big_thmb->getError());

		}
		else {
			$this->clean['mobile_thmb']='';
			$this->clean['mobile_big_thmb'] = '';
		}

		$this->addToCategory($this->clean['category'], $this->clean['apply_subcategories'], $this->clean['thmb'], $this->clean['big_thmb'], $this->clean['mobile_thmb'], $this->clean['mobile_big_thmb']);

		return 1;

	}


	function addToCategory($category_id, $apply_subcategories, $thmb, $big_thmb, $thmb_mobile, $big_thmb_mobile) {

		global $db, $config_table_prefix;
		$db->query("insert into ".$config_table_prefix."default_images set `category_id`='$category_id', `thmb`='$thmb', `big_thmb`='$big_thmb', `thmb_mobile`='$thmb_mobile', `big_thmb_mobile`='$big_thmb_mobile'");

		if($apply_subcategories) {

			$cat = new categories();
			$str = "";
			$scats = $cat->subcatList($category_id, $str);

			if(!$scats) return;
//echo $scats."<br/>";
//exit(0);

			$subcategories = explode(",", $scats);
			foreach($subcategories as $s) {

				if($s!=$category_id)
					$this->addToCategory($s, 1, $thmb, $big_thmb, $thmb_mobile, $big_thmb_mobile);

			}
		}

	}

	function getDefaultImages() {

		global $db, $config_table_prefix, $crt_lang;

		$array = $db->fetchAssocList("select ".$config_table_prefix."default_images.*, ".TABLE_CATEGORIES.".level, ".TABLE_CATEGORIES."_lang.`name` 
			from ".$config_table_prefix."default_images 
			left join ".TABLE_CATEGORIES." on ".$config_table_prefix."default_images.category_id=".TABLE_CATEGORIES.".id
			left join ".TABLE_CATEGORIES."_lang on ".$config_table_prefix."default_images.category_id=".TABLE_CATEGORIES."_lang.`id`  
			where `lang_id` = '$crt_lang'
			order by `order_no`");

		return $array;

	}

	function getCategoryDefaultImages($category) {

		global $db, $config_table_prefix;

		$result = $db->fetchAssoc("select ".$config_table_prefix."default_images.*
			from ".$config_table_prefix."default_images 
			where `category_id` = '$category'");

		return $result;

	}

	function getBigThmb($category) {

		global $db, $config_table_prefix;

		$result = $db->fetchAssoc("select ".$config_table_prefix."default_images.big_thmb, ".$config_table_prefix."default_images.big_thmb_mobile
			from ".$config_table_prefix."default_images 
			where `category_id` = '$category'");

		return $result;

	}

	function getThmb($category) {

		global $db, $config_table_prefix;

		$result = $db->fetchAssoc("select ".$config_table_prefix."default_images.thmb, ".$config_table_prefix."default_images.thmb_mobile
			from ".$config_table_prefix."default_images 
			where `category_id` = '$category'");

		return $result;

	}

}

?>