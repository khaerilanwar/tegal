<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Mitra extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mitra Tecation',
            'user' => $this->user
        ];

        return view('/mitra/index', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Registrasi Mitra Tecation',
        ];

        return view('/mitra/daftar', $data);
    }
}
