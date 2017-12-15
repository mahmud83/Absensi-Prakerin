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
			$data['foto'] = $this->admin_model->getDataSiswa();
			$this->load->view('template_siswa_view', $data);
		} else {
			redirect('login');
		}
	}

	/*//show data siswa
	public function insertjurnal()
	{
		$this->form_validation->set_rules('keterangan', 'Kegiatan Prakerin', 'trim|required|min_length[15]');
		if ($this->form_validation->run() == TRUE ) {
			$config['upload_path'] = './uploads/foto_prakerin/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '2000';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if($this->siswa_model->tambahjurnal($this->upload->data()) == TRUE) {
					$data['main_view'] = 'dashboard_siswa_view';
					$this->session->set_flashdata('notif', 'Berhasil menambahkan data guru');
					redirect('siswa');
				} else {
					$data['main_view'] = 'dashboard_siswa_view';
					$this->session->set_flashdata('notif', 'Gagal menambahkan data guru');
					redirect('siswa');
				}
			} else {
				$data['main_view'] = 'dashboard_siswa_view';
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('siswa');
			}
		} else {
			$data['main_view'] = 'dashboard_siswa_view';
			$this->session->set_flashdata('notif', validation_errors());
			redirect('siswa');
		}
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */