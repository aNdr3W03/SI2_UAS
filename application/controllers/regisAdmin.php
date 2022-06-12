<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regisadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('regis_model');
    }

    function index()
    {
        $this->load->view('template/header');
        $this->load->view('regisAdmin_view');
        $this->load->view('template/footer');
    }

    public function insert()
    {
        $this->load->view('template/header');
        $this->load->model('regis_model');
        // Cek apakah Nama Admin kosong
        $this->form_validation->set_rules('username', 'Nama', 'required', array('required' => 'Nama Admin harus diisi'));
        // Cek apakah Password kosong
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Password harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'password' => sha1($this->input->post('password'))
            );

            $data = $this->regis_model->Insert('tbl_admin', $data);
            redirect(base_url('loginAdmin'), 'refresh');
        } else {
            $this->load->view('regisAdmin_view');
        }
        $this->load->view('template/footer');
    }
}
