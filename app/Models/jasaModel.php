<?php

namespace App\Models;

use CodeIgniter\Model;

class JasaModel extends Model
{
    protected $table = 'jasa';
    protected $allowedFields = [
        'nama_jasa',
        'slug',
        'user_email',
        'nomor_user',
        'bidang_jasa',
        'deskripsi',
        'gambar',
        'harga',
        'maps'
    ];
}
