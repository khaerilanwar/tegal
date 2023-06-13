<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingKulinerModel extends Model
{
    protected $table = 'rating_kuliner';
    protected $allowedFields = [
        'id',
        'tanggal',
        'rate',
        'review',
        'jenis_produk',
        'id_user',
        'id_produk'
    ];
}
