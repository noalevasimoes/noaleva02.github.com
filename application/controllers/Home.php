<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array('title' => 'SI_Aimoruk',
						'title2' => 'Dashboard',
						'isi' => 'v_home'
						 );
		$this->load->view('layout/v_wrapper',$data,False);
	}
}
