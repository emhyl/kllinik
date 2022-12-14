<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $konsul_info;
	private $konsul_all;
	private $data_dokter;
	private $id_login;
	private $jml_orderan;
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('data_perawat')){
			redirect(base_url('login'));
			die();
		}
		$this->id_login = $this->session->userdata('data_perawat')->id;
		$this->data_perawat =  $this->M_homecare->getWhere('tbl_perawat',['id_login'=>$this->id_login]);
		$this->konsul_all =  $this->M_homecare->getAllWhere('tbl_chat',['id_perawat'=>$this->data_perawat->id]);
		$this->jml_orderan =  $this->M_homecare->getAllWhere('tbl_order',['id_perawat'=>$this->data_perawat->id,'sts_order'=>'order']);
		$this->konsul_info =  $this->M_homecare->join2tbl('*',['tbl_chat','tbl_user'],['id_user','id'],['id_perawat'=>$this->data_perawat->id]);
	}

	public function index()
	{	
		$data['konsul_all'] = $this->konsul_all;
		$data['konsul_info'] = $this->CForm->no_duplikat($this->konsul_info); 
		$data['riwayat'] = $this->M_homecare->join2tbl('*',['tbl_order','tbl_user'],['id_user','id'],['sts_order'=>'selesai','id_perawat'=>$this->data_perawat->id]); 
		// var_dump($data['riwayat']);die();
		$this->load->view('templates/admin/header',['jml_orderan' =>count($this->jml_orderan)]);
		$this->load->view('templates/perawat/sidebar');
		$this->load->view('perawat/index',$data);
		$this->load->view('templates/admin/footer');
	}

	public function informasi()
	{

		$data['informasi'] = $this->M_homecare->getAll('tbl_info_homecare');
		// var_dump($data);die();
		$this->load->view('templates/admin/header',['jml_orderan' =>count($this->jml_orderan)]);
		$this->load->view('templates/perawat/sidebar');
		$this->load->view('perawat/informasi',$data);
		$this->load->view('templates/admin/footer');
	}

	public function jadwal()
	{

		$data['jadwal'] = $this->M_homecare->join2tbl('*',['tbl_order','tbl_user'],['id_user','id'],['id_perawat'=>$this->data_perawat->id,'sts_order' => 'proses']);
		// var_dump($data['jadwal']);die();
		$this->load->view('templates/admin/header',['jml_orderan' => count($this->jml_orderan)]);
		$this->load->view('templates/perawat/sidebar');
		$this->load->view('perawat/jdw_pelayanan',$data);
		$this->load->view('templates/admin/footer');
	}

}
