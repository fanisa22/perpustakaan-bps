<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SbAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['mahasiswa'] = $this->MahasiswaModel->get_data();
        $this->template->views('view_mahasiswa', $data);
    }
}
