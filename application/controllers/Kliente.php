<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kliente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kliente');
	}

	public function index()
	{
		$data = array('title' => 'SI_Aimoruk',
                    'title2' => 'Dados Kliente',
					'kliente' => $this->M_kliente->lists(),
						'isi' => 'admin/kliente/index'
						 );
		$this->load->view('admin/layout/v_wrapper',$data,False);
	}

	public function add()
	{
		$data = array(
						'naran_kliente' => $this->input->post('naran_kliente'),
						'hela_fatin' => $this->input->post('hela_fatin'),
						'no_telefone' => $this->input->post('no_telefone'),
						'id_aimoruk' => $this->input->post('id_aimoruk'),

						);

						$this->M_kliente->add($data);
						$this->session->set_flashdata('mensajen','Dados aumenta ona !!');
						redirect('kliente');

	}

	public function edit($id_kliente)
	{
		$data = array(
						'id_kliente' =>$id_kliente,
						'naran_kliente' => $this->input->post('naran_kliente'),
						'hela_fatin' => $this->input->post('hela_fatin'),
						'no_telefone' => $this->input->post('no_telefone'),
						'id_aimoruk' => $this->input->post('id_aimoruk')

						);

						$this->M_kliente->edit($data);
						$this->session->set_flashdata('mensajen','Dados hadia ona !!');
						redirect('kliente');

	}

	public function delete($id_kliente)
	{
		$data = array(
						'id_kliente' =>$id_kliente,
						);

						$this->M_kliente->delete($data);
						$this->session->set_flashdata('mensajen','Dados susesu hamos ona !!');
						redirect('kliente');

	}
}
