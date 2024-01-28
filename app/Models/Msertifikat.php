<?php

namespace App\Models;

use CodeIgniter\Model;

class Msertifikat extends Model
{
    protected $table = 'tb_sertifikat';
    protected $allowedFields = ['id_user', 'tipe_sertifikat', 'no_sertifikat', 'ser_dibuat', 'ser_berakhir', 'ser_negara', 'ser_status'];

    protected $useTimestamps = true;
}
