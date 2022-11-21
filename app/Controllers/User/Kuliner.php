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
        $currentPage = $this->request->getGet('page') ? $this->request->getGet('page') : 1;
        $menu = $this->request->getGet('menu');
        $nama = $this->request->getGet('nama');

        switch ($menu) {
            case 'makanan':
                if ($nama) {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu)->like('nama_kuliner', $nama);
                } else {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu);
                }
                break;
            case 'minuman':
                if ($nama) {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu)->like('nama_kuliner', $nama);
                } else {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu);
                }
                break;
            case 'camilan':
                if ($nama) {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu)->like('nama_kuliner', $nama);
                } else {
                    $kuliner = $this->kulinerModel->where('jenis_kuliner', $menu);
                }
                break;
            default:
                if ($nama) {
                    $kuliner = $this->kulinerModel->like('nama_kuliner', $nama);
                } else {
                    $kuliner = $this->kulinerModel;
                }
        }

        $data = [
            'title' => 'Kuliner Kota Tegal',
            'kuliner' => $kuliner->paginate(8, 'kuliner'),
            'pager' => $this->kulinerModel->pager,
            'currentPage' => $currentPage,
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

    public function addKuliner()
    {
        $rules = [
            'nama_kuliner' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama kuliner harus diisi'
                ]
            ],
            'jenis_kuliner' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kuliner harus diisi'
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
            return redirect()->to('/pasang-iklan?bidang=kuliner#form')->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // generate nama gambar
        $namaGambar = $fileGambar->getRandomName();

        // pindahkan file ke folder img
        $fileGambar->move('assets/img', $namaGambar);

        $this->kulinerModel->save([
            'nama_kuliner' => htmlspecialchars($this->request->getPost('nama_kuliner')),
            'slug' => url_title(htmlspecialchars($this->request->getPost('nama_kuliner')), '-', true),
            'user_email' => session()->email,
            'nomor_user' => htmlspecialchars($this->request->getPost('nomor_user')),
            'jenis_kuliner' => htmlspecialchars($this->request->getPost('jenis_kuliner')),
            'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
            'harga' => htmlspecialchars($this->request->getPost('harga')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'maps' => htmlspecialchars($this->request->getPost('maps')),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('addKuliner', 'Berhasil menambahkan iklan Kuliner');

        return redirect()->to('/pasang-iklan');
    }

    public function hapus($id)
    {
        $kuliner = $this->kulinerModel->find($id);

        if ($kuliner['gambar'] != 'anwar.jpeg') {
            // hapus gambar
            unlink('assets/img/' . $kuliner['gambar']);
        }

        $this->kulinerModel->delete($id);

        return redirect()->to('/pasang-iklan');
    }
}
