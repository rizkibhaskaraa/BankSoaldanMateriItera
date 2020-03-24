<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('BSMI_model'); //ngambil model model_lapor dari folder models
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->helper('form');
		$this->form_validation->set_rules('enrolment_form', 'Enrollment key', 'trim|required');

		if($this->form_validation->run() == false){
			$this->load->view('landing_page');
		} else {
			$this->checkEnrollmentKey();
		}
	}

	private function checkEnrollmentKey(){
		$enrollmentInput = $this->input->post('enrolment_form');
		$enrollmentKey = $this->BSMI_model->getenroll($enrollmentInput);
		if($enrollmentKey){
			redirect('browse');
		} else {
			redirect('');
		}
	}

	public function page_prodi(){
		$data['sains'] = $this->BSMI_model->getsains();
		$data['jtik'] = $this->BSMI_model->getjtik();
		$data['jtpi'] = $this->BSMI_model->getjtpi();
		$this->load->view('halaman_prodi',$data);
	}

	public function page_matkul($kode_prodi){
		$data["prodi"] = $this->BSMI_model->getprodi($kode_prodi);
		$data["matkul"] = $this->BSMI_model->getmatkul($kode_prodi);
		$this->load->view('halaman_matakuliah',$data);
	}

	public function hasilcarimatkul($kode_prodi,$kode_matkul){
		$carimatkul = str_replace('%20', ' ', $kode_matkul);
		$data["matkul"] = $this->BSMI_model->getmatkulcari($kode_prodi,$carimatkul);
		$this->load->view('hasilcarimatkul',$data);	
	}

	public function hasilcarimateri($kode_matkul,$kode_materi){
		$carimateri = str_replace('%20', ' ', $kode_materi);
		$data["materi"] = $this->BSMI_model->getmatericari($kode_matkul,$carimateri);
		$this->load->view('hasilcarimateri',$data);	
	}

	public function hasilcarisoal($kode_matkul,$kode_soal){
		$carisoal = str_replace('%20', ' ', $kode_soal);
		$data["soal"] = $this->BSMI_model->getsoalcari($kode_matkul,$carisoal);
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('hasilcarisoal',$data);	
	}

	public function tipesoal($kode_matkul,$tipe){
		$data["soal"] = $this->BSMI_model->gettipe($kode_matkul,$tipe);
		$data["tipe"] = $tipe;
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('hasilcarisoal',$data);	
	}

	public function tahunsoal($kode_matkul,$tahun){
		$data["soal"] = $this->BSMI_model->gettahun($kode_matkul,$tahun);
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$data["tahun"] = $tahun;
		$this->load->view('hasilcarisoal',$data);	
	}

	public function konten($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('halaman_berkas',$data);		
	}

	public function materi($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$data["materi"] = $this->BSMI_model->getmateri($kode_matkul); 
		$this->load->view('halaman_materi',$data);			
	}

	public function soal($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$data["soal"] = $this->BSMI_model->getsoal($kode_matkul); 
		$this->load->view('halaman_soal',$data);			
	}

	public function video($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$data["video"] = $this->BSMI_model->getvideo($kode_matkul); 
		$this->load->view('halaman_video',$data);			
	}

	public function tampilanmateri($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('halaman_tambahmateri',$data);
	}

	public function tampilansoal($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('halaman_tambahsoal',$data);
	}

	public function tampilanvideo($kode_matkul){
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('halaman_tambahvideo',$data);
	}

	public function addmateri(){
		$kode_matkul = $this->input->post('kode_matkul');
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->form_validation->set_rules('judul_materi','Judul Materi','required');
		if($this->form_validation->run() == false) {
			$this->load->view('halaman_tambahmateri',$data);
		}else{
			if($this->BSMI_model->tambahmateri()==true){
				echo "
					<script>
						alert('berhasil menambah materi');
						document.location.href='../welcome/materi/$kode_matkul';
					</script>
					";
				}else{
					echo "
						<script>
							alert('gagal menamabah materi,file tidak boleh kosong');
							document.location.href='../welcome/tampilanmateri/$kode_matkul';
						</script>
					";
				}
		}
	}

	public function addsoal(){
		$kode_matkul = $this->input->post('kode_matkul');
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->form_validation->set_rules('judul_soal','Judul Soal','required');
		$this->form_validation->set_rules('tahun_soal','Tahun Soal','required|max_length[4]|integer');

		if($this->form_validation->run() == false) {
			$this->load->view('halaman_tambahsoal',$data);
		}else{
			if($this->BSMI_model->tambahsoal()==true){
				echo "
					<script>
						alert('berhasil menambah soal');
						document.location.href='../welcome/soal/$kode_matkul';
					</script>
					";
			}else{
				echo "
					<script>
						alert('gagal menamabah soal,file tidak boleh kosong');
						document.location.href='../welcome/tampilansoal/$kode_matkul';
					</script>
				";
			}
		}
	}

		public function addvideo(){
		$kode_matkul = $this->input->post('kode_matkul');
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->form_validation->set_rules('judul_video','Judul Video','required');
		if($this->form_validation->run() == false) {
			$this->load->view('halaman_tambahvideo',$data);
		}else{
			if($this->BSMI_model->tambahvideo()==true){
				echo "
					<script>
						alert('berhasil menambah video');
						document.location.href='../welcome/video/$kode_matkul';
					</script>
					";
			}else{
				echo "
					<script>
						alert('gagal menamabah video,link video harus diisi atau link tidak sesuai');
						document.location.href='../welcome/tampilanvideo/$kode_matkul';
					</script>
				";
			}
		}
	}


}

