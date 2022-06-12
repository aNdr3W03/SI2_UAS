<?php

class Homepage extends CI_Controller
{
	function index()
	{
		$this->load->view('template/header');
		$this->load->view('homepage_view');
		$this->load->view('template/footer');
	}

	function denah()
	{
		$this->load->view('template/header');
		$this->load->view('denah_view');
		$this->load->view('template/footer');
	}
}
