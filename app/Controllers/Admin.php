<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function index()
    {
        if (!session()->email && !session()->role_id) {
            session()->setFlashdata('pesan', 'Silakan login dulu');
            session()->setFlashdata('warna', 'warning');
            return redirect()->to('login');
        }

        $db      = \Config\Database::connect();
        $builder = $db->table('user');
        $user = $builder->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        $data = [
            'title' => 'Administrator | Kabupaten Tegal',
            'user' => $user
        ];

        return view('admin/index', $data);
    }
}
