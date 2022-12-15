<?php

// untuk mengakses folder dari luar
namespace App\Controllers\pengelola;

use App\Controllers\BaseController;
use App\Models\PanoramicModel;

class Panoramic extends BaseController
{
    function __construct()
    {
        $this->pano = new PanoramicModel();
    }
    public function panorama()
    {
        $uri = $this->request->uri->getSegments();

        $data = [
            'title' => 'Add Panorama',
            'uri' => $uri[1]
        ];
        return view('pengelola/panorama', $data);
    }
    public function addpano()
    {

        if (!$this->validate([
            'deskripsi_pano1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Tidak boleh kosong'
                ]
            ],
            'link_panorama1' => [
                'rules' => 'uploaded[link_panorama1]|mime_in[link_panorama1,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Harus Ada Foto yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,png',
                ]

            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $pano1 = $this->request->getFile('link_panorama1');
        $basename1 = $pano1->getName();
        $pano2 = $this->request->getFile('link_panorama2');
        $basename2 = $pano2->getName();
        $pano3 = $this->request->getFile('link_panorama3');
        $basename3 = $pano3->getName();
        $pano4 = $this->request->getFile('link_panorama4');
        $basename4 = $pano4->getName();
        $namaFoto1 = 'http://localhost:8080/img/pano/' . $basename1;
        $namaFoto2 = 'http://localhost:8080/img/pano/' . $basename2;
        $namaFoto3 = 'http://localhost:8080/img/pano/' . $basename3;
        $namaFoto4 = 'http://localhost:8080/img/pano/' . $basename4;
        $ur = $this->request->getUri();
        $urii = $ur->getSegment(2);
        $id  = intval($urii);
        $this->pano->insert([
            'link_panorama1' => $namaFoto1,
            'link_panorama2' => $namaFoto2,
            'link_panorama3' => $namaFoto3,
            'link_panorama4' => $namaFoto4,
            'deskripsi_pano1' => $this->request->getPost('deskripsi_pano1'),
            'deskripsi_pano2' => $this->request->getPost('deskripsi_pano2'),
            'deskripsi_pano3' => $this->request->getPost('deskripsi_pano3'),
            'deskripsi_pano4' => $this->request->getPost('deskripsi_pano4'),
            'id_wisata' => $id,
        ]);
        $pano1->move('img/pano/', $basename1);
        $pano2->move('img/pano/', $basename2);
        $pano3->move('img/pano/', $basename3);
        $pano4->move('img/pano/', $basename4);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('/tambah-wisata'));
    }
}
