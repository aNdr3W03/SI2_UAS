<?php
class Contact extends CI_Controller
{
    public function people()
    {
        $this->load->view('template/header');
        $this->load->view('contact_view');
        $this->load->view('template/footer');
    }
}
