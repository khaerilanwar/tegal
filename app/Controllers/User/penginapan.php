<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\PenginapanModel;

class Penginapan extends BaseController
{
    protected $penginapanModel;

    public function __construct()
    {
        $this->penginapanModel = new PenginapanModel();
    }

    public function index()
    {
        $kategori = $this->request->getGet('kategori');
        $nama = $this->request->getGet('nama');

        switch ($kategori) {
            case 'hotel':
                if ($nama) {
                    $penginapan = $this->penginapanModel->where('jenis_penginapan', $kategori)->asArray()->like('nama_penginapan', $nama)->findAll();
                } else {
                    $penginapan = $this->penginapanModel->where('jenis_penginapan', $kategori)->findAll();
                }
                break;
            case 'villa':
                if ($nama) {
                    $penginapan = $this->penginapanModel->where('jenis_penginapan', $kategori)->asArray()->like('nama_penginapan', $nama)->findAll();
                } else {
                    $penginapan = $this->penginapanModel->where('jenis_penginapan', $kategori)->findAll();
                }
                break;
            default:
                if ($nama) {
                    $penginapan = $this->penginapanModel->like('nama_penginapan', $nama)->findAll();
                } else {
                    $penginapan = $this->penginapanModel->findAll();
                }
        }

        $data = [
            'title' => 'Penginapan Kabupaten Tegal',
            'penginapan' => $penginapan,
            'kategoriGet' => $kategori,
            'user' => $this->user
        ];

        return view('penginapan/index', $data);
    }

    public function detail($slug)
    {
        $penginapan = $this->penginapanModel->where(['slug' => $slug])->first();
        $nama = $penginapan['nama_penginapan'];

        $data = [
            'title' => "Penginapan $nama",
            'penginapan' => $penginapan,
            'user' => $this->user
        ];

        return view('penginapan/detail', $data);
    }

    public function addPenginapan()
    {
        $rules = [
            'nama_penginapan' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama penginapan harus diisi'
                ]
            ],
            'jenis_penginapan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis penginapan harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required|trim|numeric',
                'errors' => [
                    'required' => 'Harga harus diisi',
                    'numeric' => 'Masukkan angka'
                ]
            ],
            'alamat' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Alamat harus diisi',
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|trim',
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
            return redirect()->to('/pasang-iklan?bidang=penginapan#form')->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // generate nama gambar
        $namaGambar = $fileGambar->getRandomName();

        // pindahkan file ke folder img
        $fileGambar->move('assets/img', $namaGambar);

        $this->penginapanModel->save([
            'nama_penginapan' => $this->request->getPost('nama_penginapan'),
            'slug' => url_title($this->request->getPost('nama_penginapan'), '-', true),
            'user_email' => session()->email,
            'nomor_user' => $this->request->getPost('nomor_user'),
            'jenis_penginapan' => $this->request->getPost('jenis_penginapan'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'alamat' => $this->request->getPost('alamat'),
            'maps' => $this->request->getPost('maps'),
            'gambar' => $namaGambar
        ]);

        return redirect()->to('/pasang-iklan');
    }
}
