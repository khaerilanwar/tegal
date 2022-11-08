<?php

namespace App\Models;

use CodeIgniter\Model;

class jasaModel extends Model
{
    protected $table = 'jasa';
    protected $allowedFields = [
        'nama_jasa',
        'bidang_jasa',
        'deskripsi',
        'gambar',
        'harga',
        'maps'
    ];
}
