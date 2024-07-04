<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_supplier');
		$this->db->order_by('id_supplier','desc');

		return $this->db->get()->result();

		
	}

	public function add($data)
	{
		$this->db->insert('tbl_supplier',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_supplier', $data['id_supplier']);
		$this->db->update('tbl_supplier', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_supplier',$data['id_supplier']);
		$this->db->delete('tbl_supplier',$data);
	}
}
