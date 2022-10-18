<?php

namespace App\Controllers;

use App\Models\WisataModel;

class Wisata extends BaseController
{
    protected $wisataModel;

    public function __construct()
    {
        $this->wisataModel = new WisataModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pariwisata Kabupaten Tegal',
            'wisata' => $this->wisataModel->getWisata()
        ];
        return view('wisata/index', $data);
    }

    public function details()
    {
        return view('wisata/detail');
    }
}
