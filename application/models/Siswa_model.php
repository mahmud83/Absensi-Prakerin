<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	// cek jika belum absen
	public function cekAbsen()
	{
		$today = date("Y-m-d");
		$query = $this->db->where('tanggal', $today)
						  ->where('id_user', $this->session->userdata('id_user'))
						  ->get('tb_post');
		return $query->num_rows() == 0;
	}

	public function genIDj()
	{
		$query = $this->db->order_by('id_post', 'DESC')->limit(1)->get('tb_post')->row('id_post');
		$lastNo = substr($query, 4);
		$next = $lastNo + 1;
		$kd = 'KET';
		return $kd.sprintf('%04s', $next);
	}

	public function tambahjurnal($foto)
	{
		$data = array (
				 		'isi' => $this->input->post('keterangan'),
				  		'foto_kegiatan' => $foto['file_name'],
				  		'id_user' => $this->session->userdata('id_user'),
				  		'tanggal' => date("Y-m-d"),
				  		'status' => 'Menunggu konfirmasi',
				  		'id_post' => $this->genIDj()
				  	  );
		$this->db->insert('tb_post', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getDataJurnal()
	{
		return $this->db->where('id_user', $this->session->userdata('id_user'))
						->order_by('tanggal', 'DESC')->get('tb_post')->result();
	}

}

/* End of file Siswa_model.php */
/* Location: ./application/models/Siswa_model.php */