<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailbuku extends CI_Controller{

    public function index()
    {
        $this->load->view('katalog/v_detailbuku');
    }
}