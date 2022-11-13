<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\jasaModel;

class Iklan extends BaseController
{
    protected $jasaModel;
    protected $jasa;

    public function __construct()
    {
        helper('tegal');
        cekLogin();
        $this->jasaModel = new jasaModel();
        $this->jasa = \Config\Database::connect()->table('jasa');
    }

    public function index()
    {
        $menu = $this->request->getGet('bidang');
        $displayIklan = $this->request->getGet('menu');

        $dataIklan = $this->jasa->getWhere(['user_email' => session()->email])->getResultArray();

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
            'dataIklan' => $dataIklan,
            'validation' => \Config\Services::validation()
        ];

        return view('user/iklan', $data);
    }

    public function update($id)
    {
        $fileGambar = $this->request->getFile('gambar');

        // cek gambar apakah tetap gambar lama
        if ($fileGambar->getError() ==  4) {
            $namaGambar = $this->request->getPost('gambarLama');
        } else {
            // generate nama file random
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('assets/img', $namaGambar);
            // hapus file lama
            unlink('assets/img/' . $this->request->getPost('gambarLama'));
        }

        $this->jasaModel->update($id, [
            'nama_jasa' => $this->request->getPost('nama_jasa'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'maps' => $this->request->getPost('maps'),
            'gambar' => $namaGambar
        ]);

        return redirect()->to('/pasang-iklan');
    }

    public function hapus($id)
    {
        $jasa = $this->jasaModel->find($id);

        if ($jasa['gambar'] != 'anwar.jpeg') {
            // hapus gambar
            unlink('assets/img/' . $jasa['gambar']);
        }

        $this->jasaModel->delete($id);

        return redirect()->to('/pasang-iklan');
    }

    public function addJasa()
    {
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
                'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'file belum diunggah',
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
            'user_email' => session()->email,
            'nomor_user' => $this->request->getPost('nomor_user'),
            'bidang_jasa' => $this->request->getPost('bidang_jasa'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'maps' => $this->request->getPost('maps'),
            'gambar' => $namaGambar
        ]);

        return redirect()->to('/pasang-iklan');
    }
}
