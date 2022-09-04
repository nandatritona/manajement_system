<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    private $Model = "M_AllFunction";

	function __construct(){
		parent::__construct();

		$this->load->model(array($this->Model));

        if(!$this->session->userdata('UserName')){
            redirect('Login');
        }
	}

    //------------------------------------------------Menu---------------------------------------------//
    public function Menu(){
		$data['data']   = $this->M_AllFunction->get('menu_lv1');
		$data['data2']  = $this->M_AllFunction->get('menu_lv2');

        $this->template->display('master/menu/main', $data);
	}

}

/* End of file Master.php */
