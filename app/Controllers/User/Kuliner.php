<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\KulinerModel;
use App\Models\TefoodModel;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;

class Kuliner extends BaseController
{
    protected $kulinerModel;
    protected $tefoodModel;
    protected $userModel;

    public function __construct()
    {
        $this->kulinerModel = new KulinerModel();
        $this->tefoodModel = new TefoodModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $currentPage = $this->request->getGet('page') ? $this->request->getGet('page') : 1;
        $menu = $this->request->getGet('t');
        $nama = $this->request->getGet('s');

        switch ($menu) {
            case 'makanan':
                if ($nama) {
                    $kuliner = $this->kulinerModel->orderBy('nama', 'RANDOM')->where('jenis_kuliner', $menu)->where('status', 1)->like('nama', $nama);
                } else {
                    $kuliner = $this->kulinerModel->orderBy('nama', 'RANDOM')->where('jenis_kuliner', $menu);
                }
                break;
            case 'minuman':
                if ($nama) {
                    $kuliner = $this->kulinerModel->orderBy('nama', 'RANDOM')->where('jenis_kuliner', $menu)->where('status', 1)->like('nama', $nama);
                } else {
                    $kuliner = $this->kulinerModel->orderBy('nama', 'RANDOM')->where('jenis_kuliner', $menu)->where('status', 1);
                }
                break;
            case 'camilan':
                if ($nama) {
                    $kuliner = $this->kulinerModel->orderBy('nama', 'RANDOM')->where('jenis_kuliner', $menu)->where('status', 1)->like('nama', $nama);
                } else {
                    $kuliner = $this->kulinerModel->orderBy('nama', 'RANDOM')->where('jenis_kuliner', $menu)->where('status', 1);
                }
                break;
            default:
                if ($nama) {
                    $kuliner = $this->kulinerModel->orderBy('nama', 'RANDOM')->where('status', 1)->like('nama', $nama);
                } else {
                    $kuliner = $this->kulinerModel->orderBy('nama', 'RANDOM')->where('status', 1);
                }
        }

        $data = [
            'title' => 'Kuliner Kota Tegal',
            'kuliner' => $kuliner->paginate(6, 'kuliner'),
            'pager' => $this->kulinerModel->pager,
            'currentPage' => $currentPage,
            'menuGet' => $menu,
            'user' => $this->user
        ];

        return view('kuliner/index', $data);
    }

    public function detail($id)
    {
        $db = \Config\Database::connect();

        $kuliner = $this->kulinerModel->find($id);
        $nama = $kuliner['nama'];
        $rating = $db->table('rating');
        $rating->select('rating.tanggal, rating.rate, rating.review, user.nama, user.gambar');
        $rating->join('user', 'user.id = rating.id_user')->orderBy('rating.tanggal', 'DESC');
        $rating = $rating->getWhere(['rating.id_produk' => $id, 'rating.jenis_produk' => 'kuliner'])->getResultArray();

        $rating_mean = $db->table('rating')->selectAvg('rate', 'rate_mean')->where('id_produk', $id)->get()->getRowArray();

        $data = [
            'title' => "Kuliner $nama",
            'kuliner' => $kuliner,
            'user' => $this->user,
            'rating_global' => $rating_mean,
            'rating' => $rating
        ];

        return view('kuliner/detail', $data);
    }

    public function pesanKuliner()
    {

        $id_produk = htmlspecialchars($this->request->getPost('idProduk'));
        $produk = $this->kulinerModel->find($id_produk);
        $total = htmlspecialchars($this->request->getPost('hargaProduk')) * htmlspecialchars($this->request->getPost('jumlah'));

        $this->tefoodModel->save([
            'tanggal_pesan' => Time::now(),
            'jumlah' => htmlspecialchars($this->request->getPost('jumlah')),
            'jenis_pesan' => 'kuliner',
            'id_customer' => $this->user['id'],
            'id_penjual' => $produk['id_user'],
            'id_produk' => $id_produk,
            'harga_total' => $total,
            'status' => 0
        ]);

        $this->userModel->update($this->user['id'], ['saldo' => $this->user['saldo'] - $total]);

        $this->kulinerModel->update($id_produk, [
            'terjual' => $produk['terjual'] + htmlspecialchars($this->request->getPost('jumlah')),
            'pendapatan' => $produk['pendapatan'] + $total
        ]);

        session()->setFlashdata('pesanProduk', 'Berhasil melakukan pemesanan');

        return redirect()->to('/kuliner');
    }

    public function addKuliner()
    {
        $rules = [
            'nama' => [
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
                // 'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    // 'uploaded' => 'file belum diunggah',
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
            if ($this->request->getPost('jenis_kuliner') == 'Makanan') {
                $namaGambar = 'makanan.jpg';
            } elseif ($this->request->getPost('jenis_kuliner') == 'Minuman') {
                $namaGambar = 'minuman.jpeg';
            } elseif ($this->request->getPost('jenis_kuliner') == 'Camilan') {
                $namaGambar = 'camilan.jpg';
            }
        }

        $this->kulinerModel->save([
            'nama' => htmlspecialchars($this->request->getPost('nama')),
            'jenis_kuliner' => htmlspecialchars($this->request->getPost('jenis_kuliner')),
            'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
            'harga' => htmlspecialchars($this->request->getPost('harga')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'maps' => htmlspecialchars($this->request->getPost('maps')),
            'gambar' => $namaGambar,
            'status' => 0,
            'id_user' => $this->user['id']
        ]);

        session()->setFlashdata('addKuliner', 'Menunggu konfirmasi admin');

        return redirect()->to('/mitra');
    }

    public function hapus($id)
    {
        $kuliner = $this->kulinerModel->find($id);

        $imgDefault = ['makanan.jpg', 'minuman.jpeg', 'camilan.jpg'];
        if (!in_array($kuliner['gambar'], $imgDefault)) {
            // hapus gambar
            unlink('assets/img/' . $kuliner['gambar']);
        }

        $this->kulinerModel->delete($id);
        session()->setFlashdata('hapusIklan', 'Data iklan berhasil dihapus!');

        return redirect()->to('/mitra');
    }
}
