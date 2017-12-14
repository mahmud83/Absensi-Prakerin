<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
		$this->load->model('admin_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='dashboard_siswa_view';
			$data['isAbsen'] = $this->siswa_model->cekAbsen();
			$this->load->view('template_siswa_view', $data);
		} else {
			redirect('login');
		}

		// if ($this->siswa_model->cekAbsen() == TRUE) {
		// 	$this->session->set_flashdata('notif', 'Anda Belum Absen Hari Ini');
		// } else {
		// 	$this->session->set_flashdata('notif', 'Anda Sudah Absen Hari Ini');
		// }

		//tes
	}

	/*//show data siswa
	public function datasiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='profil_siswa_view';
			$data['detil'] = $this->siswa_model->getDataSiswa();
			$this->load->view('template_siswa_view', $data);
		} else {
			redirect('siswa');
		}
	}

	//edit data siswa view
	public function editsiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'edit_profil_siswa_view';
			//ambil data siswa
			$id_sw = $this->uri->segment(3);
			$data['detil'] = $this->admin_model->get_siswa_by_id($id_sw);
			$data['detill'] = $this->admin_model->get_siswal_by_id($id_sw);

			$this->load->view('template_siswa_view', $data);
		}
		else{
			redirect('admin/datasiswa');
		}
	}*/

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */