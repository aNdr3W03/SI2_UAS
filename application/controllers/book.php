<?php
class Book extends CI_Controller
{
    public function index()
    {
        $this->load->model('book_model');

        $data = $this->book_model->GetBuku('tbl_buku');

        $data = array('data' => $data);

        $this->load->view('book_view', $data);
    }
}
