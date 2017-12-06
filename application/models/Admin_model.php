<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function tambahguru($foto)
	{
		$data = array (
				 		'username' => $this->input->post('username'), 
				 		'password' => $this->input->post('password'),
				 		'nama' => $this->input->post('nama_guru'),
				  		'no_telp' => $this->input->post('telp'),
				  		'kota' => $this->input->post('kota'),
				  		'level' => 'Guru',
				  		'foto' => $foto['file_name']
				  	  );
		$this->db->insert('tb_user', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function tambahsiswa($foto)
	{
		$data = array (
				 		'username' => $this->input->post('username'), 
				 		'password' => $this->input->post('password'),
				 		'nama' => $this->input->post('nama_siswa'),
				 		'kelas' => $this->input->post('kelas'),
				  		'no_telp' => $this->input->post('telp'),
				  		'kota' => $this->input->post('kota'),
				  		'jenis_kelamin' => $this->input->post('jk'),
				  		'alamat' => $this->input->post('alamat'),
				  		'industri' => $this->input->post('industri'),
				  		'level' => 'Siswa',
				  		'foto' => $foto['file_name']
				  	  );
		$this->db->insert('tb_user', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function lihatguru()
	{
		return $this->db->get('tb_user')->where('level' == 'Guru')
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */