<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategoria');
	}


	public function index()
	{
		$data = array('title' => 'SI_Aimoruk',
                    'title2' => 'Dados Kategoria Aimoruk',
					'kategoria' => $this->M_kategoria->lists(),
						'isi' => 'admin/kategoria/index'
						 );
		$this->load->view('admin/layout/v_wrapper',$data,False);
	}

	public function add()
	{
		$data = array(
						'naran_kategoria' => $this->input->post('naran_kategoria'),
						'deskrisaun' => $this->input->post('deskrisaun')

						);

						$this->M_kategoria->add($data);
						$this->session->set_flashdata('mensajen','Dados aumenta ona !!');
						redirect('kategoria');

	}

	public function edit($id_kategoria)
	{
		$data = array(
						'id_kategoria' =>$id_kategoria,
						'naran_kategoria' => $this->input->post('naran_kategoria'),
						'deskrisaun' => $this->input->post('deskrisaun')
						);

						$this->M_kategoria->edit($data);
						$this->session->set_flashdata('mensajen','Dados hadia ona !!');
						redirect('kategoria');
	}

	public function delete($id_kategoria)
	{
		$data = array(
						'id_kategoria' =>$id_kategoria,
						);

						$this->M_kategoria->delete($data);
						$this->session->set_flashdata('mensajen','Dados susesu hamos ona !!');
						redirect('kategoria');

	}
}
