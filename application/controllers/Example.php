<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function Form(){
		$this->template->display('example/Form');
	}

	public function Table(){
		$this->template->display('example/Table');
	}

	public function Chart(){
		$this->template->display('example/Chart');
	}

	public function Map(){
		$this->template->display('example/Map');
	}
}