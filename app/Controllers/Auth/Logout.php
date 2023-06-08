<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        session()->remove('email');
        session()->remove('role_id');
        return redirect()->to('/login');
    }
}
