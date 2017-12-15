<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

	public function getFoto()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('foto_guru')
						 ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->foto_guru;
     	}
     	return TRUE;
	}

	public function getKota()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('kota')
						 ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->kota;
     	}
     	return TRUE;
	}

}

/* End of file Guru_model.php */
/* Location: ./application/models/Guru_model.php */