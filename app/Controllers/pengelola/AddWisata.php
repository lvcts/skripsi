<?php

// untuk mengakses folder dari luar
namespace App\Controllers\pengelola;

use App\Controllers\BaseController;
use App\Models\WisataModel;

class AddWisata extends BaseController
{
    function __construct()
    {
        $this->wisata = new WisataModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Wisata'
        ];
        return view('pengelola/wisata', $data);
    }
    public function addWisata()
    {
        if (!$this->validate([
            'nama_wisata' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 10 Karakter',
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|min_length[30]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 30 Karakter',
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada Foto yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->wisata->insertWisata();
    }
}
