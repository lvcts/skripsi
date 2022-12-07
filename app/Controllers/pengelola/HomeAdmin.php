<?php

// untuk mengakses folder dari luar
namespace App\Controllers\pengelola;

use App\Controllers\BaseController;

class HomeAdmin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'HOME-ADMIN'
        ];
        return view('pengelola/index', $data);
    }
    public function wisata()
    {
        $data = [
            'title' => 'Wisata'
        ];
        return view('pengelola/wisata', $data);
    }
    public function listwisata()
    {
        $data = [
            'title' => 'All Data'
        ];
        return view('pengelola/all-wisata', $data);
    }
}
