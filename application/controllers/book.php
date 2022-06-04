<?php
class Book extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('book_view');
        $this->load->view('template/footer');
    }
}
