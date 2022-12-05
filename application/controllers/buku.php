<?php

class Buku Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_buku');
    }

    public function index()
    {
        $isi['content'] = 'buku/v_buku';
        $isi['data']     = $this->db->get('buku')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_buku()
    {
        $isi['content'] = 'buku/t_buku';
        $isi['id_buku'] = $this->m_buku->id_buku();
        $isi['pengarang'] = $this->db->get('pengarang')->result();
        $isi['penerbit'] = $this->db->get('penerbit')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id_buku'         => $this-> input->post('id_buku'),
            'judul_buku'      => $this-> input->post('judul_buku'),
            'id_penerbit'     => $this-> input->post('id_penerbit'),
            'id_pengarang'    => $this-> input->post('id_pengarang'),
            'isbn'            => $this-> input->post('isbn'),
            'tahun'           => $this-> input->post('tahun')
        );
        $query = $this->db->insert('buku', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan!');
            redirect('buku');
        }
    }
}