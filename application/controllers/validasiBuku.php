<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Validasibuku extends CI_Controller
{
    function index()
    {
        $this->form_validation->set_rules('nama_buku', 'Nama', 'required');
        $this->form_validation->set_rules('penulis_buku', 'Penulis', 'required');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('validasi_input');
        } else {

            echo 'Validasi Sukses!';
        }
    }
}
