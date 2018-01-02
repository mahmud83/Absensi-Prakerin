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
			$data['jurnal'] = $this->siswa_model->getDatajurnal();
			$data['kelas'] = $this->siswa_model->getKelas();
			$data['foto'] = $this->siswa_model->getFoto();
			$data['industri'] = $this->siswa_model->getIndustri();
			$data['kota'] = $this->siswa_model->getKota();
			$data['title'] = 'Dashboard Siswa - Prakerin SMK Telkom Malang 2017';
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}
	}
	public function insertjurnal()
	{
		$this->form_validation->set_rules('keterangan', 'Kegiatan Prakerin', 'trim|required|min_length[7]');
		if ($this->form_validation->run() == TRUE ) {
			$config['upload_path'] = './uploads/foto_prakerin/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '2000';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto')) {
				if($this->siswa_model->tambahjurnal($this->upload->data()) == TRUE) {
					$data['main_view'] = 'dashboard_siswa_view';
					$this->session->set_flashdata('notif', 'Berhasil absen');
					redirect('siswa');
				} else {
					$data['main_view'] = 'dashboard_siswa_view';
					$this->session->set_flashdata('notif', 'Gagal absen');
					redirect('siswa');
				}
			} else {
				$data['main_view'] = 'dashboard_siswa_view';
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('siswa');
			}
		} else {
			$data['main_view'] = 'dashboard_siswa_view';
			$this->session->set_flashdata('notif', 'The Kegiatan Prakerin field must be at least 10 characters in length.');
			redirect('siswa');
		}
	}

	public function datasiswa()
	{
		$data['$title'] = 'Profil Siswa - Prakerin SMK Telkom Malang 2017';
	}
}
/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */