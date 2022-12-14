<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $jml_orderan;
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect(base_url('login'));
			die();
		}

		$this->jml_orderan = count( $this->M_homecare->getAllWhere('tbl_order',['sts_order'=>'order']));

	}

	public function index()
	{

		$data['orderan'] = count($this->M_homecare->join2tbl('*',['tbl_order','tbl_user'],['id_user','id'],['sts_order'=>'selesai']));
		$data['order'] = $this->M_homecare->join2tbl('*',['tbl_order','tbl_user'],['id_user','id'],['sts_order'=>'selesai']);
		$data['pelanggan'] = count($this->M_homecare->getAll('tbl_user'));
		$data['dokter'] = count($this->M_homecare->getAll('tbl_perawat'));
		$data['total_orderan'] = count($this->M_homecare->getAllWhere('tbl_order',['sts_order'=>'selesai']));
		// var_dump($data['order']);die();
		$this->load->view('templates/admin/header',['jml_orderan' => $this->jml_orderan]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/index',$data);
		$this->load->view('templates/admin/footer');
	}

	public function informasi()
	{

		$data['informasi'] = $this->M_homecare->getAll('tbl_info_homecare');
		$this->load->view('templates/admin/header',['jml_orderan' => $this->jml_orderan]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/informasi',$data);
		$this->load->view('templates/admin/footer');
	}
	public function list_obat()
	{

		$data['list_obat'] = $this->M_homecare->getAll('tbl_obat');
		$this->load->view('templates/admin/header',['jml_orderan' => $this->jml_orderan]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/list_obat',$data);
		$this->load->view('templates/admin/footer');
	}

	public function pesanan($id=null)
	{
		if(isset($_POST['set-tgl'])){
			$this->M_homecare->edit('tbl_order',['jadwal'=>$_POST['jadwal'],'sts_order'=>'proses','id_perawat' => $_POST['id_perawat']],['id'=>$id]);
			redirect(base_url('admin/home/pesanan'));
		}

		$data['orderan'] = $this->M_homecare->join2tbl('*',['tbl_user','tbl_order'],['id','id_user'],['sts_order'=>'order']);

		$data['list_perawat'] = $this->M_homecare->getAll('tbl_perawat');
		// var_dump($data['orderan']);die();

		$this->load->view('templates/admin/header',['jml_orderan' => $this->jml_orderan]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/pesanan',$data);
		$this->load->view('templates/admin/footer');
	}

	public function proses()
	{

		$data['proses'] = $this->M_homecare->getAllWhere('tbl_order',['sts_order'=>'proses']);
		$data['field'] = $this->M_homecare->getField('tbl_order');
		// var_dump($data['proses']);die();

		$this->load->view('templates/admin/header',['jml_orderan' => $this->jml_orderan]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/proses',$data);
		$this->load->view('templates/admin/footer');
	}


	public function export() {
	    $data['order'] = $this->M_homecare->join2tbl('*',['tbl_user','tbl_order'],['id','id_user'],['sts_order'=>'selesai']);

	    $this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = 'laporan.pdf';
	    $this->pdf->load('view_laporan', $data);
	}
	
}
