<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Raimoruk extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_aimoruk');
		$this->db->order_by('id_aimoruk','desc');

		return $this->db->get()->result();

		
	}
}