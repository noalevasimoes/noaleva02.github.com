<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aimoruk extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_aimoruk');
		$this->db->order_by('id_aimoruk','desc');

		return $this->db->get()->result();

		
	}

	public function add($data)
	{
		$this->db->insert('tbl_aimoruk',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_aimoruk', $data['id_aimoruk']);
		$this->db->update('tbl_aimoruk', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_aimoruk', $data['id_aimoruk']);
		$this->db->delete('tbl_aimoruk', $data);
	}
}
