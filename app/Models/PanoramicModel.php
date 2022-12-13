<?php

namespace App\Models;

use CodeIgniter\Model;

class PanoramicModel extends Model
{
    protected $table      = 'panorama';
    protected $primaryKey     = 'id_panorama';
    protected $returnType = 'object';
    protected $allowedFields = ['link_panorama1', 'link_panorama2', 'link_panorama3', 'link_panorama4', 'deksripsi_pano1', 'deksripsi_pano2', 'deksripsi_pano3', 'deksripsi_pano4'];

    public function insertPano($id_wisata)
    {
        $uploadFoto = $this->request->getFile('link_panorama1');
        $basename = $uploadFoto->getBasename();
        $namaFoto = 'http://localhost:8080/img/upload/' + $basename;
        $this->wisata->insert([
            'link_panorama1' => $namaFoto,
            // 'link_panorama2' => $this->request->getVar('link_panorama2'),
            // 'link_panorama3' => $this->request->getVar('link_panorama3'),
            // 'link_panorama4' => $this->request->getVar('link_panorama4'),
            'deskripsi_pano1' => $this->request->getPost('deskripsi_pano1'),
            // 'deskripsi_pano2' => $this->request->getPost('deskripsi_pano2'),
            // 'deskripsi_pano3' => $this->request->getPost('deskripsi_pano3'),
            // 'deskripsi_pano4' => $this->request->getPost('deskripsi_pano4'),
            'id_wisata' => $id_wisata,
        ]);
        $uploadFoto->move('img/upload/', $basename);
    }
}
