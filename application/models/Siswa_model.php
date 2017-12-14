<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function cekAbsen()
	{
		$today = date("Y-m-d");
		$query = $this->db->where('tanggal', $today)
						  ->where('id_user', $this->session->userdata('id_user'))
						  ->get('tb_post');
		return $query->num_rows() == 0;
	}

}

/* End of file Siswa_model.php */
/* Location: ./application/models/Siswa_model.php */