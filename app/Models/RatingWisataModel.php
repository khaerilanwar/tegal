<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingWisataModel extends Model
{
    protected $table = 'rating_wisata';
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
