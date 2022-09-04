<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    private $Model = "M_AllFunction";

	function __construct(){
		parent::__construct();

		$this->load->model(array($this->Model, "M_Administrator"));
	}

	public function index(){
		$data = $this->M_AllFunction->Get('User');
		if(count($data) == 0){
			$insertAdministrator = $this->M_Administrator->Create();
			if($insertAdministrator){
				$this->load->view("V_Login");
			} else {
				echo "Gagal CreateUser";
			}
		} else {
			if(!$this->session->userdata('UserName')){
				$this->load->view("V_Login");
			} else {
				redirect("Dashboard");
			}
		}
	}

	public function Login(){
		$data = array(
			'UserName' => $_POST['UserName'],
			'Password' => md5($_POST['Password'])
		);
		$get = $this->M_AllFunction->Where("User", $data);
		if(count($get) == 0){
			$this->session->set_flashdata('pesan', 'UserName/Password Salah');
			redirect("Login");
		} else {
			$this->session->set_userdata('UserName', $get[0]->UserName);
			$this->session->set_userdata('GroupID', $get[0]->GroupID);
			$this->session->set_userdata('GroupName', $get[0]->GroupName);
			redirect("Dashboard");
		}
	}

	public function ChangePassword(){
		$user = array(
			'UserName' => $_POST['UserName'],
			'Password' => md5($_POST['PassLama'])
		);
		$data = $this->M_AllFunction->Where("User", $user);
		if($data){
			$change = array(
				'Password' => md5($_POST['PassBaru'])
			);
			$data = $this->M_AllFunction->Update("User", $change, "UserName = '" . $_POST['UserName'] . "'");
			if($data){
				//ini password berhasil diganti
				echo 1;
			} else {
				//ini password gagal diganti
				echo 0;
			}
		} else {
			//ini password lama salah
			echo 0;
		}
	}

	public function Logout(){
		$this->session->sess_destroy();
		$this->load->view('V_Login');
	}
}