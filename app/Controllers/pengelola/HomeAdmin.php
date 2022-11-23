<?php

// untuk mengakses folder dari luar
namespace App\Controllers\pengelola;

use App\Controllers\BaseController;

class HomeAdmin extends BaseController
{
    public function index()
    {
        $tittle = ["HOME-ADMIN"];
        echo view('pengelola/template/header.php', $tittle);
        echo view('pengelola/index.php');
        echo view('pengelola/template/footer.php');
    }
}
