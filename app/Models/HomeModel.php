<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'home';

    public function getHome()
    {
        return $this->findAll();
    }
}
