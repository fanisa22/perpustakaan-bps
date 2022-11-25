<?php

class Pengarang Extends CI_Controller{

    public function index()
    {
        $isi['content'] = 'pengarang/v_pengarang';
        $isi['judul'] = 'Daftar Data Pengarang';
        $this->load->view('v_dashboard', $isi);
    }
    public function tambah_pengarang()
    {
        $isi['content'] = 'pengarang/t_pengarang';
        $isi['judul'] = 'Daftar Data Pengarang';
        $this->load->view('v_dashboard', $isi);
    }
}