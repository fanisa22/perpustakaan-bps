<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_penerbit extends CI_Model{

    public function generate_id_penerbit()
    {
        $this->db->select('RIGHT(penerbit.id_penerbit,3) as kode', false);
        $this->db->order_by('id_penerbit','desc');
        $this->db->limit(1);
        $query = $this->db->get('penerbit');
        if ($query->num_rows() > 0){
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else{
            $kode = 1;
        }

        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "P".$kodemax;
        return $kodejadi;
    }

    public function getAllDataPenerbit()
    {
        return $this->db->get('penerbit')->result();
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('penerbit');
        $this->db->where('id_penerbit', $id);
        return $this->db->get()->row_array();
    }

    public function update($id_penerbit, $data)
    {
        $this->db->where('id_penerbit', $id_penerbit);
        $this->db->update('penerbit', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_penerbit', $id);
        $this->db->delete('penerbit');
    }
}
