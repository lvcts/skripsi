<?php

namespace App\Models;

use CodeIgniter\Model;

class PanoramicModel extends Model
{
    protected $table      = 'panorama';
    protected $primaryKey     = 'id_panorama';
    protected $returnType = 'object';
    protected $allowedFields = ['link_panorama1', 'link_panorama2', 'link_panorama3', 'link_panorama4', 'deksripsi_pano1', 'deksripsi_pano2', 'deksripsi_pano3', 'deksripsi_pano4', 'id_wisata'];
}
