<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function __construct()
    {
        helper('tegal');
        cekLogin();
    }

    public function index()
    {
        $data = [
            'title' => 'Profil',
            'user' => $this->user
        ];

        return view('user/profile', $data);
    }

    public function editProfile()
    {
        $data = [
            'title' => 'Profil',
            'user' => $this->user
        ];

        return view('user/editProfile', $data);
    }
}
