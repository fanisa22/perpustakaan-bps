<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_katalog extends CI_Model{

    public function get_data_katalog()
    {
        $this->db->select ('*');
        $this->db->from ('katalog');
        $this->db->join ('buku', 'katalog.id_buku = buku.id_buku');
        return $this->db->get();
    }

    public function id_katalog()
    {
        $this->db->select('RIGHT(katalog.id_katalog,4) as kode', FALSE);
        $this->db->order_by('id_katalog', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('katalog');
        if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi = "K".$kodemax;
        return $kodejadi;
    }

    public function hapus($id_katalog)
    {
        $this->db->where('id_katalog', $id_katalog);
        $this->db->delete('katalog');
    }
    
}