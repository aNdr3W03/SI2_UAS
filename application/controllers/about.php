<?php
class About extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('about_view');
        $this->load->view('template/footer');
    }
}
