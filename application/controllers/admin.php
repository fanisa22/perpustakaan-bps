<?php

class Admin Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index()
    {
        $isi['content'] = 'admin/v_admin';
        $isi['judul'] = 'Daftar Data Admin';
        $isi['data'] = $this->m_admin->getAllDataAdmin();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_admin()
    {
        $isi['content'] = 'admin/t_admin';
        $isi['judul'] = 'Daftar Data Admin';
        $isi['id']= $this->m_admin->generate_id_admin();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama')

        );
        $query = $this->db->insert('login', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Penerbit Berhasil Disimpan');
            redirect('admin','refresh');
        }
    }
    public function edit($id)
    {
        $isi['content'] = 'admin/e_admin';
        $isi['judul'] = 'Form Edit Admin';
        $isi['admin'] = $this->m_admin->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = array(
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama')

        );
        $query = $this->m_admin->update($id, $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Penerbit Berhasil Diupdate');
            redirect('admin');
        }
    }

    public function delete($id)
    {
        $query = $this->m_admin->delete($id);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Penerbit Berhasil Didelete');
            redirect('admin');
        }
    }
}