<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_admin extends CI_Model{

    public function generate_id_admin()
    {
        $this->db->select('RIGHT(login.id,3) as kode', false);
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $query = $this->db->get('login');
        if ($query->num_rows() > 0){
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else{
            $kode = 1;
        }

        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "A".$kodemax;
        return $kodejadi;
    }

    public function getAllDataAdmin()
    {
        return $this->db->get('login')->result();
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('login', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('login');
    }
}
