<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{

    public function index()
    {
        $this->load->model('ProdiModel');
        $data['Prodi'] = $this->ProdiModel->get_data();
        $this->load->view('view_prodi', $data);
    }
    public function angkatan()
    {
        $this->load->model('AngkatanModel');
        $data['Angkatan'] = $this->AngkatanModel->get_data();
        $this->load->view('angkatan_view', $data);
    }

    // public function index()
    // {
    //     $data['Mahasiswa'] = [
    //         ["nama" => "Kim Jefry", "prodi" => "MIF"],
    //         ["nama" => "Ahmad Kurniawan", "prodi" => "TKK"],
    //         ["nama" => "Budi Sudarsono", "prodi" => "TIF"]
    //     ];
    //     $this->load->view('view_mahasiswa', $data);
    // }
    // public function index()
    // {
    //     $data['nama'] = "Kim Jefry";
    //     $data['prodi'] = "MIF";
    //     $this->load->view('view_mahasiswa', $data);
    // }

}
