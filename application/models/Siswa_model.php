<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function getDataSiswa()
	{
		return $this->db->where('id_user', $this->session->userdata('id_user'))
					    ->get('tb_user_siswa')
					    ->row();
	}

}

/* End of file Siswa_model.php */
/* Location: ./application/models/Siswa_model.php */