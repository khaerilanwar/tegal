<?php

namespace App\Models;

use CodeIgniter\Model;

class TefoodModel extends Model
{
    protected $table = 'tefood';
    protected $primaryKey = 'id_pesan';
    protected $allowedFields = [
        'id_pesan',
        'tanggal_pesan',
        'jumlah',
        'jenis_pesan',
        'id_user',
        'id_produk',
        'harga_total',
        'status'
    ];
}
