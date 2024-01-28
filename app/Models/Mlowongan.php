<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlowongan extends Model
{
    protected $table = 'tb_lowongan';
    protected $allowedFields = ['banner_lowongan', 'nama_lowongan', 'deskripsi_lowongan', 'kuota_lowongan', 'negara_lowongan', 'perusahaan_lowongan', 'dibuka_lowongan', 'ditutup_lowongan', 'kontak_admin'];

    protected $useTimestamps = true;
}
