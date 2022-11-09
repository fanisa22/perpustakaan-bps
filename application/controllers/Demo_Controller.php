<?php
//create php class for controller
class Demo_Controller extends CI_Controller
{
    public function index()
    {
       echo "<h2>Demo Controller</h2>";
    echo "<p>Function yang dipanggil adalah index</p>";
    }
    public function aksi()
    {
        echo "<h2>Demo Controller</h2>";
        echo "<p>Function yang dipanggil adalah aksi</p>";
    }
}
