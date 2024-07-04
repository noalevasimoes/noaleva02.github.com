<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategoria extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_kategoria');
		$this->db->order_by('id_kategoria','desc');

		return $this->db->get()->result();

		
	}

	public function add($data)
	{
		$this->db->insert('tbl_kategoria',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_kategoria', $data['id_kategoria']);
		$this->db->update('tbl_kategoria', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kategoria',$data['id_kategoria']);
		$this->db->delete('tbl_kategoria',$data);
	}

}


