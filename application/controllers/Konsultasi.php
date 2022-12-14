<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {


	public function index()
	{
		if(isset($_POST['btn-order'])){
			// var_dump($this->input->post());die();
			$data['id_user'] = $this->input->post('id_user');
			$data['id_perawat'] = $this->input->post('id_perawat');
			$data['jenis_perawatan'] = $this->input->post('jenis_perawatan');
			$data['tgl_order'] = $this->CForm->time_now();
			$data['sts_order'] = 'order';

			// var_dump($data);die();
			$this->M_homecare->add('tbl_order',$data);

		}else{
			redirect(base_url('order'));
		}
	}

}
