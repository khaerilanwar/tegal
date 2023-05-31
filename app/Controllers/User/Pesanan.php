<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Pesanan extends BaseController
{
    public function index()
    {
        cekLogin();

        $db = \Config\Database::connect();
        $wisata = $db->table('pesanan');
        $wisata->select('pesanan.harga_total, pesanan.no_pesanan, pesanan.status, wisata.gambar, wisata.nama');
        $wisata->join('wisata', 'wisata.id = pesanan.id_produk');
        $wisata = $wisata->getWhere(['pesanan.id_user' => $this->user['id'], 'pesanan.status !=' => '3'])->getResultArray();

        $data = [
            'title' => 'Pesanan Saya',
            'user' => $this->user,
            'pesanan' => $wisata
        ];

        return view('/pesanan/index', $data);
    }

    public function history()
    {
        $db = \Config\Database::connect();
        $wisata = $db->table('pesanan');
        $wisata->select('pesanan.harga_total, pesanan.no_pesanan, pesanan.status, wisata.gambar, wisata.nama');
        $wisata->join('wisata', 'wisata.id = pesanan.id_produk');
        $wisata = $wisata->getWhere(['pesanan.id_user' => $this->user['id'], 'pesanan.status' => '3'])->getResultArray();

        $kuliner = $db->table('pesanan');
        $kuliner->select('pesanan.harga_total, pesanan.no_pesanan, pesanan.status, kuliner.gambar, kuliner.nama');
        $kuliner->join('kuliner', 'kuliner.id = pesanan.id_produk');
        $kuliner = $kuliner->getWhere(['pesanan.id_user' => $this->user['id'], 'pesanan.status' => '3'])->getResultArray();

        $penginapan = $db->table('pesanan');
        $penginapan->select('pesanan.harga_total, pesanan.no_pesanan, pesanan.status, penginapan.gambar, penginapan.nama');
        $penginapan->join('penginapan', 'penginapan.id = pesanan.id_produk');
        $penginapan = $penginapan->getWhere(['pesanan.id_user' => $this->user['id'], 'pesanan.status' => '3'])->getResultArray();

        // $pesanan_merge = array_merge($kuliner, $wisata, $penginapan);

        $data = [
            'title' => 'Pesanan Saya',
            'user' => $this->user,
            'pesanan' => $wisata
        ];

        return view('/pesanan/riwayat', $data);
    }
}
