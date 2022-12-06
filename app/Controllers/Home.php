<?php

namespace App\Controllers;

use App\Models\WisataModel;

class Home extends BaseController
{
    function __construct()
    {
        $this->wisata = new WisataModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('wisatawan/index', $data);
    }
    public function detailWisata($id_wisata)
    {
        $data = [
            'title' => 'Detail Wisata',
            'getdata' => $this->wisata->getData(),
            'getdatabyid' => $this->wisata->getDataById($id_wisata)
        ];
        return view('wisatawan/detail_wisata.php', $data);
    }
    public function listWisata()
    {
        $data = [
            'title' => 'List Wisata',
            'getdata' => $this->wisata->getData()

        ];
        return view('wisatawan/list_wisata.php', $data);
    }
}
