<?php

namespace App\Models;

use CodeIgniter\Model;

class KulinerModel extends Model
{
    protected $table = 'kuliner';
    protected $allowedFields = [
        'nama',
        'jenis_kuliner',
        'harga',
        'terjual',
        'pendapatan',
        'deskripsi',
        'gambar',
        'alamat',
        'maps',
        'id_user',
        'status'
    ];
}
