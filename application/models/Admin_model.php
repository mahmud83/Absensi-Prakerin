<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

	public function getIDfromtbg()
	{
		$query = $this->db->select('id_user')->order_by('id_user', 'DESC')->limit(1)->get('tb_user_guru')->row('id_user');
		$lastNo = substr($query, 2);
		$next = $lastNo + 1;
		$kd = 'GR';
		return $kd.sprintf('%02s', $next);
	}

	public function genIDg()
	{
		$query = $this->db->order_by('id_user', 'DESC')->limit(1)->get('tb_user_guru')->row('id_user');
		$lastNo = substr($query, 2);
		$next = $lastNo + 1;
		$kd = 'GR';
		return $kd.sprintf('%02s', $next);
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
				  		'id_user_guru' => $this->getIDfromtbg(),
				  		'id_user' => $this->getIDfromtbg()
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
				  		'id_user_siswa' => $this->getIDfromtbs(),
				  		'id_user' => $this->getIDfromtbs()
				  	  );
		$this->db->insert('tb_login', $login);
		$this->db->insert('tb_user_siswa', $detail);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getIDfromtbs()
	{
		$query = $this->db->select('id_user')->order_by('id_user', 'DESC')->limit(1)->get('tb_user_siswa')->row('id_user');
		$lastNo = substr($query, 3);
		$next = $lastNo + 1;
		$kd = 'SW';
		return $kd.sprintf('%03s', $next);
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
		return $this->db->where('id_user_guru', $id_gr)
						->get('tb_user_guru')
						->row();
	}
	
	public function editguru($id_gr, $foto)
	{
		$data = array(
					 'nama_guru' => $this->input->post('nama_guru'),
					 'no_telp_guru' => $this->input->post('telp'),
					 'kota' => $this->input->post('kota'),
					 'foto_guru' => $foto['file_name'] 
				);
		$this->db->where('id_user_guru', $id_gr)->update('tb_user_guru', $data);
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
		return $this->db->where('id_user_siswa', $id_sw)
						->get('tb_user_siswa')
						->row();
	}

	public function get_siswal_by_id($id_sw){
		return $this->db->where('id_user', $id_sw)
						->get('tb_login')
						->row();
	}

	public function editsiswa($id_sw, $foto)
	{
		$data = array(
					 'nama_siswa' => $this->input->post('nama_siswa'),
				 	 'kelas' => $this->input->post('kelas'),
				  	 'no_telp_siswa' => $this->input->post('telp'),
				  	 'kota' => $this->input->post('kota'),
				  	 'jenis_kelamin' => $this->input->post('jk'),
				  	 'alamat_prakerin' => $this->input->post('alamat'),
				  	 'industri' => $this->input->post('industri'),
				  	 'foto_siswa' => $foto['file_name'],
				);
		$this->db->where('id_user_siswa', $id_sw)->update('tb_user_siswa', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function hapusguru($id_gr)
	{
		$this->db->where('id_user_guru', $id_gr)->delete('tb_user_guru');
		$this->db->where('id_user', $id_gr)->delete('tb_login');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function hapussiswa($id_sw)
	{
		$this->db->where('id_user_siswa', $id_sw)->delete('tb_user_siswa');
		$this->db->where('id_user', $id_sw)->delete('tb_login');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function genIDInd()
	{
		$query = $this->db->order_by('id_user', 'DESC')->limit(1)->get('tb_industri')->row('id_user');
		$lastNo = substr($query, 2);
		$next = $lastNo + 1;
		$kd = 'ID';
		return $kd.sprintf('%02s', $next);
	}

	public function getIDfromtbInd()
	{
		$query = $this->db->select('id_user')->order_by('id_user', 'DESC')->limit(1)->get('tb_industri')->row('id_user');
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
				  		'id_user' => $this->genIDInd(),
				  		'nama' => $this->input->post('nama_ind')
				  	  );
		$detail = array (
				 		'nama_industri' => $this->input->post('nama_ind'),
				  		'no_telp_industri' => $this->input->post('telp'),
				  		'alamat_industri' => $this->input->post('alamat'),
				  		'kota' => $this->input->post('kota'),
				  		'id_user_industri' => $this->getIDfromtbInd(),
				  		'id_user' => $this->getIDfromtbInd(),
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

	public function hapusindustri($id_id)
	{
		$this->db->where('id_user_industri', $id_id)->delete('tb_industri');
		$this->db->where('id_user', $id_id)->delete('tb_login');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
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
}
/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */