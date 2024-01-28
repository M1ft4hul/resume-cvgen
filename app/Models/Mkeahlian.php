<?php

namespace App\Models;

use CodeIgniter\Model;

class Mkeahlian extends Model
{
    protected $table = 'tb_keahlianlain';
    protected $allowedFields = ['id_user', 'keahlian'];

    protected $useTimestamps = true;
}
