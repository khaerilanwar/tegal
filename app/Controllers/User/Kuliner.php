<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\kulinerModel;

class Kuliner extends BaseController
{
    protected $kulinerModel;

    public function __construct()
    {
        $this->kulinerModel = new kulinerModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kuliner | Kabupaten & Kota Tegal',
            'kuliner' => $this->kulinerModel->findAll(),
            'user' => $this->user
        ];

        return view('kuliner/index', $data);
    }

    public function detail()
    {
        return view('kuliner/kuliner');
    }
}
