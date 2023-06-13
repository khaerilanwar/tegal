<?php

namespace App\Models;

use CodeIgniter\Model;

class TopUpModel extends Model
{
    protected $table = 'top_up';
    // protected $primaryKey = 'id_pesan';
    protected $allowedFields = [
        'nominal',
        'metode',
        'tanggal',
        'bukti',
        'status',
        'id_user'
    ];
}
