<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {


	public function checkout()
	{
		if(isset($_POST['btn-order'])){
			$id_jenis_perawatan = $this->input->post('jenis_perawatan');

			$jenis_perawatan = $this->M_homecare->getWhere('tbl_list_pelayanan',['id'=>$id_jenis_perawatan])->nm_pelayanan;
			$harga = $this->M_homecare->getWhere('tbl_list_pelayanan',['id'=>$id_jenis_perawatan])->harga;

			// var_dump($harga);die();

			$data['id_user'] = $this->input->post('id_user');
			$data['id_perawat'] = $this->input->post('id_perawat');
			$data['jenis_perawatan'] =$jenis_perawatan;
			$data['tgl_order'] = $this->CForm->time_now();
			$data['jadwal'] = null;
			$data['harga'] = $harga;
			$data['sts_order'] = 'order';

			// var_dump($data);die();
			$this->M_homecare->add('tbl_order',$data);

		}else{
			redirect(base_url('order'));
		}
	}

	public function selesai($id = null){
		if(!is_null($id)){
			$this->M_homecare->edit('tbl_order',['sts_order'=>'selesai'],['id'=>$id]);
			redirect(base_url('orderan'));
		}

	}

	public function send_chat(){
		if(isset($_POST['btn-send'])){
			$data['status'] = 'user';
			$data['id_user'] = $this->input->post('id_user');
			$data['id_perawat'] = $this->input->post('id_perawat');
			$data['chat'] = $this->input->post('chat');
			$this->M_homecare->add('tbl_chat',$data);
			redirect(base_url('konsultasi/'.$data['id_perawat']));
		}

	}

}
