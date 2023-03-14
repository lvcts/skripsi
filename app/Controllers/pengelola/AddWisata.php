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
            'alamat_wisata' => [
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
        $namaFoto = 'img/upload/' . $basename;
        $this->wisata->insert([
            'nama_wisata' => $this->request->getVar('nama_wisata'),
            'alamat_wisata' => $this->request->getPost('alamat_wisata'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $namaFoto,
            'id' => $id,
        ]);
        $uploadFoto->move('img/upload/', $basename);
        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('/tambah-wisata'));
    }
    public function editWisata()
    {
        helper(['form', 'url']);
        if (!$this->validate([
            'nama_wisata' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Wisata Harus Diisi',
                ]
            ],
            'alamat_wisata' => [
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
        $namaFoto = 'img/upload/' . $basename;
        $id_wisata = $this->request->getVar('id_wisata');
        $data = [
            'id_wisata' => $id_wisata,
            'nama_wisata' => $this->request->getVar('nama_wisata'),
            'alamat_wisata' => $this->request->getPost('alamat_wisata'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $namaFoto,
            'id' => $id,
        ];
        $this->wisata->where('id_wisata', $id_wisata);
        $this->wisata->set($data);
        $this->wisata->update($id_wisata, $data);
        $uploadFoto->move('img/upload/', $basename);

        session()->setFlashdata('success', 'Data Berhasil diupdate');
        return redirect()->back()->withInput();
    }
}
