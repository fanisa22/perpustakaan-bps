<?php
class ProdiModel extends CI_Model
{
    public function get_data()
    {
        $data_prodi = [
            ["keterangan" => "Manajemen Informatika", "prodi" => "MIF"],
            ["keterangan" => "Teknik Komputer", "prodi" => "TKK"],
            ["keterangan" => "Teknik Informatika", "prodi" => "TIF"]
        ];
        return $data_prodi;
    }
}
