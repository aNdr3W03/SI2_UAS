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
        $this->load->view('regisAdmin_view');
    }

    public function insert()
    {
        $this->load->model('regis_model');
        // Cek apakah Nama Admin kosong
        $this->form_validation->set_rules('username', 'Nama', 'required', array('required' => 'Nama Admin harus diisi'));
        // Cek apakah Password kosong
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Password harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );

            $data = $this->regis_model->Insert('tbl_admin', $data);
            redirect(base_url('loginAdmin'), 'refresh');
        } else {
            $this->load->view('regisAdmin_view');
        }
    }

    public function delete_data($id)
    {
        $id = array('id' => $id);
        $this->load->model('regis_model');
        $this->regis_model->Delete('tbl_admin', $id);
        redirect(base_url('admin'), 'refresh');
    }

    public function edit_data($id)
    {
        $this->load->model('regis_model');
        $siswa = $this->regis_model->GetWhere('tbl_admin', array('id' => $id));
        $data = array(
            'id' => $siswa[0]['id'],
            'username' => $siswa[0]['username'],
            'password' => $siswa[0]['password'],
        );
        $this->load->view('editAdmin_view', $data);
    }

    public function update_data()
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Cek apakah Nama kosong
        $this->form_validation->set_rules('username', 'Nama', 'required', array('required' => 'Nama Admin harus diisi'));
        // Cek apakah Password kosong
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Password harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id' => $id,
                'username' => $username,
                'password' => $password
            );

            $where = array('id' => $id);
            $this->load->model('regis_model');
            $res = $this->regis_model->Update('tbl_admin', $data, $where);
            if ($res > 0) {
                redirect(base_url('admin'), 'refresh');
            }
        } else {
            $this->load->model('regis_model');
            $siswa = $this->regis_model->GetWhere('tbl_admin', array('id' => $id));
            $data = array(
                'id' => $siswa[0]['id'],
                'username' => $siswa[0]['username'],
                'password' => $siswa[0]['password'],
            );
            $this->load->view('editAdmin_view', $data);
        }
    }
}
