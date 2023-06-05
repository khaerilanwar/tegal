<?php

namespace App\Models;

use CodeIgniter\Model;

class PenginapanModel extends Model
{
    protected $table = 'penginapan';
    protected $allowedFields = [
        'nama',
        'jenis_penginapan',
        'harga',
        'deskripsi',
        'terbooking',
        'gambar',
        'alamat',
        'maps',
        'status',
        'id_user'
    ];
}
