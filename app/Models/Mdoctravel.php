<?php

namespace App\Models;

use CodeIgniter\Model;

class Mdoctravel extends Model
{
    protected $table = 'tb_doctravel';
    protected $allowedFields = ['id_user', 'nama_dokumen', 'nomor_dokumen', 'tgl_terbit_dok', 'tgl_berakhir_dok', 'dok_dikeluarkan_oleh'];

    protected $useTimestamps = true;
}
