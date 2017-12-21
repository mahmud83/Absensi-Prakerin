<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='dashboard_industri_view';
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}		
	}

}

/* End of file Industri.php */
/* Location: ./application/controllers/Industri.php */