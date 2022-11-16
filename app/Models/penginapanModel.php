<?php

namespace App\Models;

use CodeIgniter\Model;

class PenginapanModel extends Model
{
    protected $table = 'penginapan';
    protected $allowedFields = [
        'nama_penginapan',
        'user_email',
        'tipe_kamar',
        'harga',
        'deskripsi',
        'gambar',
        'peta',
        'kamar tersedia'
    ];
}
