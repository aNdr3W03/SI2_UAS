<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Validasiperson extends CI_Controller
{
    function index()
    {
        $this->form_validation->set_rules('username', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('validasiPerson_input');
        } else {

            echo 'Validasi Sukses!';
        }
    }
}
