<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\PenginapanModel;
use App\Models\PesanPenginapanModel;

class Penginapan extends BaseController
{
    protected $penginapanModel;
    protected $bookPenginapan;

    public function __construct()
    {
        $this->penginapanModel = new PenginapanModel();
        $this->bookPenginapan = new PesanPenginapanModel();
    }

    public function index()
    {
        $currentPage = $this->request->getGet('page') ? $this->request->getGet('page') : 1;
        $kategori = $this->request->getGet('t');
        $nama = $this->request->getGet('s');

        switch ($kategori) {
            case 'hotel':
                if ($nama) {
                    $penginapan = $this->penginapanModel->orderBy('nama', 'RANDOM')->where('jenis_penginapan', $kategori)->where('status', 1)->like('nama', $nama);
                } else {
                    $penginapan = $this->penginapanModel->orderBy('nama', 'RANDOM')->where('jenis_penginapan', $kategori)->where('status', 1);
                }
                break;
            case 'villa':
                if ($nama) {
                    $penginapan = $this->penginapanModel->orderBy('nama', 'RANDOM')->where('jenis_penginapan', $kategori)->where('status', 1)->like('nama', $nama);
                } else {
                    $penginapan = $this->penginapanModel->orderBy('nama', 'RANDOM')->where('jenis_penginapan', $kategori)->where('status', 1);
                }
                break;
            default:
                if ($nama) {
                    $penginapan = $this->penginapanModel->orderBy('nama', 'RANDOM')->where('status', 1)->like('nama', $nama);
                } else {
                    $penginapan = $this->penginapanModel->orderBy('nama', 'RANDOM')->where('status', 1);
                }
        }

        $data = [
            'title' => 'Penginapan Kabupaten Tegal',
            'penginapan' => $penginapan->paginate(6, 'penginapan'),
            'pager' => $this->penginapanModel->pager,
            'currentPage' => $currentPage,
            'kategoriGet' => $kategori,
            'user' => $this->user,
        ];

        return view('penginapan/index', $data);
    }

    public function detail($id)
    {
        $penginapan = $this->penginapanModel->find($id);
        $nama = $penginapan['nama'];

        $data = [
            'title' => "Penginapan $nama",
            'penginapan' => $penginapan,
            'user' => $this->user
        ];

        return view('penginapan/detail', $data);
    }

    public function pesanPenginapan()
    {
        $idProduk = htmlspecialchars($this->request->getPost('id_produk'));

        $this->bookPenginapan->save([
            'tanggal_kedatangan' => htmlspecialchars($this->request->getPost('tanggal_datang')),
            'nama_lengkap' => htmlspecialchars($this->request->getPost('nama')),
            'jumlah' => htmlspecialchars($this->request->getPost('quantity')),
            'id_user' => $this->user['id'],
            'id_produk' => $idProduk
        ]);

        session()->setFlashdata('pesanProduk', 'Berhasil melakukan pemesanan');

        return redirect()->to("/penginapan/detail/$idProduk");
    }

    public function addPenginapan()
    {
        $rules = [
            'nama' => [
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
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/mitra')->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        if ($fileGambar->getError() == 0) {
            // generate nama gambar
            $namaGambar = $fileGambar->getRandomName();

            // pindahkan file ke folder img
            $fileGambar->move('assets/img', $namaGambar);
        } else {
            if ($this->request->getPost('jenis_penginapan') == 'Hotel') {
                $namaGambar = 'hotel.jpg';
            } elseif ($this->request->getPost('jenis_penginapan') == 'Villa') {
                $namaGambar = 'villa.jpg';
            }
        }

        $this->penginapanModel->save([
            'nama' => htmlspecialchars($this->request->getPost('nama')),
            'jenis_penginapan' => htmlspecialchars($this->request->getPost('jenis_penginapan')),
            'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
            'harga' => htmlspecialchars($this->request->getPost('harga')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'maps' => htmlspecialchars($this->request->getPost('maps')),
            'gambar' => $namaGambar,
            'status' => 0,
            'id_user' => $this->user['id']
        ]);

        session()->setFlashdata('addPenginapan', 'Berhasil menambahkan iklan Penginapan');

        return redirect()->to('/mitra');
    }

    public function hapus($id)
    {
        $penginapan = $this->penginapanModel->find($id);

        $imgDefault = ['hotel.jpg', 'villa.jpg'];
        if (!in_array($penginapan['gambar'], $imgDefault)) {
            // hapus gambar
            unlink('assets/img/' . $penginapan['gambar']);
        }

        $this->penginapanModel->delete($id);
        session()->setFlashdata('hapusIklan', 'Data iklan berhasil dihapus!');

        return redirect()->to('/mitra');
    }
}
