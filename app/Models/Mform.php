<?php

namespace App\Models;

use CodeIgniter\Model;

class Mform extends Model
{
    protected $table = 'tb_gform';
    protected $allowedFields = ['judul', 'deskripsi', 'link', 'aktif'];

    protected $useTimestamps = true;
}
