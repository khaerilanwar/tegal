<?php

namespace App\Models;

use CodeIgniter\Model;

class BuktiBayarModel extends Model
{
    protected $table = 'bukti_bayar';
    protected $allowedFields = [
        'gambar',
        'jenis_bayar',
        'id_user',
        'no_pesan'
    ];
}
