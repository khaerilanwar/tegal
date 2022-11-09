<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\jasaModel;

class Iklan extends BaseController
{
    protected $jasaModel;

    public function __construct()
    {
        helper('tegal');
        cekLogin();
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
            'partial' => $part,
            'validation' => \Config\Services::validation()
        ];

        return view('user/iklan', $data);
    }

    public function addJasa()
    {
        // nama_jasa, bidang_jasa, harga, deskripsi, gambar, maps

        $rules = [
            'nama_jasa' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama jasa harus diisi'
                ]
            ],
            'bidang_jasa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Bidang jasa harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required|trim|numeric',
                'errors' => [
                    'required' => 'Harga harus diisi',
                    'numeric' => 'Masukkan angka'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi',
                ]
            ],
            'maps' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Frame maps harus diisi',
                ]
            ],
            'gambar' => [
                'rules' => 'required|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'required' => 'File gambar belum diunggah',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/pasang-iklan?bidang=jasa#form')->withInput();
        }

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
