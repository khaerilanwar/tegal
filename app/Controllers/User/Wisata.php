<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\WisataModel;

class Wisata extends BaseController
{
    protected $wisataModel;

    public function __construct()
    {
        $this->wisataModel = new WisataModel();
        helper('tegal');
        cekLogin();

        // QUERY DATA USER
        // $this->load;
        // $email = session()->email;
        // $builder = $this->db->table('user');
        // $user = $builder->getWhere(['email' => $email])->getRowArray();
        // $this->akun = $this->user->getWhere(['email' => $email])->getRowArray();
    }

    public function index()
    {
        // $email = session()->email;
        // $builder = $this->db->table('user');
        // $user = $builder->getWhere(['email' => $email])->getRowArray();

        $keyword = $this->request->getGet('cari');
        if ($keyword) {
            $wisata = $this->wisataModel->asArray()->like('nama_wisata', $keyword)->orLike('lokasi', $keyword)->findAll();
        } else {
            $wisata = $this->wisataModel->getWisata();
        }

        $data = [
            'title' => 'Pariwisata Kabupaten Tegal',
            'wisata' => $wisata,
            'user' => $this->user
        ];

        if ($keyword) {
            return view('wisata/result', $data);
        }

        return view('wisata/index', $data);
    }

    public function detail()
    {
        return view('wisata/detail');
    }

    public function pesanTiket()
    {
        $id = $this->request->getGet('objek');

        // $email = session()->email;
        // $builder = $this->db->table('user');
        // $user = $builder->getWhere(['email' => $email])->getRowArray();

        $data = [
            'title' => 'Pesan Tiket Pariwisata Kabupaten Tegal',
            'wisata' => $this->wisataModel->find($id),
            'user' => $this->user
        ];
        return view('wisata/pesanTiket', $data);
    }
}
