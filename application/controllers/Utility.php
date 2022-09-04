<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utility extends CI_Controller {

    private $Model = "M_AllFunction";

	function __construct(){
		parent::__construct();

		$this->load->model(array($this->Model));

        if(!$this->session->userdata('UserName')){
            redirect('Login');
        }
	}

	//------------------------------------------------USER---------------------------------------------//

	public function User(){
		$data['data'] = $this->M_AllFunction->Join('User', 'UserGroup', 'GroupID');
        $this->template->display('utility/user/main', $data);
	}

	public function UserAdd(){
		$data['data'] = $this->M_AllFunction->Get('UserGroup');
		if($this->uri->segment(3) !== null){
			$data['user'] = $this->M_AllFunction->Where('User', "UserName = '" . $this->uri->segment(3) . "'");
			$this->template->display('utility/user/add', $data);
		} else {
			$this->template->display('utility/user/add', $data);
		}
	}

	public function UserAddSave(){
		if(isset($_POST['Edit'])){
			if($_POST['GroupID'] == "0" || $_POST['GroupID'] == ""){
				$this->session->set_flashdata('pesan', 'Harap Pilih Group.');
				redirect("Utility/UserAdd/" . $_POST['UserName']);
			} else {
				$data = array(
					"UserName"			=> $_POST['UserName'],
					"Email"				=> $_POST['Email'],
					"GroupID"			=> $_POST['GroupID'],
					"Gender"			=> $_POST['Gender'],
					"CreatedBy"			=> $this->session->userdata('UserName')
				);
				if($this->M_AllFunction->Update('User', $data, "UserName = '" . $_POST['UserName'] . "'")){
					redirect("Utility/User");
				} else {
					$this->session->set_flashdata('pesan', 'Gagal Update User.');
					redirect("Utility/UserAdd");
				}
			}
		} else {
			if($this->M_AllFunction->Where('User', "UserName = '" . $_POST['UserName'] . "'")){
				$this->session->set_flashdata('pesan', 'Username Sudah Digunakan.');
				redirect("Utility/UserAdd");
			} else {
				if($_POST['Password'] == $_POST['PasswordVerification']){
					$data = array(
						"UserName"			=> $_POST['UserName'],
						"Email"				=> $_POST['Email'],
						"Password"			=> md5($_POST['Password']),
						"GroupID"			=> $_POST['GroupID'],
						"Gender"			=> $_POST['Gender'],
						"CreatedBy"			=> $this->session->userdata('UserName')
					);
					if($this->M_AllFunction->Insert('User', $data)){
						redirect("Utility/User");
					} else {
						$this->session->set_flashdata('pesan', 'Gagal Input User.');
						redirect("Utility/UserAdd");
					}
				} else {
					$this->session->set_flashdata('pesan', 'Inputan Dan Verifikasi Password Salah.');
					redirect("Utility/UserAdd");
				}
			}
		}
	}

	public function UserAddReset(){
		$UserName = $this->uri->segment(3);
		$data = array(
			"Password"			=> md5("123")
		);
		if($this->M_AllFunction->Update('User', $data, "UserName = '" . $UserName . "'")){
			redirect("Utility/User");
		} else {
			$this->session->set_flashdata('pesan', 'Gagal Update User.');
			redirect("Utility/UserAdd");
		}
	}

	public function UserDelete(){
		$username = array("UserName" => $this->uri->segment(3, 'index'));
		if($this->uri->segment(3) == "Administrator"){
			$this->session->set_flashdata('pesan', 'Administrator Tidak Bisa DiHapus!.');
			redirect("Utility/User");
		} else {
			if($this->M_AllFunction->Delete('User', $username)){
				redirect("Utility/User");
			} else {
				$this->session->set_flashdata('pesan', 'Gagal Hapus User!.');
				redirect("Utility/User");
			}
		}
	}

	//----------------------------------------------USERGROUP-------------------------------------------//

	public function UserGroup(){
		$data['data'] = $this->M_AllFunction->Get('UserGroup');
        $this->template->display('utility/usergroup/main', $data);
	}

	public function UserGroupAdd(){
		$this->template->display('utility/usergroup/add');
	}

	public function UserGroupAddSave(){
		$data = array(
			"GroupName"			=> $_POST['GroupName'],
			"CreatedBy"			=> $this->session->userdata('UserName')
		);
		if($this->M_AllFunction->Insert('UserGroup', $data)){
			redirect("Utility/UserGroup");
		} else {
			$this->session->set_flashdata('pesan', 'Gagal Input Group.');
			redirect("Utility/UserGroupAdd");
		}
	}

	public function UserGroupEdit(){
		$GroupID = $this->uri->segment(3);
		$data['Group'] = $this->M_AllFunction->Where('UserGroup', "GroupID = $GroupID");
		$data['Lv1'] = $this->M_AllFunction->MenuAkses($GroupID, "Menu_Lv1");
		$data['Lv2'] = $this->M_AllFunction->MenuAkses($GroupID, "Menu_Lv2");
		$this->template->display('utility/usergroup/edit', $data);
	}

	public function UserGroupEditSave(){
		$GroupID = $this->uri->segment(3);
		if(count($_POST) > 0){
			if((!array_key_exists(9000, $_POST) || !array_key_exists(9002, $_POST)) && $GroupID == 1){
				$this->session->set_flashdata('pesan', 'Menu Utility Administrator Tidak Boleh DiNonAktifkan!.');
				redirect("Utility/UserGroup");
			} else {
				$MenuAkses = array_keys($_POST);
				for($i = 0; $i < count($MenuAkses); $i++){
					$data[$i] = array(
						'GroupID'	=> $GroupID,
						'MenuID'	=> $MenuAkses[$i]
					);
				}
				$result = $this->M_AllFunction->Delete('Menu_Akses', "GroupID = '$GroupID'");
				if($result){
					if($this->M_AllFunction->InsertBatch('Menu_Akses', $data)){
						redirect("Utility/UserGroup");
					}
				}
			}
		} else {
			$this->M_AllFunction->Delete('Menu_Akses', "GroupID = '$GroupID'");
			redirect("Utility/UserGroup");
		}
	}

	public function UserGroupDelete(){
		$GroupID = array("GroupID" => $this->uri->segment(3, 'index'));
		if($this->uri->segment(3) == "1"){
			$this->session->set_flashdata('pesan', 'Administrator Tidak Bisa DiHapus!.');
			redirect("Utility/UserGroup");
		} else {
			if($this->M_AllFunction->Delete('UserGroup', $GroupID)){
				if($this->M_AllFunction->Delete('User', $GroupID)){
					redirect("Utility/UserGroup");
				} else {
					$this->session->set_flashdata('pesan', 'Gagal Hapus User Terkait!.');
					redirect("Utility/UserGroup");
				}
			} else {
				$this->session->set_flashdata('pesan', 'Gagal Hapus Group!.');
				redirect("Utility/UserGroup");
			}
		}
	}
}