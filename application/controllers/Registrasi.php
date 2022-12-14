<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{

		if( isset($_POST['btn_registrasi']) ){

			// var_dump($_POST);
			// die();
			$data['username'] = $this->input->post('username');
			// $data['password'] = $this->input->post('password');

			$auth = $this->M_homecare->getWhere('tbl_login',$data);
			if(!$auth){

				$dt_login['username'] = $this->input->post('username');				
				$dt_login['password'] = $this->input->post('password');				
				$dt_login['status'] = 'user';

				$this->M_homecare->add('tbl_login',$dt_login);
				
				$id_login_new = $this->M_homecare->getLast('tbl_login');
				$dt_user['id_login'] = $id_login_new->id;
				$dt_user['alamat'] = $this->input->post('alamat');
				$dt_user['nama'] = $this->input->post('nama');				
				$dt_user['nik'] = $this->input->post('nik');				
				$dt_user['no_hp'] = $this->input->post('no_hp');				

				$this->M_homecare->add('tbl_user',$dt_user);
				$this->session->set_flashdata('sukses','
					<div class="alert alert-success p-2" role="alert">
					 	Akun Berhasil Dibuat.!
					</div>
				');
				redirect(base_url('registrasi'));
				
			}else{
				$this->session->set_flashdata('err_login','
					<div class="alert alert-danger p-2" role="alert">
					 	username telah digiunakan. silahkan masukkan username yang lain.!
					</div>
				');
				redirect(base_url('registrasi'));
			}
			
		}
		$this->load->view('registrasi');
	}

}