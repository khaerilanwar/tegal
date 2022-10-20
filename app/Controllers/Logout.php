<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function index()
    {
        session()->remove('email');
        session()->remove('role_id');

        session()->setFlashdata('pesan', 'Berhasil logged out');
        session()->setFlashdata('warna', 'success');
        return redirect()->to('/login');
    }
}
