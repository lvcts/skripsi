<?php

namespace App\Controllers;

use App\Models\Wisata;

class Home extends BaseController
{
    public function index()
    {
        $tittle = ['Home'];
        echo view('wisatawan/template/header.php', $tittle);
        echo view('wisatawan/index.php');
        echo view('wisatawan/template/footer.php');
    }
    public function roomDetail()
    {
        $tittle = ['Detail Wisata'];
        echo view('wisatawan/template/header.php', $tittle);
        echo view('wisatawan/room_details.php');
        // echo view('wisatawan/template/footer.php');
    }
}
