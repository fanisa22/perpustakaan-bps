<?php

class Dashboard extends CI_Controller{

    public function index()
    {
        $isi['content'] = 'v_content';
        $this->load->view('v_dashboard', $isi);
    }
}