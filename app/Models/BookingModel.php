<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = "booking";
    protected $primaryKey = "id_booking";
    protected $returnType = "object";
    protected $allowedFields = ['wisata', 'nama_pemesan', 'nomor_telpon', 'email', 'kewarganegaraan', 'tanggal_kedatangan', 'informasi_tambahan', 'id'];
}
