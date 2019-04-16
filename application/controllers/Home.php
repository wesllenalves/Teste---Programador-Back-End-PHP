<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{	
		$this->load->view('template/head');
		$this->load->view('index');
		$this->load->view('template/footer');
	}

	public function outro(){
		var_dump($this->input->post());
	}
}
