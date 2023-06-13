<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TopUpModel;

class Tecation extends BaseController
{
    protected $topUpModel;

    public function __construct()
    {
        helper('tegal');
        cekLogin();
        cekAdmin();

        $this->topUpModel = new TopUpModel();
    }

    public function index()
    {
        // Query data admin
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        $db = \Config\Database::connect();
        $topUp = $db->table('top_up');
        $topUp->select('top_up.nominal, top_up.tanggal, top_up.id, top_up.metode, top_up.bukti, user.nama');
        $topUp->join('user', 'user.id = top_up.id_user');
        $topUp->where('status', 'Belum Lunas');
        $topUp = $topUp->get()->getResultArray();

        $data = [
            'title' => "Pesanan Tiket Pariwisata Kabupaten Tegal",
            'admin' => $admin,
            'topUp' => $topUp
        ];

        return view('admin/topUp', $data);
    }
}
