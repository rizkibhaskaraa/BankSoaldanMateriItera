<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		session_start();
		$this->load->model('BSMI_model'); //ngambil model model_lapor dari folder models
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()	{
		$this->load->helper('form');
		$this->form_validation->set_rules('enrolment_form', 'Enrollment key', 'trim|required');

		if($this->form_validation->run() == false){
			$this->load->view('header');
			$this->load->view('landing_page');
		} else {
			$this->checkEnrollmentKey();
		}
	}

	private function checkEnrollmentKey(){
		$enrollmentInput = $this->input->post('enrolment_form');
		$enrollmentKey = $this->BSMI_model->getenroll($enrollmentInput);
		if($enrollmentKey){
			$_SESSION["login"] = true;
			redirect('dashboard');
		} else {
			redirect('');
		}
	}

	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');//|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login_page');
		} else {
			$this->checkLogin();
		}
	}

	public function checkLogin(){
		$email = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->BSMI_model->get_user($email);
		$data["prodi"] = $this->BSMI_model->getprodioperator($user['kode_user']);

		if ($user) {
			$saved_password = password_hash($user['password'], PASSWORD_DEFAULT);
			if(password_verify($password, $saved_password)){
				if ($email == "aldi.14117055@student.itera.ac.id"){
					$_SESSION["admin"] = true;
					redirect('dashboard');	
				}else{
					$_SESSION["operator"] = true;
					$_SESSION["kode_prodi"] = $data["prodi"]["kode_prodi"];
					redirect('dashboard/'.$_SESSION["kode_prodi"]);
				}
			} else {
				$this->load->view('login_page');
			}
		} else {
			$this->load->view('login_page');
		}
	}

	public function page_prodi(){
		//cek session apakah pengguna langsung akses link ke page tertentu tanpa memasukan enroll
		if(!isset($_SESSION["login"]) && !isset($_SESSION["operator"]) && !isset($_SESSION["admin"]) ){
			echo "
			<script>
				alert('masukkan enrollmentKey dahulu');
				document.location.href='../';
			</script>
			";
		}


		$data['sains'] = $this->BSMI_model->getsains();
		$data['jtik'] = $this->BSMI_model->getjtik();
		$data['jtpi'] = $this->BSMI_model->getjtpi();
		$this->load->view('header');
		$this->load->view('halaman_prodi',$data);
	}

	public function page_matkul($kode_prodi){
		//cek session apakah pengguna langsung akses link ke page tertentu tanpa memasukan enroll
		if(!isset($_SESSION["login"]) && !isset($_SESSION["operator"]) && !isset($_SESSION["admin"]) ){
			echo "
			<script>
				alert('masukkan enrollmentKey dahulu');
				document.location.href='../';
			</script>
			";
		}

		if (isset($_SESSION["operator"])) {
			$kode_prodi = $_SESSION["kode_prodi"];
			$data["prodi"] = $this->BSMI_model->getprodi($kode_prodi);
			$data["matkul"] = $this->BSMI_model->getmatkul($kode_prodi);
		}else{
			$data["prodi"] = $this->BSMI_model->getprodi($kode_prodi);
			$data["matkul"] = $this->BSMI_model->getmatkul($kode_prodi);
		}		

		//mengirim informasi jika admin atau operator yang login
		if (isset($_SESSION["operator"]) || isset($_SESSION["admin"]) ) {
			$data["cek_operatoradmin"] = true;
		}

		$data['kode_prodi'] = $kode_prodi;
		$this->load->view('header');
		$this->load->view('halaman_matakuliah',$data);
	}

	public function page_matkul_operator($kode_prodi){
			//cek session apakah operator langsung akses link ke page tertentu tanpa memasukan login
		if(!isset($_SESSION["operator"]) && !isset($_SESSION["operator"])){
			echo "
			<script>
				alert('login dahulu');
				document.location.href='..';
			</script>
			";
		}

		if (isset($_SESSION["operator"])) {
			$kode_prodi = $_SESSION["kode_prodi"];
			$data["prodi"] = $this->BSMI_model->getprodi($kode_prodi);
			$data["matkul"] = $this->BSMI_model->getmatkul($kode_prodi);
		}else{
			$data["prodi"] = $this->BSMI_model->getprodi($kode_prodi);
			$data["matkul"] = $this->BSMI_model->getmatkul($kode_prodi);
		}
		
		//mengirim informasi jika admin atau operator yang login
		if (isset($_SESSION["operator"]) || isset($_SESSION["admin"]) ) {
			$data["cek_operatoradmin"] = true;
		}

		$data['kode_prodi'] = $kode_prodi;

		$this->load->view('halaman_matakuliah',$data);
	}

	public function hasilcarimatkul($kode_prodi,$kode_matkul){
		$carimatkul = str_replace('%20', ' ', $kode_matkul);
		$data["matkul"] = $this->BSMI_model->getmatkulcari($kode_prodi,$carimatkul);
		$data["kode"] = $kode_prodi;
		$data["cari"] = $kode_matkul;
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
		//cek session apakah pengguna langsung akses link ke page tertentu tanpa memasukan enroll
		if(!isset($_SESSION["login"]) && !isset($_SESSION["operator"]) && !isset($_SESSION["admin"])){
			echo "
			<script>
				alert('masukkan enrollmentKey dahulu');
				document.location.href='../';
			</script>
			";
		}

		if (isset($_SESSION["operator"]) || isset($_SESSION["admin"]) ) {
			$data["cek_operatoradmin"] = true;
		}

		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('header');
		$this->load->view('halaman_berkas',$data);		
	}

	public function materi($kode_matkul){
		//cek session apakah pengguna langsung akses link ke page tertentu tanpa memasukan enroll
		if(!isset($_SESSION["login"]) && !isset($_SESSION["operator"]) && !isset($_SESSION["admin"]) ){
			echo "
			<script>
				alert('masukkan enrollmentKey dahulu');
				document.location.href='../';
			</script>
			";
		}

		//mengirim informasi jika admin atau operator yang login
		if (isset($_SESSION["operator"]) || isset($_SESSION["admin"]) ) {
			$data["cek_operatoradmin"] = true;
		}

		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$data["materi"] = $this->BSMI_model->getmateri($kode_matkul); 
		$this->load->view('header');
		$this->load->view('halaman_materi',$data);			
	}

	public function soal($kode_matkul){
		//cek session apakah pengguna langsung akses link ke page tertentu tanpa memasukan enroll
		if(!isset($_SESSION["login"]) && !isset($_SESSION["operator"]) && !isset($_SESSION["admin"]) ){
			echo "
			<script>
				alert('masukkan enrollmentKey dahulu');
				document.location.href='../';
			</script>
			";
		}

		//mengirim informasi jika admin atau operator yang login
		if (isset($_SESSION["operator"]) || isset($_SESSION["admin"]) ) {
			$data["cek_operatoradmin"] = true;
		}

		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$data["soal"] = $this->BSMI_model->getsoal($kode_matkul); 
		$this->load->view('header');
		$this->load->view('halaman_soal',$data);			
	}

	public function video($kode_matkul){
		//cek session apakah pengguna langsung akses link ke page ertentu tanpa memasukan enroll
		if(!isset($_SESSION["login"]) && !isset($_SESSION["operator"]) && !isset($_SESSION["admin"])){
			echo "
			<script>
				alert('masukkan enrollmentKey dahulu');
				document.location.href='../';
			</script>
			";
		}

		//mengirim informasi jika admin atau operator yang login
		if (isset($_SESSION["operator"]) || isset($_SESSION["admin"]) ) {
			$data["cek_operatoradmin"] = true;
		}


		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$data["video"] = $this->BSMI_model->getvideo($kode_matkul); 
		$this->load->view('header');
		$this->load->view('halaman_video',$data);			
	}

	public function tampilanmatkul($kode_prodi){
		//untuk tambah berkas harus login sebagai operator atau admin
		if(!isset($_SESSION["operator"]) && !isset($_SESSION["admin"])){
			echo "
			<script>
				alert('login dahulu');
				document.location.href='../auth/login/admin';
			</script>
			";
		}

		$data["prodi"] = $this->BSMI_model->getprodi($kode_prodi);
		$this->load->view('header');
		$this->load->view('halaman_tambahmatkul',$data);
	}

	public function editmatkul($kode_matkul){
		//untuk tambah berkas harus login sebagai operator atau admin
		if(!isset($_SESSION["operator"]) && !isset($_SESSION["admin"])){
			echo "
			<script>
				alert('login dahulu');
				document.location.href='../auth/login/admin';
			</script>
			";
		}

		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('header');
		$this->load->view('halaman_editmatkul',$data);
	}

	public function tampilanmateri($kode_matkul){
		//untuk tambah berkas harus login sebagai operator atau admin
		if(!isset($_SESSION["operator"]) && !isset($_SESSION["admin"])){
			echo "
			<script>
				alert('login dahulu');
				document.location.href='../auth/login/admin';
			</script>
			";
		}

		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('header');
		$this->load->view('halaman_tambahmateri',$data);
	}

	public function tampilansoal($kode_matkul){
		//untuk tambah berkas harus login sebagai operator atau admin
		if(!isset($_SESSION["operator"]) && !isset($_SESSION["admin"])){
			echo "
			<script>
				alert('login dahulu');
				document.location.href='../auth/login/admin';
			</script>
			";
		}

		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('header');
		$this->load->view('halaman_tambahsoal',$data);
	}

	public function tampilanvideo($kode_matkul){
		//untuk tambah berkas harus login sebagai operator atau admin
		if(!isset($_SESSION["operator"]) && !isset($_SESSION["admin"])){
			echo "
			<script>
				alert('login dahulu');
				document.location.href='../auth/login/admin';
			</script>
			";
		}

		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('header');
		$this->load->view('halaman_tambahvideo',$data);
	}

	public function addmatkul(){
		$kode_prodi = $this->input->post('kode_prodi');
		$this->form_validation->set_rules('kode_matkul','Kode Mata Kuliah','required');
		if($this->form_validation->run() == false) {
			redirect('add/matakuliah/'.$kode_prodi);
		}else{
			if($this->BSMI_model->tambahmatkul()==true){
				echo "
					<script>
						alert('Berhasil menambah mata kuliah');
						document.location.href='../dashboard/$kode_prodi';
					</script>
					";
			}else{
				echo "
					<script>
						alert('Gagal menambah video');
						document.location.href='../add/matakuliah/$kode_prodi';
					</script>
				";
			}
		}
	}

	public function updateDeskripsiMatkul(){
		$kode_matkul = $this->input->post('kode_matkul');
		$this->form_validation->set_rules('kode_matkul','Kode Mata Kuliah','required');
		if($this->form_validation->run() == false) {
			redirect('edit/matakuliah/'.$kode_matkul);
		}else{
			if($this->BSMI_model->updatematkul()==true){
				echo "
					<script>
						alert('Berhasil mengubah data mata kuliah');
						document.location.href='../matakuliah/$kode_matkul';
					</script>
					";
			}else{
				echo "
					<script>
						alert('Gagal mengubah data mata kuliah');
						document.location.href='../edit/matakuliah/$kode_matkul';
					</script>
				";
			}
		}
	}

	public function addmateri(){
		$kode_matkul = $this->input->post('kode_matkul');
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->form_validation->set_rules('judul_materi','Judul Materi','required');
		if($this->form_validation->run() == false) {
			redirect('add/materi/'.$kode_matkul);
		}else{
			if($this->BSMI_model->tambahmateri()==true){
				echo "
					<script>
						alert('berhasil menambah materi');
						document.location.href='../materi/$kode_matkul';
					</script>
					";
				}else{
					echo "
						<script>
							alert('gagal menamabah materi,file tidak boleh kosong');
							document.location.href='../add/materi/$kode_matkul';
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
			redirect('add/soal/'.$kode_matkul);
		}else{
			if($this->BSMI_model->tambahsoal()==true){
				echo "
					<script>
						alert('berhasil menambah soal');
						document.location.href='../soal/$kode_matkul';
					</script>
					";
			}else{
				echo "
					<script>
						alert('gagal menamabah soal,file tidak boleh kosong');
						document.location.href='../add/soal/$kode_matkul';
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
			redirect('add/video/'.$kode_matkul);
		}else{
			if($this->BSMI_model->tambahvideo()==true){
				echo "
					<script>
						alert('berhasil menambah video');
						document.location.href='../video/$kode_matkul';
					</script>
					";
			}else{
				echo "
					<script>
						alert('gagal menamabah video,link video harus diisi atau link tidak sesuai');
						document.location.href='../add/video/$kode_matkul';
					</script>
				";
			}
		}
	}


	public function hasiltombolhapusmateri($kode_matkul){
		//untuk hapus berkas harus login sebagai operator atau admin
		if(!isset($_SESSION["operator"]) && !isset($_SESSION["admin"])){
			echo "
			<script>
				alert('login dahulu');
				document.location.href='../auth/login/admin';
			</script>
			";
		}

		$data["materi"] = $this->BSMI_model->getmateri($kode_matkul); 
		$data["kode_matkul"] = $kode_matkul;
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('hasilhapusmateri',$data);	
	}

	public function hasiltombolhapussoal($kode_matkul){
		//untuk hapus berkas harus login sebagai operator atau admin
		if(!isset($_SESSION["operator"]) && !isset($_SESSION["admin"])){
			echo "
			<script>
				alert('login dahulu');
				document.location.href='../auth/login/admin';
			</script>
			";
		}

		$data["soal"] = $this->BSMI_model->getsoal($kode_matkul); 
		$data["kode_matkul"] = $kode_matkul;
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('hasilhapussoal',$data);	
	}

	public function hasiltombolhapusvideo($kode_matkul){
		//untuk hapus berkas harus login sebagai operator atau admin
		if(!isset($_SESSION["operator"]) && !isset($_SESSION["admin"])){
			echo "
			<script>
				alert('login dahulu');
				document.location.href='../auth/login/admin';
			</script>
			";
		}

		$data["video"] = $this->BSMI_model->getvideo($kode_matkul); 
		$data["kode_matkul"] = $kode_matkul;
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('hasilhapusvideo',$data);	
	}

	public function hapusmateri($kode_matkul){
		$datahapus =$_POST['pilih'];
		$this->BSMI_model->hapusmateri($datahapus,$kode_matkul);
	}

	public function hapussoal($kode_matkul){
		$datahapus =$_POST['pilih'];
		$this->BSMI_model->hapussoal($datahapus,$kode_matkul);
	}

	public function hapusvideo($kode_matkul){
		$datahapus =$_POST['pilih'];
		$this->BSMI_model->hapusvideo($datahapus,$kode_matkul);
	}

	public function halamanFaq(){
		$this->load->view('faq.php');
	}

	public function halamanAbout(){
		$this->load->view('about.php');
	}
}

