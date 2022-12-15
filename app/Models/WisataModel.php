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
    public function getById()
    {
        $id = session()->id;
        $this->join('users', 'users.id = wisata.id');
        $this->where('users.id', $id);
        $this->select('*');
        $result = $this->findAll();
        return $result;
    }
}
