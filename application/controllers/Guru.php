<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('guru_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='dashboard_guru_view';
			$data['title'] = 'Dashboard Guru - Prakerin SMK Telkom Malang 2017';
			$data['foto'] = $this->guru_model->getFoto();
			$data['kota'] = $this->guru_model->getKota();
			$data['siswa'] = $this->guru_model->getKotaSiswa();
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}	
	}

	public function logout()
	{
		$array = array(
			'username' => '',
			'logged_in'=> FALSE
		);
		
		$this->session->set_userdata( $array );
		redirect('login');
	}
	
	public function datajurnal()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'data_absen_view';
			$data['title'] = 'Jurnal Kegiatan Prakerin - Prakerin SMK Telkom Malang 2017';
			$data['foto'] = $this->guru_model->getFoto();
			$data['kota'] = $this->guru_model->getKota();
			//ambil data absen
			$id_sw = $this->uri->segment(3);
			$data['jurnal'] = $this->guru_model->get_post_by_id();
			$data['nama'] = $this->guru_model->getNamaSiswa();

			$this->load->view('template_view', $data);
		}
		else{
			redirect('login');
		}
	}
}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */