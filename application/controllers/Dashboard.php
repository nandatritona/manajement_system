<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    private $Model = "M_AllFunction";

	function __construct(){
		parent::__construct();

		$this->load->model(array($this->Model));

        if(!$this->session->userdata('UserName')){
            redirect('Login');
        }
	}

	public function index(){
        $this->template->display('V_Dashboard');
	}
}