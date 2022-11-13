<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Kabupaten Tegal',
            'user' => $this->user

        ];

        return view('home/index', $data);
    }
}
