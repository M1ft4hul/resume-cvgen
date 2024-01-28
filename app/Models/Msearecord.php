<?php

namespace App\Models;

use CodeIgniter\Model;

class Msearecord extends Model
{
    protected $table = 'tb_searecord';
    protected $allowedFields = [
        'id_user', 'nama_perusahaan', 'nama_kapal', 'rank_kapal', 'tipe_kapal', 'status_kapal', 'gt_kapal', 'kw_kapal', 'kapal_masuk',
        'kapal_keluar'
    ];

    protected $useTimestamps = true;
}
