<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
	function view_profil()
	{
		$this->load->view('template/header');
		$this->load->view('homepage_view');
		$this->load->view('template/footer');
	}
}
