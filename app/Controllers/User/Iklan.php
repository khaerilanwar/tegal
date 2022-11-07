<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Iklan extends BaseController
{
    public function index()
    {
        $menu = $this->request->getGet('bidang');

        if ($menu == 'kuliner') {
            $part = 'user/partial/kuliner';
        } elseif ($menu == 'penginapan') {
            $part = 'user/partial/penginapan';
        } elseif ($menu == 'jasa') {
            $part = 'user/partial/jasa';
        } else {
            $part = 'user/partial/index';
        }

        $data = [
            'title' => 'Pasang Iklan Anda',
            'user' => $this->user,
            'partial' => $part
        ];

        return view('user/iklan', $data);
    }
}
