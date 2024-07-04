<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_supplier');
	}

	public function index()
	{
		$data = array('title' => 'SI_Aimoruk',
                    'title2' => 'Dados Supplier',
					'supplier' => $this->M_supplier->lists(),
						'isi' => 'admin/supplier/index'
						 );
		$this->load->view('admin/layout/v_wrapper',$data,False);
	}

	public function add()
	{
		$data = array(
						'naran_supplier' => $this->input->post('naran_supplier'),
						'fatin_supplier' => $this->input->post('fatin_supplier'),
						'no_telefone' => $this->input->post('no_telefone'),
						'data_supplier' => $this->input->post('data_supplier'),

						);

						$this->M_supplier->add($data);
						$this->session->set_flashdata('mensajen','Dados aumenta ona !!');
						redirect('supplier');

	}

	public function edit($id_supplier)
	{
		$data = array(
						'id_supplier' => $id_supplier,
						'naran_supplier' => $this->input->post('naran_supplier'),
						'fatin_supplier' => $this->input->post('fatin_supplier'),
						'no_telefone' => $this->input->post('no_telefone'),
						'data_supplier' => $this->input->post('data_supplier')

						);

						$this->M_supplier->edit($data);
						$this->session->set_flashdata('mensajen','Dados hadia ona !!');
						redirect('supplier');

	}

	public function delete($id_supplier)
	{
		$data = array(
						'id_supplier' =>$id_supplier,
						);

						$this->M_supplier->delete($data);
						$this->session->set_flashdata('mensajen','Dados susesu hamos ona !!');
						redirect('supplier');

	}
}
