<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Iklan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pasang Iklan Anda',
            'user' => $this->user
        ];

        return view('user/iklan', $data);
    }
}