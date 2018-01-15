<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

	public function genIDg()
	{
		$query = $this->db->order_by('id_user', 'DESC')->limit(1)->get('tb_user_guru')->row('id_user');
		$lastNo = substr($query, 2);
		$next = $lastNo + 1;
		$kd = 'GR';
		return $kd.sprintf('%02s', $next);
	}

	public function getIndustri()
	{
		$query = $this->db->get('tb_industri')->result();
		return $query;
	}

	public function getGuru()
	{
		$query = $this->db->get('tb_user_guru')->result();
		return $query;
	}

	public function tambahguru($foto)
	{
		$login = array (
				 		'username' => $this->input->post('username'), 
				 		'password' => $this->input->post('password'),
				  		'id_level' => '2',
				  		'id_user' => $this->genIDg(),
				  		'nama' => $this->input->post('nama_guru')
				  	  );
		$detail = array (
				 		'nama_guru' => $this->input->post('nama_guru'),
				  		'no_telp_guru' => $this->input->post('telp'),
				  		'kota' => $this->input->post('kota'),
				  		'foto_guru' => $foto['file_name'],
				  		'id_user' => $this->genIDg()
				  	  );
		$this->db->insert('tb_login', $login);
		$this->db->insert('tb_user_guru', $detail);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function tambahsiswa($foto)
	{
		$login = array (
				 		'username' => $this->input->post('username'), 
				 		'password' => $this->input->post('password'),
				  		'id_level' => '3',
				  		'id_user' => $this->genIDs(),
				  		'nama' => $this->input->post('nama_siswa')
				  	  );
		$detail = array (
				 		'nama_siswa' => $this->input->post('nama_siswa'),
				 		'kelas' => $this->input->post('kelas'),
				  		'no_telp_siswa' => $this->input->post('telp'),
				  		'kota' => $this->input->post('kota'),
				  		'jenis_kelamin' => $this->input->post('jk'),
				  		'alamat_prakerin' => $this->input->post('alamat'),
				  		'industri' => $this->input->post('industri'),
				  		'foto_siswa' => $foto['file_name'],
				  		'id_user' => $this->genIDs(),
				  		'nama_guru_pembimbing' => $this->input->post('gurupem')
				  	  );
		$this->db->insert('tb_login', $login);
		$this->db->insert('tb_user_siswa', $detail);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function genIDs()
	{
		$query = $this->db->order_by('id_user', 'DESC')->limit(1)->get('tb_user_siswa')->row('id_user');
		$lastNo = substr($query, 3);
		$next = $lastNo + 1;
		$kd = 'SW';
		return $kd.sprintf('%03s', $next);
	}

	public function getDataGuru()
	{
		return $this->db->order_by('nama_guru', 'ASC')->get('tb_user_guru')->result();
	}
	
	public function get_guru_by_id($id_gr){
		return $this->db->where('id_user', $id_gr)
						->get('tb_user_guru')
						->row();
	}

	public function get_guruu_by_id($id_gr){
		return $this->db->where('id_user', $id_gr)
						->get('tb_login')
						->row();
	}
	
	public function editguru($id_gr)
	{
		$data = array(
					 'nama_guru' => $this->input->post('nama_guru'),
					 'no_telp_guru' => $this->input->post('telp'),
					 'kota' => $this->input->post('kota'),
				);
		$login = array(
					 'username' => $this->input->post('username'),
					 'password' => $this->input->post('password'),
					 'nama' => $this->input->post('nama_guru'),
				);
		$this->db->where('id_user', $id_gr)->update('tb_user_guru', $data);
		$this->db->where('id_user', $id_gr)->update('tb_login', $login);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getDataSiswa()
	{
		return $this->db->order_by('industri', 'ASC')
						->order_by('nama_siswa', 'ASC')
						->get('tb_user_siswa')
						->result();
	}

	public function get_siswa_by_id($id_sw){
		return $this->db->where('id_user', $id_sw)
						->get('tb_user_siswa')
						->row();
	}

	public function get_siswal_by_id($id_sw){
		return $this->db->where('id_user', $id_sw)
						->get('tb_login')
						->row();
	}

	public function editsiswa($id_sw)
	{
		$data = array(
					 'nama_siswa' => $this->input->post('nama_siswa'),
				 	 'kelas' => $this->input->post('kelas'),
				  	 'no_telp_siswa' => $this->input->post('telp'),
				  	 'kota' => $this->input->post('kota'),
				  	 'jenis_kelamin' => $this->input->post('jk'),
				  	 'alamat_prakerin' => $this->input->post('alamat'),
				  	 'industri' => $this->input->post('industri')
				);
		$login = array(
					 'username' => $this->input->post('username'),
					 'password' => $this->input->post('password'),
					 'nama' => $this->input->post('nama_siswa'),
				);
		$this->db->where('id_user', $id_sw)->update('tb_user_siswa', $data);
		$this->db->where('id_user', $id_sw)->update('tb_login', $login);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function editfotosiswa($foto)
	{
		$id_sw = $this->uri->segment(3);
		$data = array(
				  	 'foto_siswa' => $foto['file_name']
				);
		$this->db->where('id_user', $id_sw)->update('tb_user_siswa', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function editfotoguru($foto)
	{
		$id_gr = $this->uri->segment(3);
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
	
	public function hapusguru($id_gr)
	{
		$this->db->where('id_user', $id_gr)->delete('tb_user_guru');
		$this->db->where('id_user', $id_gr)->delete('tb_login');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function hapussiswa($id_sw)
	{
		$this->db->where('id_user', $id_sw)->delete('tb_user_siswa');
		$this->db->where('id_user', $id_sw)->delete('tb_login');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function genIDi()
	{
		$query = $this->db->order_by('id_user', 'DESC')->limit(1)->get('tb_industri')->row('id_user');
		$lastNo = substr($query, 2);
		$next = $lastNo + 1;
		$kd = 'ID';
		return $kd.sprintf('%02s', $next);
	}

	public function addindustri()
	{
		$login = array (
				 		'username' => $this->input->post('username'), 
				 		'password' => $this->input->post('password'),
				  		'id_level' => '4',
				  		'id_user' => $this->genIDi(),
				  		'nama' => $this->input->post('nama_ind')
				  	  );
		$detail = array (
				 		'nama_industri' => $this->input->post('nama_ind'),
				  		'no_telp_industri' => $this->input->post('telp'),
				  		'alamat_industri' => $this->input->post('alamat'),
				  		'kota' => $this->input->post('kota'),
				  		'id_user' => $this->genIDi(),
				  		'nama_guru_pembimbing' =>  $this->input->post('nama_guru')
				  	  );
		$this->db->insert('tb_login', $login);
		$this->db->insert('tb_industri', $detail);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function editindustri($id_id)
	{
		$data = array(
					 'nama_industri' => $this->input->post('nama_industri'),
				  	 'no_telp_industri' => $this->input->post('telp'),
				  	 'kota' => $this->input->post('kota'),
				  	 'alamat_industri' => $this->input->post('alamat'),
				  	 'nama_guru_pembimbing' => $this->input->post('nama_guru_pembimbing')
				);
		$login = array(
					'nama' => $this->input->post('nama_guru'),
				);
		$this->db->where('id_user', $id_id)->update('tb_industri', $data);
		$this->db->where('id_user', $id_id)->update('tb_login', $login);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function hapusindustri($id_id)
	{
		$this->db->where('id_user', $id_id)->delete('tb_industri');
		$this->db->where('id_user', $id_id)->delete('tb_login');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_industri_by_id($id_id){
		return $this->db->where('id_user', $id_id)
						->get('tb_industri')
						->row();
	}

	public function get_industril_by_id($id_id){
		return $this->db->where('id_user', $id_id)
						->get('tb_login')
						->row();
	}

	public function getNamaGuru()
	{
		return $this->db->order_by('kota', 'ASC')
						->select('nama_guru')
						->get('tb_user_guru')
						->result();
	}

	public function getDataIndustri()
	{
		return $this->db->order_by('nama_industri', 'ASC')->get('tb_industri')->result();
	}

	public function countGuru()
	{
		return $this->db->count_all('tb_user_guru');
	}

	public function countSiswa()
	{
		return $this->db->count_all('tb_user_siswa');
	}

	public function countIndustri()
	{
		return $this->db->count_all('tb_industri');
	}
}
/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */