<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Kabupaten Tegal',

        ];

        return view('home/index', $data);
    }
}
