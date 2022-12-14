<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $id;
	private $id_user;
	private $data = [];
	private $chat = [];
	private $konsul = [];
	private $data_header = [];
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('user') == null ){
			redirect(base_url('login'));
		}
		$this->id = $this->session->userdata('user');
		$this->data = $this->M_homecare->getWhere('tbl_user',['id_login'=>$this->id]);
		$this->id_user = $this->data->id;
		$this->chat = $this->M_homecare->getAllWhere('tbl_chat',['id_user'=>$this->id_user]);
		$this->konsul = $this->M_homecare->getAllWhere('tbl_order',['id_user'=>$this->id_user,'sts_order'=>'order']);
		$this->data_header['jml_chat'] = count( $this->chat );
		$this->data_header['jml_konsul'] = count( $this->konsul );
		// var_dump($this->konsul);die();
	}


	public function index()
	{
		$data['informasi'] = $this->M_homecare->getAll('tbl_info_homecare');
		// var_dump($this->konsul);die();
		
		$this->load->view('templates/user/header',$this->data_header);
		$this->load->view('user/index',$data);
		$this->load->view('templates/user/footer');
	}

	public function order()
	{
		$data['data_user'] = $this->data;
		$data['list_pelayanan'] = $this->M_homecare->getAll('tbl_list_pelayanan');
		// var_dump($data['data_user']);die();

		$this->load->view('templates/user/header',$this->data_header);
		$this->load->view('user/order',$data);
		$this->load->view('templates/user/footer');
	}

	public function my_order()
	{
		$data['orderan'] = $this->M_homecare->join2tbl('*',['tbl_order','tbl_user'],['id_user','id'],['sts_order' => 'order','id_user'=>$this->id_user]);
		$data['proses'] = $this->M_homecare->join2tbl('*',['tbl_user','tbl_order'],['id','id_user'],['sts_order' => 'proses','id_user'=>$this->id_user]);
		$data['riwayat'] = $this->M_homecare->join2tbl('*',['tbl_order','tbl_user'],['id_user','id'],['sts_order' => 'selesai','id_user'=>$this->id_user]);
		// var_dump($data['riwayat']);die();

		$this->load->view('templates/user/header',$this->data_header);
		$this->load->view('user/my_order',$data);
		$this->load->view('templates/user/footer');
	}

	public function list_obat()
	{	
		if(isset($_POST['key'])){
			$key = $_POST['key'];
			$data['list_obat'] = $this->M_homecare->like('nama_obat',$key,'tbl_obat');
		}else{
			$data['list_obat'] = $this->M_homecare->getAll('tbl_obat');
		}
		// var_dump($data['riwayat']);die();

		$this->load->view('templates/user/header',$this->data_header);
		$this->load->view('user/list_obat',$data);
		$this->load->view('templates/user/footer');
	}

	public function konsultasi($id_perawat = null)
	{	
		$data = [];

		$data['grup_chat'] = $this->M_homecare->join2tbl('*',['tbl_perawat','tbl_chat'],['id','id_perawat'],['id_user'=>$this->id_user]);

		if(is_null($id_perawat)){
			$data['sts_chat'] = false;
			$data['list_perawat'] = $this->M_homecare->getAll('tbl_perawat');
			// $data['list_perawat'] = $this->CForm->no_duplikat($data['grup_chat'],'id_perawat');
		}else{
			$data['sts_chat'] = true;
			$data['nm_user'] = $this->data->nama;
			$data['id_user'] = $this->id_user;
			$data['nm_perawat'] = $this->M_homecare->getWhere('tbl_perawat',['id'=>$id_perawat])->nama;
			$data['id_perawat'] = $this->M_homecare->getWhere('tbl_perawat',['id'=>$id_perawat])->id;
			$data['chat'] = $this->M_homecare->join2tbl('*',['tbl_perawat','tbl_chat'],['id','id_perawat'],['id_user'=>$this->id_user,'id_perawat'=>$id_perawat]);
		}
		// var_dump($data['list_perawat']);die();

		$this->load->view('templates/user/header',$this->data_header);
		$this->load->view('user/konsul',$data);
		$this->load->view('templates/user/footer');
	}

}
