<?php
class M_home Extends CI_Model{

    public function galeri()
    {
        $this->db->select('*');
        $this->db->from('galeri');

        return $this->db->get()->result();
    }

    public function home_galeri()
    {
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->limit(4);

        return $this->db->get()->result();
    }
}