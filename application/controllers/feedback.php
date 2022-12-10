<?php

class Feedback Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_feedback');
    }

    public function index()
    {
        $isi['content'] = 'feedback/v_feedback';
        $isi['judul'] = 'Daftar Data Feedback';
        $isi['data'] = $this->m_feedback->getAllDataFeedback();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message')

        );
        $query = $this->db->insert('feedback', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Terima Kasih, Feedback Berhasil Disimpan');
            redirect('v_home','refresh');
        }
    }
}