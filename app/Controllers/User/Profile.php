<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profil',
            'user' => $this->user
        ];

        return view('user/profile', $data);
    }
}
