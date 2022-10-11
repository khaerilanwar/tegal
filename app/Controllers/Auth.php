<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | Kabupaten Tegal'
        ];
        return view('auth/login', $data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar | Kabupaten Tegal'
        ];
        return view('auth/daftar', $data);
    }
}
