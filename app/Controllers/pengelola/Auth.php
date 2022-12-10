<?php

// untuk mengakses folder dari luar
namespace App\Controllers\pengelola;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Wisata'
        ];
        return view('pengelola/sign-in.php', $data);
    }
    public function signUp()
    {
        $data = [
            'title' => 'Wisata'
        ];
        return view('pengelola/sign-up.php', $data);
    }
}
