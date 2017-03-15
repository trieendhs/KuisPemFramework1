<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getPerusahaan()
		{
			$this->db->select('*');
			$query = $this->db->get('perusahaan');
			return $query->result_array();
		
		}

		public function getProduk($id)
		{
   			$sql = "select p1.namaPerusahaan,p2.* from perusahaan as p1 join produk as p2 on p1.id=p2.fk_perusahaan where p1.id=$id";
   			$query = $this->db->query($sql);
			return $query->result_array();
		}


		public function getLokasi($id)
		{
			$sql = "select p1.namaPerusahaan,l.* from perusahaan as p1 join lokasi as l on p1.id=l.fk_perusahaan where p1.id=$id";
   			$query = $this->db->query($sql);
			return $query->result_array();
		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>