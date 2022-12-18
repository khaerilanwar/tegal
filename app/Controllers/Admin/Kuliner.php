<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KulinerModel;

class Kuliner extends BaseController
{
    protected $kulinerModel;

    public function __construct()
    {
        $this->kulinerModel = new KulinerModel();
        helper('tegal');
        cekLogin();
        cekAdmin();
    }

    public function index()
    {
        $currentPage = $this->request->getGet('page_kulinerAdmin') ? $this->request->getGet('page_kulinerAdmin') : 1;

        // Mengambil inputan cari user
        $dasar = $this->request->getGet('based');
        $cari = $this->request->getGet('kuliner');

        // QUERY DATA ADMIN
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        switch ($dasar) {
            case 'nama_kuliner':
                $kuliner = $this->kulinerModel->where('status', 1)->orderBy('id', 'desc')->asArray()->like('nama_kuliner', $cari);
                break;
            case 'jenis_kuliner':
                $kuliner = $this->kulinerModel->where('status', 1)->orderBy('id', 'desc')->asArray()->like('jenis_kuliner', $cari);
                break;
            case 'user_email':
                $kuliner = $this->kulinerModel->where('status', 1)->orderBy('id', 'desc')->asArray()->like('user_email', $cari);
                break;
            default:
                $kuliner = $this->kulinerModel->where('status', 1)->orderBy('id', 'desc');
        }

        $data = [
            'title' => "Aneka Kuliner Kabupaten Tegal",
            'admin' => $admin,
            'validation' => \Config\Services::validation(),
            'kuliner' => $kuliner->paginate(10, 'kulinerAdmin'),
            'pager' => $this->kulinerModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/kuliner', $data);
    }

    public function confirm()
    {
        $currentPage = $this->request->getGet('page_kulinerConfirmAdmin') ? $this->request->getGet('page_kulinerConfirmAdmin') : 1;
        // Mengambil inputan cari user
        $dasar = $this->request->getGet('based');
        $cari = $this->request->getGet('kuliner');

        // Query data admin
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        switch ($dasar) {
            case 'nama_kuliner':
                $kuliner = $this->kulinerModel->where('status', 0)->orderBy('id', 'desc')->asArray()->like('nama_kuliner', $cari);
                break;
            case 'jenis_kuliner':
                $kuliner = $this->kulinerModel->where('status', 0)->orderBy('id', 'desc')->asArray()->like('jenis_kuliner', $cari);
                break;
            case 'user_email':
                $kuliner = $this->kulinerModel->where('status', 0)->orderBy('id', 'desc')->asArray()->like('user_email', $cari);
                break;
            default:
                $kuliner = $this->kulinerModel->where('status', 0)->orderBy('id', 'desc');
        }

        $data = [
            'title' => "Aneka Kuliner Kabupaten Tegal",
            'admin' => $admin,
            'validation' => \Config\Services::validation(),
            'kuliner' => $kuliner->paginate(10, 'kulinerConfirmAdmin'),
            'pager' => $this->kulinerModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/kulinerConfirm', $data);
    }

    public function apply($id)
    {
        $this->kulinerModel->update($id, ['status' => 1]);
        session()->setFlashdata('konfirmasi', 'Berhasil konfirmasi iklan!');

        return redirect()->to('/kuliner-tegal/confirm');
    }

    public function hapus($id, $iklan = null)
    {
        $this->kulinerModel->delete($id);
        if ($iklan == 'daftar') {
            session()->setFlashdata('hapus', 'Penginapan berhasil dihapus!');
            return redirect()->to('/kuliner-tegal');
        } else {
            session()->setFlashdata('hapusIklan', 'Konfirmasi berhasil dihapus!');
            return redirect()->to('/kuliner-tegal/confirm');
        }
    }
}
