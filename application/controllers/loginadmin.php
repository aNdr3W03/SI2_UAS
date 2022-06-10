<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('loginadmin_view');
    }

    function login_action()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );

        $cek = $this->login_model->cek_login("tbl_admin", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url('admin'));
        } else {
            echo "Username dan password admin!";
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('loginadmin'));
    }
}
