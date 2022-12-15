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
        helper(['form', 'url']);
        if (!$this->validate([
            'nama_wisata' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Wisata Harus Diisi',
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'Alamat Harus diisi',
                    'min_length' => 'Alamat Minimal 10 Karakter',
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|min_length[30]',
                'errors' => [
                    'required' => 'Deskripsi Harus diisi',
                    'min_length' => 'Deskripsi Minimal 30 Karakter',
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,2048]',
                'errors' => [
                    'uploaded' => 'Foto harus di isi',
                    'mime_in' => 'Ekstensi foto harus jpg/jpeg/png',
                    'max_size' => 'Ukuran foto terlalu besar',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $uploadFoto = $this->request->getFile('foto');
        $basename = $uploadFoto->getName();
        $id = session()->id;
        // $namaFoto = 'http://localhost:8080/img/upload/' + $basename;
        $this->wisata->insert([
            'nama_wisata' => $this->request->getVar('nama_wisata'),
            'alamat' => $this->request->getPost('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $basename,
            'id' => $id,
        ]);
        $uploadFoto->move('img/upload/', $basename);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('/tambah-wisata'));
    }
}
