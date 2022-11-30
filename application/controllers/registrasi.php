<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function index()
    {
        $this->load->view('v_registrasi');
    }

    public function simpan()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')

        );
        $query = $this->db->insert('login', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Akun Berhasil Dibuat!');
            redirect('registrasi','refresh');
        }
    }

}