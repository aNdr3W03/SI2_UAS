<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("loginadmin"));
        }
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('admin_view');
        $this->load->view('template/footer');
    }
}
