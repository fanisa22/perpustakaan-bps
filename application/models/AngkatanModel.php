<?php
class AngkatanModel extends CI_Model
{
    public function get_data()
    {
        $data_angkatan = [
            ["Tahun" => "2020"],
            ["Tahun" => "2021"],
            ["Tahun" => "2022"],
            ["Tahun" => "2023"]
        ];
        return $data_angkatan;
    }
}
