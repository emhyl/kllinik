<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {
	private $konsul_info;
	private $konsul_all;
	private $data_dokter;
	private $jml_orderan;
	private $id_login;
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('data_perawat')){
			redirect(base_url('login'));
			die();
		}
		$this->id_login = $this->session->userdata('data_perawat')->id;
		$this->data_perawat =  $this->M_homecare->getWhere('tbl_perawat',['id_login'=>$this->id_login]);
		$this->konsul_all =  $this->M_homecare->getAllWhere('tbl_chat',['id_perawat'=>$this->data_perawat->id]);
		$this->konsul_info =  $this->M_homecare->join2tbl('*',['tbl_chat','tbl_user'],['id_user','id'],['id_perawat'=>$this->data_perawat->id]);
		$this->jml_orderan =  $this->M_homecare->getAllWhere('tbl_order',['id_perawat'=>$this->data_perawat->id,'sts_order'=>'order']);

	}

	public function index()
	{	
		$data['konsul_info'] = $this->CForm->no_duplikat($this->konsul_info);
		// var_dump($data['konsul_info']);die();
		$this->load->view('templates/admin/header',['jml_orderan' => count($this->jml_orderan)]);
		$this->load->view('templates/perawat/sidebar');
		$this->load->view('perawat/konsultasi',$data);
		$this->load->view('templates/admin/footer');
	}

	public function chat($id_user)
	{
		$data['nama_user'] = $this->M_homecare->getWhere('tbl_user',['id'=>$id_user])->nama;
		$data['konsul_all'] = $this->M_homecare->getAllWhere('tbl_chat',['id_user'=>$id_user,'id_perawat'=>$this->data_perawat->id]);
		// var_dump($data['konsul_all']);die();
		$this->load->view('templates/admin/header',['jml_orderan' => count($this->jml_orderan)]);
		$this->load->view('templates/perawat/sidebar');
		$this->load->view('perawat/chat',$data);
		$this->load->view('templates/admin/footer');
	}
	
	public function replay($id_user)
	{
		$chat = $this->input->post('chat');
		$data = [
			'status' => 'perawat',
			'id_user' => $id_user,
			'id_perawat' => $this->data_perawat->id,
			'chat' => $chat
		];
		$this->M_homecare->add('tbl_chat',$data);
		redirect(base_url('perawat/konsultasi/chat/'.$id_user));
	}
	
}
