<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aimoruk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_aimoruk');
	}

	public function index()
	{
		$data = array('title' => 'SI_Aimoruk',
                    'title2' => 'Dados Aimoruk',
					'aimoruk' => $this->M_aimoruk->lists(),
						'isi' => 'admin/aimoruk/index'
						 );
		$this->load->view('admin/layout/v_wrapper',$data,False);
	}

	public function add()
	{
		$data = array(
						'id_admin' => $this->input->post('id_admin'),
						'naran_aimoruk' => $this->input->post('naran_aimoruk'),
						'id_kategoria' => $this->input->post('id_kategoria'),
						'tipu_aimoruk' => $this->input->post('tipu_aimoruk'),
						'presu_faan' => $this->input->post('presu_faan'),
						'modelu_aimoruk' => $this->input->post('modelu_aimoruk'),
						'stok' => $this->input->post('stok'),
						'id_supllier' => $this->input->post('id_supllier'),
						'data_validade' => $this->input->post('data_validade')

						);

						$this->M_aimoruk->add($data);
						$this->session->set_flashdata('mensajen','Dados aumenta ona !!');
						redirect('aimoruk');

	}

	public function edit($id_aimoruk)
	{
		$data = array(
						'id_aimoruk' =>$id_aimoruk,
						'id_admin' => $this->input->post('id_admin'),
						'naran_aimoruk' => $this->input->post('naran_aimoruk'),
						'id_kategoria' => $this->input->post('id_kategoria'),
						'tipu_aimoruk' => $this->input->post('tipu_aimoruk'),
						'presu_faan' => $this->input->post('presu_faan'),
						'modelu_aimoruk' => $this->input->post('modelu_aimoruk'),
						'stok' => $this->input->post('stok'),
						'id_supllier' => $this->input->post('id_supllier'),
						'data_validade' => $this->input->post('data_validade')


						);

						$this->M_aimoruk->edit($data);
						$this->session->set_flashdata('mensajen','Dados hadia ona !!');
						redirect('aimoruk');

	}

	public function delete($id_aimoruk)
	{
		$data = array(
						'id_aimoruk' =>$id_aimoruk,
						);

						$this->M_aimoruk->delete($data);
						$this->session->set_flashdata('mensajen','Dados susesu hamos ona !!');
						redirect('aimoruk');

	}

}
