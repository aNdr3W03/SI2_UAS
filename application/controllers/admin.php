<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("loginadmin"));
        }
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->model('buku_model');

        $data = $this->buku_model->GetBuku('tbl_buku');

        $data = array('data' => $data);

        $this->load->view('admin_view', $data);
        $this->load->view('template/footer');
    }

    public function add_data()
    {
        $this->load->view('template/header');
        $this->load->view('tambahBuku_view');
        $this->load->view('template/footer');
    }

    public function insert()
    {
        $this->load->view('template/header');
        $this->load->model('buku_model');
        // Cek apakah Nama Buku kosong
        $this->form_validation->set_rules('nama_buku', 'Nama', 'required', array('required' => 'Nama Buku harus diisi'));
        // Cek apakah Penulis Buku kosong
        $this->form_validation->set_rules('penulis_buku', 'Penulis', 'required', array('required' => 'Penulis Buku harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id_buku' => $this->input->post('id_buku'),
                'nama_buku' => $this->input->post('nama_buku'),
                'penulis_buku' => $this->input->post('penulis_buku')
            );

            $data = $this->buku_model->Insert('tbl_buku', $data);
            redirect(base_url('admin'), 'refresh');
        } else {
            $this->load->view('tambahBuku_view');
        }
        $this->load->view('template/footer');
    }

    public function delete_data($id_buku)
    {
        $this->load->view('template/header');
        $id_buku = array('id_buku' => $id_buku);
        $this->load->model('buku_model');
        $this->buku_model->Delete('tbl_buku', $id_buku);
        redirect(base_url('admin'), 'refresh');
        $this->load->view('template/footer');      
    }

    public function edit_data($id_buku)
    {
        $this->load->view('template/header');
        $this->load->model('buku_model');
        $siswa = $this->buku_model->GetWhere('tbl_buku', array('id_buku' => $id_buku));
        $data = array(
            'id_buku' => $siswa[0]['id_buku'],
            'nama_buku' => $siswa[0]['nama_buku'],
            'penulis_buku' => $siswa[0]['penulis_buku'],
        );
        $this->load->view('editBuku_view', $data);
        $this->load->view('template/footer');
        
    }

    public function update_data()
    {
        $this->load->view('template/header');
        $id_buku = $_POST['id_buku'];
        $nama_buku = $_POST['nama_buku'];
        $penulis_buku = $_POST['penulis_buku'];

        // Cek apakah nama kosong
        $this->form_validation->set_rules('nama_buku', 'Nama', 'required', array('required' => 'Nama Buku harus diisi'));
        // Cek apakah KOM kosong
        $this->form_validation->set_rules('penulis_buku', 'Penulis', 'required', array('required' => 'Penulis Buku harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id_buku' => $id_buku,
                'nama_buku' => $nama_buku,
                'penulis_buku' => $penulis_buku
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
                'nama_buku' => $siswa[0]['nama_buku'],
                'penulis_buku' => $siswa[0]['penulis_buku'],
            );
            $this->load->view('editBuku_view', $data);
        }
        $this->load->view('template/footer');     
    }
}
