<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_feedback extends CI_Model{

    public function getAllDataFeedback()
    {
        return $this->db->get('feedback')->result();
    }
}
