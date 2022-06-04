<?php
defined('BASEPATH') or exit('No direct script access allowed');

class homepage extends CI_Controller
{

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('homepage_view');
		$this->load->view('template/footer');
	}
}
