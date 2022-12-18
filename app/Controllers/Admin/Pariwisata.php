<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PesananModel;
use App\Models\WisataModel;

class Pariwisata extends BaseController
{
    protected $wisataModel;
    protected $pesananModel;

    public function __construct()
    {
        $this->wisataModel = new WisataModel();
        $this->pesananModel = new PesananModel();
        helper('tegal');
        cekLogin();
        cekAdmin();
    }

    public function index()
    {
        $currentPage = $this->request->getGet('page_wisataAdmin') ? $this->request->getGet('page_wisataAdmin') : 1;
        // Mengambil inputan cari user
        $dasar = $this->request->getGet('based');
        $cari = $this->request->getGet('wisata');

        // Query data admin
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        switch ($dasar) {
            case 'nama_wisata':
                $wisata = $this->wisataModel->orderBy('id', 'desc')->asArray()->like('nama_wisata', $cari);
                break;
            case 'lokasi':
                $wisata = $this->wisataModel->orderBy('id', 'desc')->asArray()->like('lokasi', $cari);
                break;
            case 'alamat':
                $wisata = $this->wisataModel->orderBy('id', 'desc')->asArray()->like('alamat', $cari);
                break;
            default:
                $wisata = $this->wisataModel->orderBy('id', 'desc');
        }

        $data = [
            'title' => "Pariwisata Kabupaten Tegal",
            'admin' => $admin,
            'validation' => \Config\Services::validation(),
            'wisata' => $wisata->paginate(10, 'wisataAdmin'),
            'pager' => $this->wisataModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/pariwisata', $data);
    }

    public function pesananTiket()
    {
        $currentPage = $this->request->getGet('page_tiketAdmin') ? $this->request->getGet('page_tiketAdmin') : 1;

        // Mengambil inputan cari user
        $dasar = $this->request->getGet('based');
        $cari = $this->request->getGet('pesanan');

        // Query data admin
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        switch ($dasar) {
            case 'customer':
                $pesanan = $this->pesananModel->orderBy('tanggal_pesan', 'desc')->asArray()->like('customer', $cari);
                break;
            case 'no_pesanan':
                $pesanan = $this->pesananModel->orderBy('tanggal_pesan', 'desc')->asArray()->like('no_pesanan', $cari);
                break;
            default:
                $pesanan = $this->pesananModel->orderBy('tanggal_pesan', 'desc');
        }

        $data = [
            'title' => "Pesanan Tiket Pariwisata Kabupaten Tegal",
            'admin' => $admin,
            'validation' => \Config\Services::validation(),
            'pesanan' => $pesanan->paginate(10, 'tiketAdmin'),
            'pager' => $this->pesananModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/pesananTiket', $data);
    }

    public function hapus($id, $jenis)
    {
        if ($jenis == 'wisata') {
            $this->wisataModel->delete($id);
            session()->setFlashdata('hapus', 'Data berhasil dihapus!');

            return redirect()->to('/pariwisata');
        } else {
            $this->pesananModel->delete($id);
            session()->setFlashdata('hapus', 'Data berhasil dihapus!');

            return redirect()->to('/pariwisata/pesanan-tiket');
        }
    }

    public function edit($id)
    {
        // 'nama_wisata', 'harga', 'lokasi', 'maps', 'alamat', 'deskripsi'

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
            // unlink('assets/img/' . $this->request->getPost('gambarLama'));
            try {
                unlink('assets/img/' . $this->request->getPost('gambarLama'));
            } catch (Exception $e) {
                session()->setFlashdata('gagalUpdate', 'Gagal update data');
                return redirect()->to('/pasang-iklan');
            }
        }

        $data = [
            'nama_wisata' => htmlspecialchars($this->request->getPost('nama_wisata')),
            'harga' => htmlspecialchars($this->request->getPost('harga')),
            'lokasi' => htmlspecialchars($this->request->getPost('lokasi')),
            'maps' => htmlspecialchars($this->request->getPost('maps')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
            'gambar' => $namaGambar
        ];

        $this->wisataModel->update($id, $data);

        session()->setFlashdata('editWisata', 'Objek Wisata berhasil diubah!');

        return redirect()->to('/pariwisata');
    }

    public function tambahWisata()
    {
        $fileGambar = $this->request->getFile('gambar');

        if ($fileGambar->getError() == 0) {
            // generate nama gambar
            $namaGambar = $fileGambar->getRandomName();

            // pindahkan file ke folder img
            $fileGambar->move('assets/img', $namaGambar);
        } else {
            $namaGambar = 'wisata.jpeg';
        }

        $data = [
            'nama_wisata' => htmlspecialchars($this->request->getPost('nama_wisata')),
            'harga' => htmlspecialchars($this->request->getPost('harga')),
            'lokasi' => htmlspecialchars($this->request->getPost('lokasi')),
            'gambar' => $namaGambar,
            'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'maps' => htmlspecialchars($this->request->getPost('maps')),
            'slug' => url_title(htmlspecialchars($this->request->getPost('nama_wisata')), '-', true)
        ];

        $this->wisataModel->insert($data);

        session()->setFlashdata('tambahWisata', 'Objek Wisata berhasil ditambah!');

        return redirect()->to('/pariwisata');
    }
}
