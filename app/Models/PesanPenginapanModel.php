<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanPenginapanModel extends Model
{
    protected $table = 'pesanpenginapan';
    // protected $primaryKey = 'id_pesan';
    protected $allowedFields = [
        'nama_lengkap',
        'tanggal_kedatangan',
        'jumlah',
        'id_user',
        'id_produk'
    ];
}
