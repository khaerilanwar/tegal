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
    }

    public function index()
    {
        // QUERY DATA ADMIN
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        $data = [
            'title' => "Penginapan Kabupaten Tegal",
            'admin' => $admin,
            'penginapan' => $this->penginapanModel->findAll()
        ];

        return view('admin/penginapan', $data);
    }

    public function hapus($id)
    {
        $this->penginapanModel->delete($id);
        session()->setFlashdata('pesan', 'Objek Wisata berhasil dihapus!');
        session()->setFlashdata('warna', 'success');

        return redirect()->to('/penginapan-tegal');
    }
}
