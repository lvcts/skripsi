<?php

// untuk mengakses folder dari luar
namespace App\Controllers\pengelola;

use App\Controllers\BaseController;
use App\Models\WisataModel;

class HomeAdmin extends BaseController
{
    function __construct()
    {
        $this->wisata = new WisataModel();
    }
    public function index()
    {
        $data = [
            'title' => 'HOME-ADMIN'
        ];
        return view('pengelola/index', $data);
    }
    public function tambahWisata()
    {
        $data = [
            'title' => 'Wisata'
        ];
        return view('pengelola/wisata', $data);
    }
    public function editWisata($id_wisata)
    {
        $data = [
            'title' => 'Wisata',
            'getdatabyid' => $this->wisata->getDataById($id_wisata)
        ];
        return view('pengelola/edit-wisata', $data);
    }

    public function listwisata()
    {
        $data = [
            'title' => 'All Data',
            'getdata' => $this->wisata->getData()
        ];
        return view('pengelola/all-wisata', $data);
    }
    public function editProfile()
    {
        $data = [
            'title' => 'Edit Profile'
        ];
        return view('pengelola/edit-profile', $data);
    }
}
