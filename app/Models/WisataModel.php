<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table      = 'wisata';
    protected $primaryKey     = 'id_wisata';
    protected $returnType = 'array';
    protected $allowedFields = ['nama_wisata', 'alamat', 'deskripsi', 'foto', 'id'];

    public function getData()
    {
        $this->join('panorama', 'panorama.id_wisata = wisata.id_wisata');
        $this->join('users', 'users.id = wisata.id');
        $this->orderBy('wisata.id_wisata', "asc");
        $this->select('*');
        $result = $this->findAll();
        return $result;
    }
    public function getDataById($id_wisata)
    {
        $this->join('panorama', 'panorama.id_wisata = wisata.id_wisata');
        $this->join('users', 'users.id = wisata.id');
        $this->where('wisata.id_wisata', $id_wisata);
        $this->select('*');
        $result = $this->findAll();
        return $result;
    }
    public function insertWisata()
    {
        $uploadFoto = $this->request->getFile('foto');
        dd($uploadFoto);
        // $basename = $this->$uploadFoto->getBasename();
        // $namaFoto = 'http://localhost:8080/img/upload/' + $basename;
        // $this->wisata->insert([
        //     'nama_wisata' => $this->request->getVar('nama_wisata'),
        //     'alamat' => $this->request->getPost('alamat'),
        //     'deskripsi' => $this->request->getPost('deskripsi'),
        //     'foto' => $namaFoto,
        //     'id' => session()->id,
        // ]);
        // $uploadFoto->move('img/upload/', $basename);
    }
}
