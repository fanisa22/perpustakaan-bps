<?php

class Penerbit Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_penerbit');
    }

    public function index()
    {
        $isi['content'] = 'penerbit/v_penerbit';
        $isi['judul'] = 'Daftar Data Penerbit';
        $isi['data'] = $this->m_penerbit->getAllDataPenerbit();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_penerbit()
    {
        $isi['content'] = 'penerbit/t_penerbit';
        $isi['judul'] = 'Daftar Data Penerbit';
        $isi['id_penerbit']= $this->m_penerbit->generate_id_penerbit();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id_penerbit' => $this->input->post('id_penerbit'),
            'nama_penerbit' => $this->input->post('nama_penerbit')

        );
        $query = $this->db->insert('penerbit', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Penerbit Berhasil Disimpan');
            redirect('penerbit','refresh');
        }
    }
    public function edit($id)
    {
        $isi['content'] = 'penerbit/e_penerbit';
        $isi['judul'] = 'Form Edit Penerbit';
        $isi['penerbit'] = $this->m_penerbit->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id_penerbit = $this->input->post('id_penerbit');

        $data = array(
            'id_penerbit' => $this->input->post('id_penerbit'),
            'nama_penerbit' => $this->input->post('nama_penerbit')

        );
        $query = $this->m_penerbit->update($id_penerbit, $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Penerbit Berhasil Diupdate');
            redirect('penerbit');
        }
    }

    public function delete($id)
    {
        $query = $this->m_penerbit->delete($id);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Penerbit Berhasil Didelete');
            redirect('penerbit');
        }
    }
}