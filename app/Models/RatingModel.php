<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingModel extends Model
{
    protected $table = 'rating';
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
