<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industri_model extends CI_Model {

	public function getKota()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('kota')
						 ->get('tb_industri');
		if ($query->num_rows() > 0) {
         	return $query->row()->kota;
     	}
     	return TRUE;
	}

	public function getIndustri()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('nama_industri')
						 ->get('tb_industri');
		if ($query->num_rows() > 0) {
         	return $query->row()->nama_industri;
     	}
     	return TRUE;
	}

	public function getPost()
	{
		$query = $this->getIndustri();

		return $this->db->where('industri', $query)
						->get('tb_post')
						->result();	
	}

	public function updatestatus()
	{
		$id = $this->uri->segment(3);
		return $this->db->where('id_post', $id)
						->set('status', 'Sudah dikonfirmasi')
						->update('tb_post');
	}

}

/* End of file Industri_model.php */
/* Location: ./application/models/Industri_model.php */