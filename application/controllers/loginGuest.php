<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginguest extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('template/header');
        $this->load->view('loginGuest_view');
        $this->load->view('template/footer');
    }

    function login_action()
    {
        $this->load->view('template/header');
        // Cek apakah Username kosong
        $this->form_validation->set_rules('username', 'Nama', 'required', array('required' => 'Silahkan mengisi Username'));
        // Cek apakah Password kosong
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Silahkan mengisi Password'));
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => sha1($password)
        );

        if ($this->form_validation->run() == TRUE) {
            $cek = $this->login_model->cek_login("tbl_guest", $where)->num_rows();
            if ($cek > 0) {
                $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                );
                $this->session->set_userdata($data_session);
                redirect(base_url('guest'));
            } else {
                echo "Username atau password guest salah!";
            }
        } else {
            $this->load->view('loginGuest_view');
        }
        $this->load->view('template/footer');
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('loginGuest'));
    }
}
