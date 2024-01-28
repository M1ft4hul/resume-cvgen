<?php

namespace App\Models;

use CodeIgniter\Model;

class Mnegara extends Model
{
    protected $table            = 'tb_negara';
    protected $allowedFields    = ['nama', 'kode'];

    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    
}
