<?php

class BSMI_model extends CI_model
{
	public function getenroll(){
		return $this->db->get('enrolkey')->result_array(); //ambil seluruh data dari tabel lapor
	}
}


?>