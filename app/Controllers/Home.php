<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('wisatawan/template/header.php');
        echo view('wisatawan/index.php');
        echo view('wisatawan/template/footer.php');
    }
}
