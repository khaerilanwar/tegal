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
        // QUERY DATA ADMIN
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        $data = [
            'title' => "Aneka Kuliner Kabupaten Tegal",
            'admin' => $admin,
            'kuliner' => $this->kulinerModel->paginate(10, 'kulinerAdmin'),
            'pager' => $this->kulinerModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/kuliner', $data);
    }

    public function hapus($id)
    {
        $this->kulinerModel->delete($id);
        session()->setFlashdata('pesan', 'Objek Wisata berhasil dihapus!');
        session()->setFlashdata('warna', 'success');

        return redirect()->to('/kuliner-tegal');
    }
}
