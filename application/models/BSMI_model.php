<?php

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
}



?>