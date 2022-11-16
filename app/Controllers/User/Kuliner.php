<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\KulinerModel;

class Kuliner extends BaseController
{
    protected $kulinerModel;

    public function __construct()
    {
        $this->kulinerModel = new KulinerModel();
    }

    public function index()
    {
        $menu = $this->request->getGet('menu');
        $nama = $this->request->getGet('nama');

        switch ($menu) {
            case 'makanan':
                if ($nama) {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu)->asArray()->like('nama_kuliner', $nama)->findAll();
                } else {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu)->findAll();
                }
                break;
            case 'minuman':
                if ($nama) {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu)->asArray()->like('nama_kuliner', $nama)->findAll();
                } else {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu)->findAll();
                }
                break;
            case 'camilan':
                if ($nama) {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu)->asArray()->like('nama_kuliner', $nama)->findAll();
                } else {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu)->findAll();
                }
                break;
            default:
                if ($nama) {
                    $kuliner = $this->kulinerModel->like('nama_kuliner', $nama)->findAll();
                } else {
                    $kuliner = $this->kulinerModel->findAll();
                }
        }

        $data = [
            'title' => 'Kuliner Kota Tegal',
            'kuliner' => $kuliner,
            'menuGet' => $menu,
            'user' => $this->user
        ];

        return view('kuliner/index', $data);
    }

    public function detail($slug)
    {
        $kuliner = $this->kulinerModel->where(['slug' => $slug])->first();
        $nama = $kuliner['nama_kuliner'];

        $data = [
            'title' => "Kuliner $nama",
            'kuliner' => $kuliner,
            'user' => $this->user
        ];

        return view('kuliner/detail', $data);
    }
}
