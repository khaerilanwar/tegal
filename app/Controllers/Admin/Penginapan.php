<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenginapanModel;

class Penginapan extends BaseController
{
    protected $penginapanModel;

    public function __construct()
    {
        $this->penginapanModel = new PenginapanModel();
        helper('tegal');
        cekLogin();
        cekAdmin();
    }

    public function index()
    {
        $currentPage = $this->request->getGet('page_penginapanAdmin') ? $this->request->getGet('page_penginapanAdmin') : 1;
        // Mengambil inputan cari user
        $dasar = $this->request->getGet('based');
        $cari = $this->request->getGet('penginapan');

        // Query data admin
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        switch ($dasar) {
            case 'nama_penginapan':
                $penginapan = $this->penginapanModel->where('status', 1)->orderBy('id', 'desc')->asArray()->like('nama_penginapan', $cari);
                break;
            case 'jenis_penginapan':
                $penginapan = $this->penginapanModel->where('status', 1)->orderBy('id', 'desc')->asArray()->like('jenis_penginapan', $cari);
                break;
            case 'user_email':
                $penginapan = $this->penginapanModel->where('status', 1)->orderBy('id', 'desc')->asArray()->like('user_email', $cari);
                break;
            default:
                $penginapan = $this->penginapanModel->where('status', 1)->orderBy('id', 'desc');
        }

        $data = [
            'title' => "Penginapan Kabupaten Tegal",
            'admin' => $admin,
            'validation' => \Config\Services::validation(),
            'penginapan' => $penginapan->paginate(10, 'penginapanAdmin'),
            'pager' => $this->penginapanModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/penginapan', $data);
    }

    public function confirm()
    {
        $currentPage = $this->request->getGet('page_penginapanConfirmAdmin') ? $this->request->getGet('page_penginapanConfirmAdmin') : 1;
        // Mengambil inputan cari user
        $dasar = $this->request->getGet('based');
        $cari = $this->request->getGet('penginapan');

        // Query data admin
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        switch ($dasar) {
            case 'nama_penginapan':
                $penginapan = $this->penginapanModel->where('status', 0)->orderBy('id', 'desc')->asArray()->like('nama_penginapan', $cari);
                break;
            case 'jenis_penginapan':
                $penginapan = $this->penginapanModel->where('status', 0)->orderBy('id', 'desc')->asArray()->like('jenis_penginapan', $cari);
                break;
            case 'user_email':
                $penginapan = $this->penginapanModel->where('status', 0)->orderBy('id', 'desc')->asArray()->like('user_email', $cari);
                break;
            default:
                $penginapan = $this->penginapanModel->where('status', 0)->orderBy('id', 'desc');
        }

        $data = [
            'title' => "Penginapan Kabupaten Tegal",
            'admin' => $admin,
            'validation' => \Config\Services::validation(),
            'penginapan' => $penginapan->paginate(10, 'penginapanConfirmAdmin'),
            'pager' => $this->penginapanModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/penginapanConfirm', $data);
    }

    public function apply($id)
    {
        $this->penginapanModel->update($id, ['status' => 1]);
        session()->setFlashdata('konfirmasi', 'Berhasil konfirmasi iklan!');

        return redirect()->to('/penginapan-tegal/confirm');
    }

    public function hapus($id, $iklan = null)
    {
        $this->penginapanModel->delete($id);
        if ($iklan == 'daftar') {
            session()->setFlashdata('hapus', 'Penginapan berhasil dihapus!');
            return redirect()->to('/penginapan-tegal');
        } else {
            session()->setFlashdata('hapusIklan', 'Konfirmasi berhasil dihapus!');
            return redirect()->to('/penginapan-tegal/confirm');
        }
    }
}
