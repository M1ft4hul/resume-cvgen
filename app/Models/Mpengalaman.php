<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpengalaman extends Model
{
    protected $table = 'tb_pengalaman';
    protected $allowedFields = ['id_user', 'perusahaan', 'posisi', 'tahun_masuk', 'tahun_lulus'];

    protected $useTimestamps = true;
}
