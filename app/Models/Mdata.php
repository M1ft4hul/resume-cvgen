<?php

namespace App\Models;

use CodeIgniter\Model;

class Mdata extends Model
{
    protected $table            = 'tb_data';
    protected $allowedFields    = ['id_user','photo','tempat_lahir','tgl_lahir','alamat','telepon','wa','jk','menikah','npwp','bandara','berat','tinggi','ukuran_pakaian','ukuran_sepatu', 'negara'];

    protected $useTimestamps = true;
}
