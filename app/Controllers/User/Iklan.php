<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\jasaModel;

class Iklan extends BaseController
{
    protected $jasaModel;

    public function __construct()
    {
        $this->jasaModel = new jasaModel();
    }

    public function index()
    {
        $menu = $this->request->getGet('bidang');

        if ($menu == 'kuliner') {
            $part = 'user/partial/kuliner';
        } elseif ($menu == 'penginapan') {
            $part = 'user/partial/penginapan';
        } elseif ($menu == 'jasa') {
            $part = 'user/partial/jasa';
        } else {
            $part = 'user/partial/index';
        }

        $data = [
            'title' => 'Pasang Iklan Anda',
            'user' => $this->user,
            'partial' => $part
        ];

        return view('user/iklan', $data);
    }

    public function addJasa()
    {
        $fileGambar = $this->request->getFile('gambar');

        // generate nama gambar
        $namaGambar = $fileGambar->getRandomName();

        // pindahkan file ke folder img
        $fileGambar->move('assets/img', $namaGambar);

        $this->jasaModel->save([
            'nama_jasa' => $this->request->getPost('nama_jasa'),
            'bidang_jasa' => $this->request->getPost('bidang_jasa'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'maps' => $this->request->getPost('maps'),
            'gambar' => $namaGambar
        ]);

        return redirect()->to('/pasang-iklan');
    }
}
