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
        $currentPage = $this->request->getGet('page') ? $this->request->getGet('page') : 1;
        $kategori = $this->request->getGet('kategori');
        $nama = $this->request->getGet('nama');

        switch ($kategori) {
            case 'hotel':
                if ($nama) {
                    // $penginapan = $this->penginapanModel->where('jenis_penginapan', $kategori)->asArray()->like('nama_penginapan', $nama);
                    $penginapan = $this->penginapanModel->where('jenis_penginapan', $kategori)->like('nama_penginapan', $nama);
                } else {
                    $penginapan = $this->penginapanModel->where('jenis_penginapan', $kategori);
                }
                break;
            case 'villa':
                if ($nama) {
                    // $penginapan = $this->penginapanModel->where('jenis_penginapan', $kategori)->asArray()->like('nama_penginapan', $nama);
                    $penginapan = $this->penginapanModel->where('jenis_penginapan', $kategori)->like('nama_penginapan', $nama);
                } else {
                    $penginapan = $this->penginapanModel->where('jenis_penginapan', $kategori);
                }
                break;
            default:
                if ($nama) {
                    $penginapan = $this->penginapanModel->like('nama_penginapan', $nama);
                } else {
                    $penginapan = $this->penginapanModel;
                }
        }

        $data = [
            'title' => 'Penginapan Kabupaten Tegal',
            'penginapan' => $penginapan->paginate(8, 'penginapan'),
            'pager' => $this->penginapanModel->pager,
            'currentPage' => $currentPage,
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
            'nama_penginapan' => htmlspecialchars($this->request->getPost('nama_penginapan')),
            'slug' => url_title(htmlspecialchars($this->request->getPost('nama_penginapan')), '-', true),
            'user_email' => session()->email,
            'nomor_user' => htmlspecialchars($this->request->getPost('nomor_user')),
            'jenis_penginapan' => htmlspecialchars($this->request->getPost('jenis_penginapan')),
            'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
            'harga' => htmlspecialchars($this->request->getPost('harga')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'maps' => htmlspecialchars($this->request->getPost('maps')),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('addPenginapan', 'Berhasil menambahkan iklan Penginapan');

        return redirect()->to('/pasang-iklan');
    }

    public function hapus($id)
    {
        $penginapan = $this->penginapanModel->find($id);

        if ($penginapan['gambar'] != 'anwar.jpeg') {
            // hapus gambar
            unlink('assets/img/' . $penginapan['gambar']);
        }

        $this->penginapanModel->delete($id);
        session()->setFlashdata('hapusIklan', 'Data iklan berhasil dihapus!');

        return redirect()->to('/pasang-iklan');
    }
}
