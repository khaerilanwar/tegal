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
        $currentPage = $this->request->getGet('page') ? $this->request->getGet('page') : 1;
        $bidang = $this->request->getGet('bidang');
        $nama = $this->request->getGet('nama');

        switch ($bidang) {
            case 'elektronik':
                if ($nama) {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->like('nama_jasa', $nama);
                } else {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang);
                }
                break;
            case 'pendidikan':
                if ($nama) {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->like('nama_jasa', $nama);
                } else {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang);
                }
                break;
            case 'cleaning':
                if ($nama) {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->like('nama_jasa', $nama);
                } else {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang);
                }
                break;
            case 'otomotif':
                if ($nama) {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->like('nama_jasa', $nama);
                } else {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang);
                }
                break;
            case 'kesehatan':
                if ($nama) {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang)->like('nama_jasa', $nama);
                } else {
                    $jasa = $this->jasaModel->where('bidang_jasa', $bidang);
                }
                break;
            default:
                if ($nama) {
                    $jasa = $this->jasaModel->like('nama_jasa', $nama);
                } else {
                    $jasa = $this->jasaModel;
                }
        }

        $data = [
            'title' => 'Jasa Kota Tegal',
            'jasa' => $jasa->paginate(8, 'jasa'),
            'pager' => $this->jasaModel->pager,
            'currentPage' => $currentPage,
            'bidangGet' => $bidang,
            'user' => $this->user
        ];

        return view('jasa/index', $data);
    }

    public function detail($slug)
    {
        $jasa = $this->jasaModel->where(['slug' => $slug])->first();
        $nama = $jasa['nama_jasa'];

        $data = [
            'title' => "Jasa $nama",
            'jasa' => $jasa,
            'user' => $this->user
        ];

        return view('jasa/detail', $data);
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
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi',
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
            'nama_jasa' => htmlspecialchars($this->request->getPost('nama_jasa')),
            'slug' => url_title(htmlspecialchars($this->request->getPost('nama_jasa')), '-', true),
            'user_email' => session()->email,
            'nomor_user' => htmlspecialchars($this->request->getPost('nomor_user')),
            'bidang_jasa' => htmlspecialchars($this->request->getPost('bidang_jasa')),
            'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
            'harga' => htmlspecialchars($this->request->getPost('harga')),
            'maps' => htmlspecialchars($this->request->getPost('maps')),
            'gambar' => $namaGambar,
            'alamat' => htmlspecialchars($this->request->getPost('alamat'))
        ]);

        session()->setFlashdata('addJasa', 'Berhasil menambahkan iklan Jasa');

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
}
