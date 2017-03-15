<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function index()
	{
		$this->load->model('perusahaan_model');
		$data['perusahaan'] = $this->perusahaan_model->getPerusahaan();
		$this->load->view('perusahaan',$data);
	}

	public function lokasi()
	{
		$this->load->model('perusahaan_model');
		$data['lokasi'] = $this->perusahaan_model->getLokasi();
		$this->load->view('lokasi');
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>