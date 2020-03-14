<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('BSMI_model'); //ngambil model model_lapor dari folder models
	
	}

	public function index()
	{
		$data['enrol'] = $this->BSMI_model->getenroll();
		$this->load->helper('url');
		$this->load->view('landing_page',$data);
	}


	public function page_prodi(){
		$data['sains'] = $this->BSMI_model->getsains();
		$data['jtik'] = $this->BSMI_model->getjtik();
		$data['jtpi'] = $this->BSMI_model->getjtpi();
		$this->load->helper('url');
		$this->load->view('halaman_prodi',$data);
	}

	public function page_matkul($kode_prodi){
		$this->load->helper('url');
		$data["prodi"] = $this->BSMI_model->getprodi($kode_prodi);
		$data["matkul"] = $this->BSMI_model->getmatkul($kode_prodi);
		$this->load->view('halaman_matakuliah',$data);
	}

	public function hasilcarimatkul($kode_prodi,$kode_matkul){
		$this->load->helper('url');
		$data["matkul"] = $this->BSMI_model->getmatkulcari($kode_prodi,$kode_matkul);
		$this->load->view('hasilcarimatkul',$data);	
	}

	public function konten($kode_matkul){
		$this->load->helper('url');
		$data["matkul"] = $this->BSMI_model->getmatkulkhusus($kode_matkul);
		$this->load->view('halaman_berkas',$data);		
	}
}
