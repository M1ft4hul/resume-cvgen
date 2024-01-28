<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpendidikan extends Model
{
    protected $table            = 'tb_education';
    protected $allowedFields    = ['id_user', 'nama_sekolah', 'jenjang', 'tahun_masuk', 'tahun_lulus'];

    protected $useTimestamps = true;

    
}
