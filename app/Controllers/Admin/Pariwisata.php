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
    }

    public function index()
    {
        // Mengambil inputan cari user
        $dasar = $this->request->getGet('based');
        $cari = $this->request->getGet('wisata');

        // Query data admin
        $builder = $this->db->table('user');
        $admin = $builder->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        switch ($dasar) {
            case 'nama_wisata':
                $wisata = $this->wisataModel->asArray()->like('nama_wisata', $cari)->findAll();
                break;
            case 'lokasi':
                $wisata = $this->wisataModel->asArray()->like('lokasi', $cari)->findAll();
                break;
            case 'alamat':
                $wisata = $this->wisataModel->asArray()->like('alamat', $cari)->findAll();
                break;
            default:
                $wisata = $this->wisataModel->findAll();
        }

        // ?based=nama_wisata&wisata=curug

        // if ($dasar && $cari) {
        // return redirect()->to('/pariwisata?based=' . $dasar . '&wisata=' . $cari);
        //     header("Location: pariwisata?based=$dasar&wisata=$cari");
        //     die;
        // }

        $data = [
            'title' => "Pariwisata Kabupaten Tegal",
            'admin' => $admin,
            'validation' => \Config\Services::validation(),
            'wisata' => $wisata
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
            'nama_wisata' => $this->request->getPost('nama_wisata'),
            'harga' => $this->request->getPost('harga'),
            'lokasi' => $this->request->getPost('lokasi'),
            'maps' => $this->request->getPost('maps'),
            'alamat' => $this->request->getPost('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        $this->wisataModel->update($id, $data);

        session()->setFlashdata('pesan', 'Objek Wisata berhasil diubah!');
        session()->setFlashdata('warna', 'success');

        return redirect()->to('/pariwisata');
    }
}
