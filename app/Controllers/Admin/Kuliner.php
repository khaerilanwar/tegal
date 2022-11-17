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
    }

    public function index()
    {
        // QUERY DATA ADMIN
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        $data = [
            'title' => "Aneka Kuliner Kabupaten Tegal",
            'admin' => $admin,
            'kuliner' => $this->kulinerModel->findAll()
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
