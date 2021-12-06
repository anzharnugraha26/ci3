<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Mahasiswa extends CI_Model
{
	public function getDataMhs()
	{
		$this->db->select('*');
		$this->db->from('tbl_mahasiswa');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertData($data)
	{
		$this->db->insert('tbl_mahasiswa', $data);
	}

	public function editData($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_mahasiswa', $data);
	}

	public function getData($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_mahasiswa');
		return $query->row();
	}

	public function deleteMhs($id)
	{
		$this->db->where('id' , $id);
		$this->db->delete('tbl_mahasiswa');
	}
}
