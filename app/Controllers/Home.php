<?php

namespace App\Controllers;

use App\Models\WisataModel;
use App\Models\BookingModel;

class Home extends BaseController
{
    function __construct()
    {
        $this->wisata = new WisataModel();
        $this->booking = new BookingModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home',
            'getdata' => $this->wisata->getData()
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
    public function booking()
    {
        $data = $this->booking->insert([
            'wisata' => $this->request->getVar('wisata'),
            'nama_pemesan' => $this->request->getVar('nama_pemesan'),
            'nomor_telpon' => $this->request->getVar('nomor_telpon'),
            'email' => $this->request->getVar('email'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
            'tanggal_kedatangan' => $this->request->getPost('tanggal_kedatangan'),
            'informasi_tambahan' => $this->request->getPost('informasi_tambahan'),
            'id' => $this->request->getVar('id')
        ]);
        if ($data) {
            echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        } else {
            echo "<script>alert('Data Gagal Ditambahkan');</script>";
        }
        return redirect()->to('/list-wisata');
    }
}
