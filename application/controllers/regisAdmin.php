<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regisadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('regisAdmin_view');
    }

    public function insert()
    {
        $this->load->model('regis_model');
        // Cek apakah Nama Buku kosong
        $this->form_validation->set_rules('username', 'Nama', 'required', array('required' => 'Nama Admin harus diisi'));
        // Cek apakah Penulis Buku kosong
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

    public function delete_data($id_buku)
    {
        $id_buku = array('id_buku' => $id_buku);
        $this->load->model('buku_model');
        $this->buku_model->Delete('tbl_buku', $id_buku);
        redirect(base_url('admin'), 'refresh');
    }

    public function edit_data($id_buku)
    {
        $this->load->model('buku_model');
        $siswa = $this->buku_model->GetWhere('tbl_buku', array('id_buku' => $id_buku));
        $data = array(
            'id_buku' => $siswa[0]['id_buku'],
            'username' => $siswa[0]['username'],
            'password' => $siswa[0]['password'],
        );
        $this->load->view('editBuku_view', $data);
    }

    public function update_data()
    {
        $id_buku = $_POST['id_buku'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Cek apakah nama kosong
        $this->form_validation->set_rules('username', 'Nama', 'required', array('required' => 'Nama Buku harus diisi'));
        // Cek apakah KOM kosong
        $this->form_validation->set_rules('password', 'Penulis', 'required', array('required' => 'Penulis Buku harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id_buku' => $id_buku,
                'username' => $username,
                'password' => $password
            );

            $where = array('id_buku' => $id_buku);
            $this->load->model('buku_model');
            $res = $this->buku_model->Update('tbl_buku', $data, $where);
            if ($res > 0) {
                redirect(base_url('admin'), 'refresh');
            }
        } else {
            $this->load->model('buku_model');
            $siswa = $this->buku_model->GetWhere('tbl_buku', array('id_buku' => $id_buku));
            $data = array(
                'id_buku' => $siswa[0]['id_buku'],
                'username' => $siswa[0]['username'],
                'password' => $siswa[0]['password'],
            );
            $this->load->view('editBuku_view', $data);
        }
    }
}
