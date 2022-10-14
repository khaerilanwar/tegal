<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['nama', 'email', 'no_telp', 'jenis_kelamin', 'alamat', 'password', 'role'];
}
