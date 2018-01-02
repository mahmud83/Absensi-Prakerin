<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'dashboard_admin_view';
			$data['countG'] = $this->admin_model->countGuru();
			$data['countS'] = $this->admin_model->countSiswa();
			$data['countI'] = $this->admin_model->countIndustri();
			$data['title'] = 'Dashboard Admin - Prakerin SMK Telkom Malang 2017';
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}	
	}

	public function addguru()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='add_guru_view';
			$data['title'] = 'Tambah Data Guru - Prakerin SMK Telkom Malang 2017';
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}
	}

	public function addsiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='add_siswa_view';
			$data['title'] = 'Tambah Data Siswa - Prakerin SMK Telkom Malang 2017';
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}
	}

	//tambah data guru
	public function insertguru()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('nama_guru', 'Nama guru', 'trim|required');
		$this->form_validation->set_rules('telp', 'No. Telp', 'trim|required|min_length[11]|max_length[12]');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			$config['upload_path'] = './uploads/foto_guru/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '2000';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if($this->admin_model->tambahguru($this->upload->data()) == TRUE) {
					$data['main_view'] = 'add_guru_view';
					$this->session->set_flashdata('notif', 'Berhasil menambahkan data guru');
					redirect('admin/addguru');
				} else {
					$data['main_view'] = 'add_guru_view';
					$this->session->set_flashdata('notif', 'Gagal menambahkan data guru');
					redirect('admin/addguru');
				}
			} else {
				$data['main_view'] = 'admin';
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('admin/addguru');
			}
		} else {
			$data['main_view'] = 'admin';
			$this->session->set_flashdata('notif', 'Lengkapi semua field');
			redirect('admin/addguru');
		}
	}

	//tambah data siswa
	public function insertsiswa()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('nama_siswa', 'Nama guru', 'trim|required');
		$this->form_validation->set_rules('telp', 'No. Telp', 'trim|required|min_length[11]|max_length[12]|numeric');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('industri', 'Industri', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			$config['upload_path'] = './uploads/foto_siswa/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '2000';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if($this->admin_model->tambahsiswa($this->upload->data()) == TRUE) {
					$data['main_view'] = 'add_siswa_view';
					$this->session->set_flashdata('notif', 'Berhasil menambahkan data siswa');
					redirect('admin/addsiswa');
				} else {
					$data['main_view'] = 'add_siswa_view';
					$this->session->set_flashdata('notif', 'Gagal menambahkan data siswa');
					redirect('admin/addsiswa');
				}
			} else {
				$data['main_view'] = 'dashboard_admin';
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('admin/addsiswa');
			}
		} else {
			$data['main_view'] = 'dashboard_admin';
			$this->session->set_flashdata('notif', 'Lengkapi semua field');
			redirect('admin/addsiswa');
		}
	}

	//show data siswa
	public function datasiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='data_siswa_view';
			$data['title'] = 'Data Siswa - Prakerin SMK Telkom Malang 2017';
			$data['siswa'] = $this->admin_model->getDataSiswa();
			$this->load->view('template_view', $data);
		} else {
			redirect('admin');
		}
	}

	//show data guru
	public function dataguru()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='data_guru_view';
			$data['title'] = 'Data Guru - Prakerin SMK Telkom Malang 2017';
			$data['guru'] = $this->admin_model->getDataGuru();
			$this->load->view('template_view', $data);
		} else {
			redirect('admin');
		}
	}

	//edit data guru view
	public function editguru()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'edit_guru_view';
			$data['title'] = 'Ubah Data Guru - Prakerin SMK Telkom Malang 2017';
			//ambil data guru
			$id_gr = $this->uri->segment(3);
			$data['detil'] = $this->admin_model->get_guru_by_id($id_gr);

			$this->load->view('template_view', $data);
		}
		else{
			redirect('admin/dataguru');
		}
	}

	//update data guru
	public function updateguru($id_gr)
	{
		$this->form_validation->set_rules('nama_guru', 'Nama Guru', 'trim|required');
		$this->form_validation->set_rules('telp', 'No. Telp', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			$config['upload_path'] = './uploads/foto_guru/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_sizes'] = '2000';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if($this->admin_model->editguru($id_gr, $this->upload->data()) == TRUE) {
					$data['main_view'] = 'data_guru_view';
					$this->session->set_flashdata('notif', 'Berhasil mengubah data guru');
					$id_gr = $this->uri->segment(3);
					redirect('admin/dataguru');
				} else {
					$data['main_view'] = 'data_guru_view';
					$this->session->set_flashdata('notif', 'Gagal menambahkan guru');
					$id_gr = $this->uri->segment(3);
					redirect('admin/dataguru');
				}
			} else {
				$data['main_view'] = 'data_guru_view';
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				$id_gr = $this->uri->segment(3);
				redirect('admin/dataguru');
			}
		} else {
			$data['main_view'] = 'data_guru_view';
			$this->session->set_flashdata('notif', 'Lengkapi semua field');
			$id_gr = $this->uri->segment(3);
			redirect('admin/dataguru');
		}
	}

	//edit data siswa view
	public function editsiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'edit_siswa_view';
			$data['title'] = 'Ubah Data Siswa - Prakerin SMK Telkom Malang 2017';
			//ambil data siswa
			$id_sw = $this->uri->segment(3);
			$data['detil'] = $this->admin_model->get_siswa_by_id($id_sw);
			$data['detill'] = $this->admin_model->get_siswal_by_id($id_sw);

			$this->load->view('template_view', $data);
		}
		else{
			redirect('admin/datasiswa');
		}
	}

	//update data guru
	public function updatesiswa($id_sw)
	{
		$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
		$this->form_validation->set_rules('telp', 'No. Telp', 'trim|required|numeric');
		$this->form_validation->set_rules('industri', 'Industri', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Prakerin', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			$config['upload_path'] = './uploads/foto_siswa/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_sizes'] = '2000';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if($this->admin_model->editsiswa($id_sw, $this->upload->data()) == TRUE) {
					$data['main_view'] = 'data_siswa_view';
					$this->session->set_flashdata('notif', 'Berhasil mengubah data siswa');
					$id_sw = $this->uri->segment(3);
					redirect('admin/datasiswa');
				} else {
					$data['main_view'] = 'data_siswa_view';
					$this->session->set_flashdata('notif', 'Gagal mengubah data siswa');
					$id_sw = $this->uri->segment(3);
					redirect('admin/datasiswa');
				}
			} else {
				$data['main_view'] = 'data_siswa_view';
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				$id_sw = $this->uri->segment(3);
				redirect('admin/datasiswa');
			}
		} else {
			$data['main_view'] = 'data_siswa_view';
			$this->session->set_flashdata('notif', 'Lengkapi semua field');
			$id_sw = $this->uri->segment(3);
			redirect('admin/datasiswa');
		}
	}

	public function deleteguru()
	{
		$id_gr = $this->uri->segment(3);
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->admin_model->hapusguru($id_gr) == TRUE) {
				$this->session->set_flashdata('notif', 'Berhasil menghapus data guru');
				redirect('admin/dataguru');
			} else {
				$this->session->set_flashdata('notif', 'Gagal menghapus data guru');
				redirect('admin/dataguru');
			}
		} else {
			redirect('admin/dataguru');
		}
	}

	public function deletesiswa()
	{
		$id_sw = $this->uri->segment(3);
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->admin_model->hapussiswa($id_sw) == TRUE) {
				$this->session->set_flashdata('notif', 'Berhasil menghapus data siswa');
				redirect('admin/datasiswa');
			} else {
				$this->session->set_flashdata('notif', 'Gagal menghapus data siswa');
				redirect('admin/datasiswa');
			}
		} else {
			redirect('admin/datasiswa');
		}
	}

	public function addindustri()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'add_industri_view';
			$data['title'] = 'Tambah Data Industri - Prakerin SMK Telkom Malang 2017';
			$data['nama_guru'] = $this->admin_model->getNamaGuru();
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}
	}

	public function insertindustri()
	{
		if ($this->input->post('insert')) {
			$this->form_validation->set_rules('alamat', 'Alamat Industri', 'trim|required');
			if ($this->form_validation->run() == TRUE ) {
				if ($this->admin_model->addindustri() == TRUE) {
					$this->session->set_flashdata('notif', 'Berhasil menambah data industri');
					redirect('admin/addindustri');
				} else {
					$this->session->set_flashdata('notif', 'Gagal menambah data industri');
					redirect('admin/addindustri');
				}
			} else {
				$this->session->set_flashdata('notif', 'Lengkapi field');
				redirect('admin/addindustri');
			}
		}
	}

	public function dataindustri()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='data_industri_view';
			$data['title'] = 'Data Industri - Prakerin SMK Telkom Malang 2017';
			$data['industri'] = $this->admin_model->getDataIndustri();
			$this->load->view('template_view', $data);
		} else {
			redirect('admin');
		}
	}

	public function deleteindustri()
	{
		$id_id = $this->uri->segment(3);
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->admin_model->hapusindustri($id_id) == TRUE) {
				$this->session->set_flashdata('notif', 'Berhasil menghapus data industri');
				redirect('admin/dataindustri');
			} else {
				$this->session->set_flashdata('notif', 'Gagal menghapus data industri');
				redirect('admin/dataindustri');
			}
		} else {
			redirect('admin/dataindustri');
		}
	}

}

/* End of file dashboard_admin.php */
/* Location: ./application/controllers/dashboard_admin.php */