<?php

// untuk mengakses folder dari luar
namespace App\Controllers\pengelola;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        // ===============================
        // dokumentasi array
        // $data = [
        //     'satu' => 'satu',
        //     'dua' => 'dua'
        // ]
        // ===============================
        $tittle = ["Sign In"];
        echo view('pengelola/template/header.php', $tittle);
        echo view('pengelola/sign-in.php');
        echo view('pengelola/template/footer.php');
    }
    public function signUp()
    {
        $tittle = ["Sign Up"];
        echo view('pengelola/template/header.php', $tittle);
        echo view('pengelola/sign-up.php');
        echo view('pengelola/template/footer.php');
    }
}
