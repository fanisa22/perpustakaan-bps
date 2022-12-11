<?php

class A_katalog Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_katalog');
    }

    public function index()
    {
        $isi['content'] = 'a_katalog/v_katalog';
        $isi['data']    = $this->db->get('katalog')->result();
        $isi['data']    = $this->m_katalog->get_data_katalog();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_katalog()
    {
        $isi['content'] = 'a_katalog/t_katalog';
        $isi['id_katalog'] = $this->m_katalog->id_katalog();
        $isi['buku'] = $this->db->get('buku')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $config['upload_path']		= 'assets/buku/e-book/';
		$config['allowed_types']	= 'pdf';
		$config['max_size']			= '2048';
		$this->load->library('upload', $config);
		$this->upload->do_upload('e_book');
		$file_name = $this->upload->data();
        $data = array(
            'id_katalog'   => $this-> input->post('id_katalog'),
            'id_buku'      => $this-> input->post('id_buku'),
            'e_book'       => $file_name['file_name']

        );
        $query = $this->db->insert('katalog', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan!');
            redirect('a_katalog');
        }
        			
}


    public function hapus($id_katalog)
    {
        $_id = $this->db->get_where('katalog',['id_katalog'=>$id_katalog])->row();
        $query = $this->db->delete('katalog',['id_katalog'=>$id_katalog]);
        if ($query = true) {
            unlink('assets/buku/e-book/'.$_id->e_book);
            $this->session->set_flashdata('info', 'Data Berhasil di Delete');
            redirect('a_katalog','refresh');
        }
    }

   
}