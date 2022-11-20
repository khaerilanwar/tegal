<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\WisataModel;

class Pariwisata extends BaseController
{
    protected $wisataModel;

    public function __construct()
    {
        $this->wisataModel = new WisataModel();
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
                $wisata = $this->wisataModel->asArray()->like('nama_wisata', $cari);
                break;
            case 'lokasi':
                $wisata = $this->wisataModel->asArray()->like('lokasi', $cari);
                break;
            case 'alamat':
                $wisata = $this->wisataModel->asArray()->like('alamat', $cari);
                break;
            default:
                $wisata = $this->wisataModel;
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

    public function hapus($id)
    {
        $this->wisataModel->delete($id);
        session()->setFlashdata('pesan', 'Objek Wisata berhasil dihapus!');
        session()->setFlashdata('warna', 'success');

        return redirect()->to('/pariwisata');
    }

    public function edit($id)
    {
        // 'nama_wisata', 'harga', 'lokasi', 'maps', 'alamat', 'deskripsi'

        $data = [
            'nama_wisata' => htmlspecialchars($this->request->getPost('nama_wisata')),
            'harga' => htmlspecialchars($this->request->getPost('harga')),
            'lokasi' => htmlspecialchars($this->request->getPost('lokasi')),
            'maps' => htmlspecialchars($this->request->getPost('maps')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
            'gambar' => htmlspecialchars($this->request->getPost('gambar'))
        ];

        $this->wisataModel->update($id, $data);

        session()->setFlashdata('pesan', 'Objek Wisata berhasil diubah!');
        session()->setFlashdata('warna', 'success');

        return redirect()->to('/pariwisata');
    }

    public function tambahWisata()
    {
        $data = [
            'nama_wisata' => htmlspecialchars($this->request->getPost('nama_wisata')),
            'harga' => htmlspecialchars($this->request->getPost('harga')),
            'lokasi' => htmlspecialchars($this->request->getPost('lokasi')),
            'gambar' => htmlspecialchars($this->request->getPost('gambar')),
            'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'maps' => htmlspecialchars($this->request->getPost('maps')),
            'slug' => url_title(htmlspecialchars($this->request->getPost('nama_wisata')), '-', true)
        ];

        $this->wisataModel->insert($data);

        session()->setFlashdata('pesan', 'Objek Wisata berhasil ditambah!');
        session()->setFlashdata('warna', 'success');

        return redirect()->to('/pariwisata');
    }
}
