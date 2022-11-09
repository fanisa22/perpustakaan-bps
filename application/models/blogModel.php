<?php
//make class name same as file name
class blogModel extends CI_Model
{
    //F1
    public function myBlog()
    {
        $data = 'Hellow World dari CI Model';
        return $data;
    }
    //F2
    public function myBlogArray()
    {
        $data_array = array(
            'title' => 'My First Blog',
            'heading' => 'Amir Faisal K',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae ipsum sed eros tincidunt ultricies. Curabitur placerat dui quis velit tristique euismod. Nam laoreet ligula eu enim ultricies imperdiet. Duis non risus ac magna elementum lobortis. Proin molestie cursus diam, sed aliquam magna sollicitudin vel. In eu eros vel felis interdum lobortis vitae eu lorem. Integer sed metus bibendum, dapibus diam sit amet, interdum elit. Maecenas a volutpat sapien, mattis euismod odio. Integer vel dolor nisi. Nulla facilisi. Mauris ligula est, pharetra vehicula mi a, congue posuere est. Integer condimentum placerat lectus at commodo. Duis et accumsan elit. Nullam finibus dapibus pellentesque. Nullam eget molestie nibh. Mauris vestibulum felis nisl, et volutpat justo imperdiet malesuada. ',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTm9yuHQziJLogrOVnCTR8ihMaMmfbKDiugFg&usqp=CAU'
        );
        return $data_array;
    }
}
