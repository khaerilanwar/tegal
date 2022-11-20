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
        // QUERY DATA ADMIN
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        $data = [
            'title' => "Jasa Kabupaten Tegal",
            'admin' => $admin,
            'jasa' => $this->jasaModel->paginate(10, 'jasaAdmin'),
            'pager' => $this->jasaModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/jasa', $data);
    }

    public function hapus($id)
    {
        $this->jasaModel->delete($id);
        session()->setFlashdata('pesan', 'Objek Wisata berhasil dihapus!');
        session()->setFlashdata('warna', 'success');

        return redirect()->to('/layanan');
    }
}
