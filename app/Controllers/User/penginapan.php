<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\penginapanModel;

class penginapan extends BaseController
{
    protected $penginapanModel;

    public function __construct()
    {
        $this->penginapanModel = new penginapanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'PENGINAPAN | Kabupaten Tegal',
            'penginapan' => $this->penginapanModel->findAll(),
            'user' => $this->user
        ];

        return view('penginapan/index', $data);
    }

    public function detail()
    {
        return view('penginapan/penginapan');
    }
}
