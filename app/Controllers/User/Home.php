<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\JasaModel;
use App\Models\KulinerModel;
use App\Models\PenginapanModel;
use App\Models\WisataModel;

class Home extends BaseController
{
    protected $jasa;
    protected $wisata;
    protected $penginapan;
    protected $kuliner;

    public function __construct()
    {
        $this->jasa = \Config\Database::connect()->table('jasa');
        $this->wisata = \Config\Database::connect()->table('wisata');
        $this->penginapan = \Config\Database::connect()->table('penginapan');
        $this->kuliner = \Config\Database::connect()->table('kuliner');
    }

    public function index()
    {
        $data = [
            'title' => 'Home Kabupaten Tegal',
            'user' => $this->user,
            'jasa' => $this->jasa->limit(4)->get()->getResultArray(),
            'wisata' => $this->wisata->limit(4)->get()->getResultArray(),
            'kuliner' => $this->kuliner->limit(4)->get()->getResultArray(),
            'penginapan' => $this->penginapan->limit(4)->get()->getResultArray()
        ];

        return view('home/index', $data);
    }
}
