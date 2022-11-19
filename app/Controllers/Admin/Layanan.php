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
        // QUERY DATA ADMIN
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        $data = [
            'title' => "Jasa Kabupaten Tegal",
            'admin' => $admin,
            'jasa' => $this->jasaModel->findAll()
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
