<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table = 'wisata';

    protected $allowedFields = ['nama_wisata', 'harga', 'lokasi', 'maps', 'alamat', 'deskripsi', 'gambar'];

    public function getWisata()
    {
        return $this->findAll();
    }
}
