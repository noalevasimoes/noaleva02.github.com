<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raimoruk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Raimoruk');
	}

	public function index()
	
	{
		$data = array('title' => 'SI_Aimoruk',
                    'title2' => 'Dados Aimoruk',
					'aimoruk' => $this->M_Raimoruk->lists(),
						'isi' => 'R_Aimoruk'
						 );
		$this->load->view('R_Aimoruk',$data,False);

		
	}

	
		
}
