<?php
error_reporting(0);
class BSMI_model extends CI_model
{
	public function getenroll(){
		return $this->db->get('enrolkey')->result_array(); //ambil seluruh data dari tabel lapor
	}

	public function getsains(){
		return $this->db->get_where('prodi', array('jurusan'=>'sains'))->result_array();
	}
	public function getjtik(){
		return $this->db->get_where('prodi', array('jurusan'=>'jtik'))->result_array();
	}
	public function getjtpi(){
		return $this->db->get_where('prodi', array('jurusan'=>'jtpi'))->result_array();
	}

	public function getprodi($id){
		return $this->db->get_where('prodi', array('kode_prodi'=>$id))->result_array();	
	}

	public function getmatkul($kode_prodi){
		return $this->db->get_where('matakuliah', array('kode_prodi'=>$kode_prodi))->result_array();		
	}

	public function getmatkulcari($kode_prodi,$kode_matkul){
		$this->db->like('nama_matkul', $kode_matkul);
		return $this->db->get_where('matakuliah', array('kode_prodi'=>$kode_prodi))->result_array();		
	}	

	public function getmatkulkhusus($kode_matkul){
		return $this->db->get_where('matakuliah', array('kode_matkul'=>$kode_matkul))->result_array();		
	}
}



?>