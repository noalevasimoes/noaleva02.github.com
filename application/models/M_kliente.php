<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kliente extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_kliente');
		$this->db->order_by('id_kliente','desc');

		return $this->db->get()->result();

		
	}

	public function add($data)
	{
		$this->db->insert('tbl_kliente',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_kliente', $data['id_kliente']);
		$this->db->update('tbl_kliente', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kliente',$data['id_kliente']);
		$this->db->delete('tbl_kliente',$data);
	}
}
