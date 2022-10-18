<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table = 'wisata';

    public function getWisata()
    {
        return $this->findAll();
    }
}
