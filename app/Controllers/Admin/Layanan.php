<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JasaModel;

class Layanan extends BaseController
{
    protected $jasaModel;

    public function __construct()
    {
        $this->jasaModel = new JasaModel();
        helper('tegal');
        cekLogin();
        cekAdmin();
    }

    public function index()
    {
        $currentPage = $this->request->getGet('page_jasaAdmin') ? $this->request->getGet('page_jasaAdmin') : 1;

        // Mengambil inputan cari user
        $dasar = $this->request->getGet('based');
        $cari = $this->request->getGet('jasa');

        // QUERY DATA ADMIN
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        switch ($dasar) {
            case 'nama_jasa':
                $jasa = $this->jasaModel->where('status', 1)->orderBy('id', 'desc')->asArray()->like('nama_jasa', $cari);
                break;
            case 'bidang_jasa':
                $jasa = $this->jasaModel->where('status', 1)->orderBy('id', 'desc')->asArray()->like('bidang_jasa', $cari);
                break;
            case 'user_email':
                $jasa = $this->jasaModel->where('status', 1)->orderBy('id', 'desc')->asArray()->like('user_email', $cari);
                break;
            default:
                $jasa = $this->jasaModel->where('status', 1)->orderBy('id', 'desc');
        }

        $data = [
            'title' => "Jasa Kabupaten Tegal",
            'admin' => $admin,
            'validation' => \Config\Services::validation(),
            'jasa' => $jasa->paginate(10, 'jasaAdmin'),
            'pager' => $this->jasaModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/jasa', $data);
    }

    public function confirm()
    {
        $currentPage = $this->request->getGet('page_jasaConfirmAdmin') ? $this->request->getGet('page_jasaConfirmAdmin') : 1;
        // Mengambil inputan cari user
        $dasar = $this->request->getGet('based');
        $cari = $this->request->getGet('jasa');

        // Query data admin
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        switch ($dasar) {
            case 'nama_jasa':
                $jasa = $this->jasaModel->where('status', 0)->orderBy('id', 'desc')->asArray()->like('nama_jasa', $cari);
                break;
            case 'bidang_jasa':
                $jasa = $this->jasaModel->where('status', 0)->orderBy('id', 'desc')->asArray()->like('bidang_jasa', $cari);
                break;
            case 'user_email':
                $jasa = $this->jasaModel->where('status', 0)->orderBy('id', 'desc')->asArray()->like('user_email', $cari);
                break;
            default:
                $jasa = $this->jasaModel->where('status', 0)->orderBy('id', 'desc');
        }

        $data = [
            'title' => "Jasa Kabupaten Tegal",
            'admin' => $admin,
            'validation' => \Config\Services::validation(),
            'jasa' => $jasa->paginate(10, 'jasaConfirmAdmin'),
            'pager' => $this->jasaModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/jasaConfirm', $data);
    }

    public function apply($id)
    {
        $this->jasaModel->update($id, ['status' => 1]);
        session()->setFlashdata('konfirmasi', 'Berhasil konfirmasi iklan!');

        return redirect()->to('/layanan/confirm');
    }

    public function hapus($id, $iklan = null)
    {
        $this->jasaModel->delete($id);
        if ($iklan == 'daftar') {
            session()->setFlashdata('hapus', 'Jasa berhasil dihapus!');
            return redirect()->to('/layanan');
        } else {
            session()->setFlashdata('hapusIklan', 'Konfirmasi berhasil dihapus!');
            return redirect()->to('/layanan/confirm');
        }
    }
}
