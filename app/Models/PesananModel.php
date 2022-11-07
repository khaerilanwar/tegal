<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $primaryKey = 'no_pesanan';
    protected $table = 'pesanan';
    protected $allowedFields = [
        'no_pesanan',
        'customer',
        'email_cust',
        'tanggal_pesan',
        'nama_wisata',
        'tanggal_datang',
        'jumlah_tiket',
        'payment',
        'harga_total'
    ];
}
