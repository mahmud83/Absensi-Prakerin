<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/*public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}*/

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE) {
			redirect(base_url('index.php/dashboard_admin'));
		} else {
			$this->load->view('login_view');
		}
	}

	/*login
	public function masuk()
	{
		if ($this->input->post('login')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			if ($this->form_validation->run() == TRUE ) {
				if ($this->login_model->cek() == TRUE) {
					if ($this->session->userdata('role') == 'ad') {
						redirect('dashboard_admin');
					} else if ($this->session->userdata('role') == 'pb') {
						redirect('dashboard_guru');
					} else if ($this->session->userdata('role') == 'sw') {
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
	*/

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */