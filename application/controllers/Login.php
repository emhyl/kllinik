<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('data_perawat')!= null || $this->session->userdata('admin')!= null || $this->session->userdata('user')!= null){
			$this->session->sess_destroy();
	
		}
	}

	public function index()
	{

		if( isset($_POST['btn_login']) ){

			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');

			$auth = $this->M_homecare->getWhere('tbl_login',$data);
			// var_dump($auth);
			// die();
			if($auth){
				switch ($auth->status) {
					case 'admin':
						$this->session->set_userdata('admin',true);
						redirect(base_url('admin'));
						break;
					case 'perawat':
						$this->session->set_userdata('data_perawat',$auth);
						redirect(base_url('perawat'));
						break;
					case 'user':
						$this->session->set_userdata('user',$auth->id);
						redirect(base_url(''));
						break;
				}
			}else{
				$this->session->set_flashdata('err_login','
					<div class="alert alert-danger p-2" role="alert">
					 	username atau password yang anda masukkan salah.!
					</div>
				');
				redirect(base_url('login'));
			}
			
		}
		$this->load->view('login');
	}

	public function logOut(){
		$this->session->unset_userdata('admin');
		redirect(base_url('login'));
	}

}
