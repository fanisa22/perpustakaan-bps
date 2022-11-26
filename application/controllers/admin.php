<?php

class Admin Extends CI_Controller{

    public function index()
    {
        $isi['content'] = 'admin/v_admin';
        $isi['judul'] = 'Daftar Data Admin';
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_admin()
    {
        $isi['content'] = 'admin/t_admin';
        $isi['judul'] = 'Daftar Data Admin';
        $this->load->view('v_dashboard', $isi);
    }
}