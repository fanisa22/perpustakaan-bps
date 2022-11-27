<?php

class Penerbit Extends CI_Controller{

    public function index()
    {
        $isi['content'] = 'penerbit/v_penerbit';
        $isi['judul'] = 'Daftar Data Penerbit';
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_penerbit()
    {
        $isi['content'] = 'penerbit/t_penerbit';
        $isi['judul'] = 'Daftar Data Penerbit';
        $this->load->view('v_dashboard', $isi);
    }
}