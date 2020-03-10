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
		$this->load->view('halaman_prodi');
	}
}
