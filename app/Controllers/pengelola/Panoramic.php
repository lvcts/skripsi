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
    public function panorama($id_wisata)
    {
        $data = [
            'title' => 'Add Panorama'
        ];
        return view('pengelola/panorama', $data);
    }
    public function addpano($id_wisata)
    {
        if (!$this->validate([
            'deskripsi_pano1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'link_pano1' => [
                'rules' => 'uploaded[link_pano1]|mime_in[link_pano1,image/jpg,image/jpeg,image/gif,image/png]|max_size[link_pano1,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error1', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->pano->insertPano($id_wisata);
    }
}
