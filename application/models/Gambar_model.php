<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Gambar_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('tbl_gambar')->result();
    }

    public function upload()
    {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('input_gambar')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function save($upload)
    {
        $data = array(
            'deskripsi' => $this->input->post('input_deskripsi'),
            'nama_file' => $upload['file']['file_name'],
            'ukuran_file' => $upload['file']['file_size'],
            'tipe_file' => $upload['file']['file_type']
        );

        $this->db->insert('tbl_gambar', $data);
    }
}
