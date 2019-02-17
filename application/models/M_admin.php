<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_model{


	public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('admin')
				 ->order_by('id_admin', 'DESC')
				 ->get();
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this->db->insert("admin", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function edit($id_admin)
	{
		
		$query = $this->db->where("id_admin", $id_admin)
				->get("admin");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}

	public function update($data, $id)
	{
		
		$query = $this->db->update("admin", $data, $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($id)
	{
		
		$query = $this->db->delete("admin", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}


}