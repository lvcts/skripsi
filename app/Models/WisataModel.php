<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{

    protected $table      = 'wisata';
    protected $primaryKey     = 'id_wisata';
    protected $returnType = 'array';
    public function getData()
    {
        $this->join('panorama', 'panorama.id_panorama = wisata.id_panorama');
        $this->select('*');
        $result = $this->findAll();
        return $result;
    }
}
