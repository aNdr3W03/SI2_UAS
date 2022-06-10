<?php
class Buku extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->model('buku_model');

        $data = $this->buku_model->GetBuku('tbl_buku');

        $data = array('data' => $data);

        $this->load->view('buku_view', $data);
        $this->load->view('template/footer');
    }
}
