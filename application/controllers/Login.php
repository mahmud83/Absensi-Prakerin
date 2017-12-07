<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE) {
			if ($this->session->userdata('role') == '1') {
				redirect('admin');
			} else if ($this->session->userdata('role') == '2') {
				redirect('dashboard_guru');
			} else if ($this->session->userdata('role') == '3') {
				redirect('dashboard_siswa');
			}
		} else {
			$this->load->view('login_view');
		}
	}

	//login
	public function masuk()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			if ($this->form_validation->run() == TRUE ) {
				if ($this->login_model->cek() == TRUE) {
					if ($this->session->userdata('role') == '1') {
						redirect('admin');
					} else if ($this->session->userdata('role') == '2') {
						redirect('dashboard_guru');
					} else if ($this->session->userdata('role') == '3') {
						redirect('dashboard_siswa');
					}
				} else {
					$data = $this->session->set_flashdata('notif', 'Login gagal');
					redirect('login');
				}
			} else {
				$data = $this->session->set_flashdata('notif', validation_errors());
					redirect('login');
			}
		}
	}

	//tambah data guru
	public function addguru()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='add_guru_view';
			$this->load->view('template_admin_view', $data);
		} else {
			redirect('login');
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */