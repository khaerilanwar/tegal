<?php

namespace App\Models;

use CodeIgniter\Model;

class PenginapanModel extends Model
{
    protected $table = 'penginapan';
    protected $allowedFields = [
        'nama_penginapan',
        'slug',
        'jenis_penginapan',
        'nomor_user',
        'user_email',
        'harga',
        'deskripsi',
        'gambar',
        'alamat',
        'maps'
    ];
}
