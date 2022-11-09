<?php

namespace App\Models;

use CodeIgniter\Model;

class jasaModel extends Model
{
    protected $table = 'jasa';
    protected $allowedFields = [
        'nama_jasa',
        'user_email',
        'bidang_jasa',
        'deskripsi',
        'gambar',
        'harga',
        'maps'
    ];
}
