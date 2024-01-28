<?php

namespace App\Models;

use CodeIgniter\Model;

class Mbahasa extends Model
{
    protected $table            = 'tb_bahasa';
    protected $allowedFields    = ['id_user', 'bahasa', 'level'];

    protected $useTimestamps = true;

    
}
