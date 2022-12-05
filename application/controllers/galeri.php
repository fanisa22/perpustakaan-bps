<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri Extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('m_galeri');
    }
    public function index()
    {
        $isi['content'] = 'galeri/v_galeri';
        $isi['data']    = $this->db->get('galeri')->result();
        $this->load->view('v_dashboard', $isi);
    }
    public function tambah_galeri()
    {
        $isi['content'] = 'galeri/t_galeri';
        $this->load->view('v_dashboard', $isi);
    }
    public function simpan()
    {
        $config['upload_path']		= 'assets/gambar/galeri';
		$config['allowed_types']	= 'jpg|jpeg|png';
		$config['max_size']			= '2048';
		$this->load->library('upload', $config);
		$this->upload->do_upload('foto');
		$file_name = $this->upload->data();
        $data = array(
            'id_galeri'    => $this->input->post('id_galeri'),
            'nama'      => $this->input->post('nama'),
            'foto'       => $file_name['file_name']
        );

        $query = $this->db->insert('galeri', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan!');
            redirect('galeri','refresh');
        }
    }

    public function hapus($id_galeri)
    {
        $_id = $this->db->get_where('galeri',['id_galeri'=>$id_galeri])->row();
        $query = $this->db->delete('galeri',['id_galeri'=>$id_galeri]);
        if ($query = true) {
            unlink('assets/gambar/galeri/'.$_id->foto);
            $this->session->set_flashdata('info', 'Data Berhasil di Delete');
            redirect('galeri','refresh');
        }
    }
}