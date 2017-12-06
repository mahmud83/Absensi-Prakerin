<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$array = array(
			'username' => '',
			'logged_in'=> FALSE
		);
		
		$this->session->set_userdata( $array );
		redirect('/');		
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */