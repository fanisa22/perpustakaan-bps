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
        $isi['data'] = $this->m_buku->get_data_buku();
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
        $config['upload_path']		= 'assets/buku/gambar';
		$config['allowed_types']	= 'jpg|jpeg|png';
		$config['max_size']			= '2048';
		$this->load->library('upload', $config);
		$this->upload->do_upload('foto');
		$file_name = $this->upload->data();
        $data = array(
            'id_buku'         => $this-> input->post('id_buku'),
            'judul_buku'      => $this-> input->post('judul_buku'),
            'id_penerbit'     => $this-> input->post('id_penerbit'),
            'id_pengarang'    => $this-> input->post('id_pengarang'),
            'isbn'            => $this-> input->post('isbn'),
            'tahun'           => $this-> input->post('tahun'),
            'halaman'         => $this-> input->post('halaman'),
            'foto'            => $file_name['file_name'],

        );
        $query = $this->db->insert('buku', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan!');
            redirect('buku');
        }
        			
}

    public function edit($id)
    {
        $isi['content'] = 'buku/e_buku';
        $isi['pengarang'] = $this->db->get('pengarang')->result();
        $isi['penerbit'] = $this->db->get('penerbit')->result();
        $isi['data'] = $this->m_buku->edit($id); 
        $this->load->view('v_dashboard', $isi);
        
    }

    public function update()
    {
        $id_buku = $this->input->post('id_buku');
        $config['upload_path'] = 'assets/buku/gambar';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);

        if (!empty($_FILES['foto']['name'])) {
            $this->upload->do_upload('foto');
            $upload = $this->upload->data();
            $gambar = $upload['file_name'];
            $data = array(
                'id_buku'         => $this-> input->post('id_buku'),
                'judul_buku'      => $this-> input->post('judul_buku'),
                'id_penerbit'     => $this-> input->post('id_penerbit'),
                'id_pengarang'    => $this-> input->post('id_pengarang'),
                'isbn'            => $this-> input->post('isbn'),
                'tahun'           => $this-> input->post('tahun'),
                'halaman'         => $this-> input->post('halaman'),
                'foto' => $gambar,
                
            );
            $_id = $this->db->get_where('buku', ['id_buku' => $id_buku])->row();
            $query = $this->m_buku->update($id_buku, $data);
            if ($query = true) {
                $this->session->set_flashdata('info', 'Data Berhasil di Update');
                unlink('assets/gambar/buku/'.$_id->foto);
                redirect('buku', 'refresh');
            }
        }else{
            $data = array(
                'id_buku'         => $this-> input->post('id_buku'),
                'judul_buku'      => $this-> input->post('judul_buku'),
                'id_penerbit'     => $this-> input->post('id_penerbit'),
                'id_pengarang'    => $this-> input->post('id_pengarang'),
                'isbn'            => $this-> input->post('isbn'),
                'tahun'           => $this-> input->post('tahun'),
                'halaman'         => $this-> input->post('halaman'),
            ); 
            $query = $this->m_buku->update($id_buku, $data);
            if ($query = true) {
                $this->session->set_flashdata('info', 'Data Berhasil di Update');
                redirect('buku', 'refresh');
            }
        }  
    }

    public function hapus($id_buku)
    {
        $_id = $this->db->get_where('buku',['id_buku'=>$id_buku])->row();
        $query = $this->db->delete('buku',['id_buku'=>$id_buku]);
        if ($query = true) {
            unlink('assets/buku/gambar'.$_id->foto);
            $this->session->set_flashdata('info', 'Data Berhasil di Delete');
            redirect('buku','refresh');
        }
    }

   
}