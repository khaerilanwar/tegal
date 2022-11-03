<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\jasaModel;

class Jasa extends BaseController
{
    protected $jasaModel;

    public function __construct()
    {
        $this->jasaModel = new jasaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Jasa | Kabupaten Tegal',
            'jasa' => $this->jasaModel->findAll(),
            'user' => $this->user
        ];

        return view('jasa/index', $data);
    }

    public function detail()
    {
        return view('jasa/jasa');
    }
}
