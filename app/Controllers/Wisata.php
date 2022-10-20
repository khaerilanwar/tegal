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
        $keyword = $this->request->getGet('cari');
        if ($keyword) {
            $wisata = $this->wisataModel->asArray()->like('nama_wisata', $keyword)->orLike('lokasi', $keyword)->findAll();
        } else {
            $wisata = $this->wisataModel->getWisata();
        }

        $data = [
            'title' => 'Pariwisata Kabupaten Tegal',
            'wisata' => $wisata
        ];

        if ($keyword) {
            return view('wisata/result', $data);
        }

        return view('wisata/index', $data);
    }

    public function detail()
    {
        return view('wisata/detail');
    }
}
