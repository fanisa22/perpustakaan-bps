<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function proses_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('login');
        if($query->num_rows() > 0){
            $data  = $query->row_array();
            $id  = $data['id'];
            $nama  = $data['nama'];
            $username = $data['username'];
            $password  = $data['password'];
            $level = $data['level'];
            $sesdata = array(
                'id' => $id,
                'nama'  => $nama,
                'username' => $username,
                'password'     => $password,
                'level'     => $level,
                'logged_in' => TRUE
            );
                $this->session->set_userdata($sess);
                // access login for superadmin
                if($level === '1'){
                    redirect('dashboard');

                    // access login for admin
                }else if($level === '2'){
                    redirect('dashboard');
                }

            }else{
                $this->session->set_flashdata('info', '<div 
            class="alert alert-danger" role="alert"> Login Gagal, Silahkan Periksa Kembali Username dan Password Anda ! </div>');
            redirect('login');
            }
            
        }
    }