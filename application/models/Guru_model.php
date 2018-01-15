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

	/*public function getIndustri()
	{
		$query = $this->db->where('nama_guru_pembimbing', $this->session->userdata('jeneng'))
						  ->select('nama_industri')
						  ->get('tb_industri');
		if ($query->num_rows() > 0) {
         	return $query->row()->nama_industri;
     	}
     	return TRUE;
     	$guru = $this->session->userdata('jeneng');
     	$SQL = "SELECT nama_industri FROM tb_industri WHERE nama_guru_pembimbing = '$guru'";
     	$query = $this->db->query($SQL);
     	return $query->result_array();
	}*/

	public function getKotaSiswa()
	{

		$kueri = $this->db->where('nama_guru_pembimbing', $this->session->userdata('jeneng'))
						  ->order_by('nama_siswa', 'ASC')
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

	public function getNo()
	{
		$guru = $this->session->userdata('jeneng');
		$query =  $this->db->where('nama_guru', $guru)
						   ->select('no_telp_guru')
						   ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->no_telp_guru;
     	}
     	return TRUE;
	}

	public function editfoto($foto)
	{
		$id_gr = $this->session->userdata('id_user');
		$data = array(
				  	 'foto_guru' => $foto['file_name']
				);
		$this->db->where('id_user', $id_gr)->update('tb_user_guru', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function editprofil()
	{
		$id_gr = $this->session->userdata('id_user');
		$data = array(
					 'nama_guru' => $this->input->post('nama_guru'),
				  	 'no_telp_guru' => $this->input->post('no_telp'),
				  	 'kota' => $this->input->post('kota'),
				);
		$login = array(
					  'username' => $this->input->post('username'),
					  'password' => $this->input->post('password'),
				);
		$this->db->where('id_user', $id_gr)->update('tb_user_guru', $data);
		$this->db->where('id_user', $id_gr)->update('tb_login', $login);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getUser()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						  ->select('username')
						  ->get('tb_login');
		if ($query->num_rows() > 0) {
         	return $query->row()->username;
     	}
     	return TRUE;
	}

	public function getPass()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						  ->select('password')
						  ->get('tb_login');
		if ($query->num_rows() > 0) {
         	return $query->row()->password;
     	}
     	return TRUE;
	}

	/*public function join()
	{	
		$guru = $this->session->userdata('jeneng');
		$SQL = "SELECT * FROM tb_user_siswa, tb_industri WHERE tb_user_siswa.industri = tb_industri.nama_industri AND tb_industri.nama_guru_pembimbing = $guru;";
		$this->db->query($SQL)->result();

	}*/

}

/* End of file Guru_model.php */
/* Location: ./application/models/Guru_model.php */