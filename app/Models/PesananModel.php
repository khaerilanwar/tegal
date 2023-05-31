<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $useAutoIncrement = false;
    protected $primaryKey = 'no_pesanan';
    protected $table = 'pesanan';
    protected $allowedFields = [
        'no_pesanan',
        'customer',
        'tanggal_pesan',
        'tanggal_datang',
        'jumlah_tiket',
        'jenis_pesan',
        'id_user',
        'id_payment',
        'id_produk',
        'harga_total',
        'status',
        'bukti'
    ];
}
