<?php
error_reporting(0);
class BSMI_model extends CI_model
{
	public function getenroll($input){
		return $this->db->get_where('enrolkey', array('enrol'=>$input))->result_array(); //ambil seluruh data dari tabel lapor
	}

	public function get_user($username){
		return $this->db->get_where('user', ['username'=>$username])->row_array();
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
		return $this->db->get_where('prodi', array('kode_prodi'=>$id))->row_array();	
	}

	public function getprodioperator($kode_user){
		return $this->db->get_where('prodi', array('kode_user'=>$kode_user))->row_array();	
	}

	public function getmatkul($kode_prodi){
		return $this->db->get_where('matakuliah', array('kode_prodi'=>$kode_prodi))->result_array();		
	}

	public function getmatkulcari($kode_prodi,$kode_matkul){
		$this->db->like('nama_matkul', $kode_matkul);
		return $this->db->get_where('matakuliah', array('kode_prodi'=>$kode_prodi))->result_array();		
	}	

	public function getmatericari($kode_matkul,$kode_materi){
		$this->db->like('judul', $kode_materi);
		return $this->db->get_where('materi', array('kode_matkul'=>$kode_matkul))->result_array();		
	}

	public function gettipe($kode_matkul,$tipe){
		if ($tipe == "Tipe") {

		}else{
			$this->db->like('tipe', $tipe);
		}
		return $this->db->get_where('soal', array('kode_matkul'=>$kode_matkul))->result_array();		
	}	

	public function gettahun($kode_matkul,$tahun){
		if ($tahun == "Tahun") {

		}else{
			$this->db->like('tahun', $tahun);
		}
		return $this->db->get_where('soal', array('kode_matkul'=>$kode_matkul))->result_array();		
	}

	public function getsoalcari($kode_matkul,$kode_soal){
		$this->db->like('judul', $kode_soal);
		return $this->db->get_where('soal', array('kode_matkul'=>$kode_matkul))->result_array();		
	}	

	public function getmatkulkhusus($kode_matkul){
		return $this->db->get_where('matakuliah', array('kode_matkul'=>$kode_matkul))->result_array();		
	}

	public function getmateri($kode_matkul){
		return $this->db->get_where('materi', array('kode_matkul'=>$kode_matkul))->result_array();
	}

	public function getsoal($kode_matkul){
		return $this->db->get_where('soal', array('kode_matkul'=>$kode_matkul))->result_array();
	}

	public function getvideo($kode_matkul){
		return $this->db->get_where('video',array('kode_matkul' => $kode_matkul))->result_array();
	}

	public function tambahmateri(){
		$file = $_FILES['File'];
		if($file = ''){}else{
			$config['upload_path'] = './assets/materi';
			$config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|ppt|pptx|png';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('File')){
			}else{
				$file = $this->upload->data('file_name');
			}
		}
		
		$data = [
			"judul" => $this->input->post('judul_materi'),
			"file" => $file,
			"kode_matkul" => $this->input->post('kode_matkul')
		];
		if($file == ""){
			return false;
		}else{
			$this->db->insert('materi', $data);
			return true;
		}
	}

	public function tambahsoal(){
		$file = $_FILES['File'];
		if($file = ''){}else{
			$config['upload_path'] = './assets/soal';
			$config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|ppt|pptx|png';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('File')){
			}else{
				$file = $this->upload->data('file_name');
			}
		}
		
		$data = [
			"judul" => $this->input->post('judul_soal'),
			"tahun" => $this->input->post('tahun_soal'),
			"tipe" => $this->input->post('tipe_soal'),
			"file" => $file,
			"kode_matkul" => $this->input->post('kode_matkul')
		];
		if($file == ""){
			return false;
		}else{
			$this->db->insert('soal', $data);
			return true;
		}
	}

	public function tambahmatkul()	{
		$kode_matkul = $this->input->post('kode_matkul');
		$data = [
			"kode_matkul" => $kode_matkul,
			"nama_matkul" => $this->input->post('nama_matkul'),
			"nama_dosen" => $this->input->post('nama_dosen'),
			"kode_prodi" => $this->input->post('kode_prodi')
		];
		if($kode_matkul == ""){
			return false;
		}else{
			$this->db->insert('matakuliah', $data);
			return true;
		}
	}

	public function tambahvideo(){	
		//https://www.youtube.com/watch?v=
		$linkasli = $this->input->post('link_video');
		$link = substr($linkasli,32);
		$validlink = substr($linkasli,0,32);
		$data = [
			"judul" => $this->input->post('judul_video'),
			"link" => $link,
			"kode_matkul" => $this->input->post('kode_matkul')
		];
		if($link == "" || $validlink != "https://www.youtube.com/watch?v="){
			return false;
		}else{
			$this->db->insert('video', $data);
			return true;
		}
	}

	public function hapusmateri($datahapus,$kode_matkul){
		$n = count($datahapus);
		for ($i=0; $i < $n; $i++) { 
			$this->db->where('kode_materi',$datahapus[$i]);
			$this->db->delete('materi');
		}
		redirect('welcome/materi/'.$kode_matkul);
	}

	public function hapussoal($datahapus,$kode_matkul){
		$n = count($datahapus);
		for ($i=0; $i < $n; $i++) { 
			$this->db->where('kode_soal',$datahapus[$i]);
			$this->db->delete('soal');
		}
		redirect('welcome/soal/'.$kode_matkul);
	}

		public function hapusvideo($datahapus,$kode_matkul){
		$n = count($datahapus);
		for ($i=0; $i < $n; $i++) { 
			$this->db->where('kode_video',$datahapus[$i]);
			$this->db->delete('video');
		}
		redirect('welcome/video/'.$kode_matkul);
	}

}



?>