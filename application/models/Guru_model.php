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

	public function getIndustri()
	{
		$query = $this->db->where('nama_guru_pembimbing', $this->session->userdata('jeneng'))
						  ->select('nama_industri')
						  ->get('tb_industri');
		if ($query->num_rows() > 0) {
         	return $query->row()->nama_industri;
     	}
     	return TRUE;
	}

	public function getKotaSiswa()
	{
		$query = $this->getKota();
		$queri = $this->getIndustri();

		$kueri = $this->db->where('kota', $query)
						  ->where('industri', $queri)
						  ->get('tb_user_siswa')
						  ->result();
		return $kueri;
	}

	public function get_post_by_id()
	{
		$id_sw = $this->uri->segment(3);
		return $this->db->where('id_user', $id_sw)
						->order_by('tanggal', 'DESC')
						->get('tb_post')
						->result();
	}

	public function getNamaSiswa()
	{
		$id_sw = $this->uri->segment(3);
		$query = $this->db->where('id_user', $id_sw)
						  ->select('nama_siswa')
						  ->get('tb_user_siswa');
		if ($query->num_rows() > 0) {
         	return $query->row()->nama_siswa;
     	}
     	return TRUE;
	}

}

/* End of file Guru_model.php */
/* Location: ./application/models/Guru_model.php */