<?php

class Pengarang Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengarang');
    }

    public function index()
    {
        $isi['content'] = 'pengarang/v_pengarang';
        $isi['data']     = $this->db->get('pengarang')->result();
        $this->load->view('v_dashboard', $isi);
    }
    public function tambah_pengarang()
    {
        $isi['content'] = 'pengarang/t_pengarang';
        $this->load->view('v_dashboard', $isi);
    }
    public function simpan()
    {
        $data = array(
            'id_pengarang'    => $this-> input->post('id_pengarang'),
            'nama_pengarang'  => $this-> input->post('nama_pengarang')
        );
        $query = $this->db->insert('pengarang', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan!');
            redirect('pengarang');
        }
    }
    public function edit($id)
    {
        $isi['content'] = 'pengarang/e_pengarang';
        $isi['data'] = $this->m_pengarang->edit($id);
        $this->load->view('v_dashboard', $isi);
    }
    public function update()
    {
        $id_pengarang = $this->input->post('id_pengarang');

        $data = array(
            'id_pengarang' => $this->input->post('id_pengarang'),
            'nama_pengarang' => $this->input->post('nama_pengarang')

        );
        $query = $this->m_pengarang->update($id_pengarang, $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Pengarang Berhasil Diupdate');
            redirect('pengarang');
        }
    }
    public function hapus($id)
    {
        $query = $this->m_pengarang->hapus($id);
        if ($query = true){
            $this->session->set_flashdata('info','Data Pengarang Berhasil Dihapus!');
            redirect('pengarang','refresh');
        }
    }
}