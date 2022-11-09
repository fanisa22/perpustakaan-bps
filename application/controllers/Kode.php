<?php
//create php class for controller named Kode
class Kode extends CI_Controller
{
    //create function named hello
    public function hello($var)
    {
        if (isset($var)) {
            switch (strtolower($var)) {
                case 'php':
                   $this->load->view('phpview');
                    break;
                case 'python':
                    $this->load->view('pythonview');
                    break;
                case 'cpp':
                    $this->load->view('cppview');
                    break;
                default:
               echo "Default url salah";
                    break;
            }
        }
        
    }
}
