<?php
class Blog extends CI_Controller
{

    public function index()
    {

        // $data['multiple_data'] = 'Hellow World dari CI Model';


        $this->load->model('blogModel');
        $res = $this->blogModel->myBlog();
        $resArray = $this->blogModel->myBlogArray();
        $data['multiple_data'] = $res;
        $data['data_array'] = $resArray;
        if ($res) {
            $data['result'] = $res;
            $this->load->view('newView', $data);
        } else {

            echo "Fail";
        };
    }
}
