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
        $namaFoto1 = 'http://localhost:8080/img/pano/' . $basename1;
        $namaFoto2 = 'http://localhost:8080/img/pano/' . $basename2;
        $namaFoto3 = 'http://localhost:8080/img/pano/' . $basename3;
        $ur = $this->request->getUri();
        $urii = $ur->getSegment(2);
        $id  = intval($urii);
        $this->pano->insert([
            'link_panorama1' => $namaFoto1,
            'link_panorama2' => $namaFoto2,
            'link_panorama3' => $namaFoto3,
            'deskripsi_pano1' => $this->request->getPost('deskripsi_pano1'),
            'deskripsi_pano2' => $this->request->getPost('deskripsi_pano2'),
            'deskripsi_pano3' => $this->request->getPost('deskripsi_pano3'),
            'id_wisata' => $id,
        ]);
        if ($basename1 != "") {
            $pano1->move('img/pano/', $basename1);
            if ($basename2 != "") {
                $pano2->move('img/pano/', $basename2);
                if ($basename3 != "") {
                    $pano3->move('img/pano/', $basename3);
                }
            }
        }


        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('/panorama/' . $urii));
    }

    public function editview()
    {
        $uri = $this->request->uri->getSegments();
        $uri1 = $this->request->getUri();
        $urii = $uri1->getSegment(2);
        $id  = intval($urii);
        $data = [
            'title' => 'Edit Panorama',
            'uri' => $uri[1],
            'getdata' => $this->pano->where('id_wisata', $id)->findAll()
        ];
        return view('pengelola/edit-panorama', $data);
    }
    public function editpano()
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
        $namaFoto1 = 'http://localhost:8080/img/pano/' . $basename1;
        $namaFoto2 = 'http://localhost:8080/img/pano/' . $basename2;
        $namaFoto3 = 'http://localhost:8080/img/pano/' . $basename3;
        $ur = $this->request->getUri();
        $urii = $ur->getSegment(2);
        $id  = intval($urii);
        $id_panorama = $this->request->getVar('id_panorama');
        $data = [
            'id_panorama' => $id_panorama,
            'link_panorama1' => $namaFoto1,
            'link_panorama2' => $namaFoto2,
            'link_panorama3' => $namaFoto3,
            'deskripsi_pano1' => $this->request->getPost('deskripsi_pano1'),
            'deskripsi_pano2' => $this->request->getPost('deskripsi_pano2'),
            'deskripsi_pano3' => $this->request->getPost('deskripsi_pano3'),
            'id_wisata' => $id,
        ];
        $this->pano->where('id_panorama', $id_panorama);
        $this->pano->set($data);
        $this->pano->update($id_panorama, $data);

        if ($basename1 != "") {
            $pano1->move('img/pano/', $basename1);
            if ($basename2 != "") {
                $pano2->move('img/pano/', $basename2);
                if ($basename3 != "") {
                    $pano3->move('img/pano/', $basename3);
                }
            }
        }


        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->back()->withInput();
    }
}
