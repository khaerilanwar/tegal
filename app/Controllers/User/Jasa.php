<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\jasaModel;

class Jasa extends BaseController
{
    protected $jasaModel;
    protected $jasa;

    public function __construct()
    {
        $this->jasaModel = new jasaModel();
        $this->jasa = \Config\Database::connect()->table('jasa');
    }

    public function index()
    {
        $bidang = $this->request->getGet('bidang');
        $nama = $this->request->getGet('nama');

        switch ($bidang) {
            case 'elektronik':
                if ($nama) {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->asArray()->like('nama_jasa', $nama)->findAll();
                } else {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->findAll();
                }
                break;
            case 'pendidikan':
                if ($nama) {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->asArray()->like('nama_jasa', $nama)->findAll();
                } else {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->findAll();
                }
                break;
            case 'cleaning':
                if ($nama) {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->asArray()->like('nama_jasa', $nama)->findAll();
                } else {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->findAll();
                }
                break;
            case 'otomotif':
                if ($nama) {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->asArray()->like('nama_jasa', $nama)->findAll();
                } else {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->findAll();
                }
                break;
            case 'kesehatan':
                if ($nama) {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->asArray()->like('nama_jasa', $nama)->findAll();
                } else {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->findAll();
                }
                break;
            default:
                if ($nama) {
                    $jasa = $this->jasaModel->like('nama_jasa', $nama)->findAll();
                } else {
                    $jasa = $this->jasaModel->findAll();
                }
        }

        $data = [
            'title' => 'Jasa Kota Tegal',
            'jasa' => $jasa,
            'bidangGet' => $bidang,
            'user' => $this->user
        ];

        return view('jasa/index', $data);
    }

    public function detail()
    {
        return view('jasa/jasa');
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
