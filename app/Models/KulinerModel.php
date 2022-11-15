<?php

namespace App\Models;

use CodeIgniter\Model;

class KulinerModel extends Model
{
    protected $table = 'kuliner';
    protected $allowedFields = [
        'nama_kuliner',
        'slug',
        'user_email',
        'nomor_user',
        'jenis_kuliner',
        'deskripsi',
        'gambar',
        'harga',
        'maps',
        'alamat'
    ];
}
