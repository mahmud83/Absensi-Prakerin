<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('industri_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='dashboard_industri_view';
			$data['title'] = 'Data Industri - Prakerin SMK Telkom Malang 2017';
			$data['kota'] = $this->industri_model->getKota();
			$data['jurnal'] = $this->industri_model->getPost();
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}		
	}

	public function updatestatus()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='dashboard_industri_view';
			$this->industri_model->updatestatus();
			$this->load->view('template_view', $data);
			redirect('industri');
		} else {
			redirect('login');
		}
	}

}

/* End of file Industri.php */
/* Location: ./application/controllers/Industri.php */