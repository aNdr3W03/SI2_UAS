<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Gambar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gambar_model');
    }

    public function index()
    {
        $data['gambar'] = $this->Gambar_model->view();
        $this->load->view('template/header');
        $this->load->view('gambarview', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $data = array();
        $this->load->view('gambarinput_view', $data);
        if ($this->input->post('submit')) {
            $upload = $this->Gambar_model->upload();
            if ($upload['result'] == "success") {
                $this->Gambar_model->save($upload);
                redirect('gambar');
            } else {
                $data['message'] = $upload['error'];
            }
        }
        $this->load->view('template/footer');
    }
}
