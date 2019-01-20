<?php

require_once 'libs/Smarty.class.php';

class MySmarty extends Smarty {
	
	public function __construct() {
		parent::__construct();
		$this->template_dir = "template/";
		$this->compile_dir = "template_c/";
		$this->config_dir = "configs/";	
	}
	
}

?>