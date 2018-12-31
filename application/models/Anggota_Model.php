<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Anggota_Model extends CI_Model
{
	public function index()
	{
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->where('anggota.deleted_at is null', null);
		$this->db->order_by('anggota.id_anggota');
		return $this->db->get();
	}

	public function create ($data)
	{
		if($this->db->insert('anggota', $data)){
			return true;
		}else{
			return false;
		}
	}

		public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->where('anggota.id_anggota', $id);

		return $this->db->get();
	}

	public function update($data, $id)
	{
		$this->db->set($data);
		$this->db->where('id_anggota', $id);
		if($this->db->update('anggota'))
		{
			return true;
		}else{
			return false;
		}

	}

	public function delete($data, $id)
	{
		$this->db->set($data);
		$this->db->where('id_anggota', $id);
		if($this->db->update('anggota'))
		{
			return true;
		}else{
			return false;
		}
	}
}