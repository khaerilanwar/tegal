<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\KulinerModel;
use App\Models\PenginapanModel;
use App\Models\UserModel;

class Mitra extends BaseController
{
    protected $userModel;
    protected $kulinerModel;
    protected $penginapanModel;

    public function __construct()
    {
        helper('tegal');
        $this->userModel = new UserModel();
        $this->kulinerModel = new KulinerModel();
        $this->penginapanModel = new PenginapanModel();
        cekLogin();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $produkKuliner = $db->table('rating')->select('kuliner.id AS id_kuliner, kuliner.harga, kuliner.maps, kuliner.alamat, kuliner.deskripsi, kuliner.gambar, kuliner.nama, kuliner.terjual, kuliner.pendapatan, kuliner.jenis_kuliner, rating.id, rating.jenis_produk')->selectAvg('rating.rate', 'rate_produk');
        $produkKuliner->join('kuliner', 'kuliner.id = rating.id_produk', 'right');
        $produkKuliner->groupBy('kuliner.id')->orderBy('kuliner.nama');
        $produkKuliner = $produkKuliner->getWhere(['kuliner.id_user' => $this->user['id'], 'kuliner.status' => '1', 'rating.jenis_produk' => 'kuliner'])->getResultArray();

        $saldoMitra = $db->table('kuliner')->selectSum('pendapatan', 'saldo')->get()->getRowArray();

        $produkPenginapan = $db->table('penginapan')->select('*')->orderBy('nama')->getWhere(['id_user' => $this->user['id'], 'status' => '1'])->getResultArray();

        if ($this->user['role_id'] == '3') {
            $data = [
                'title' => 'Mitra Tecation',
                'user' => $this->user,
                'produkKuliner' => $produkKuliner,
                'produkPenginapan' => $produkPenginapan,
                'saldo' => $saldoMitra,
            ];
        } else {
            $data = [
                'title' => 'Mitra Tecation',
                'user' => $this->user
            ];
        }

        return view('/mitra/index', $data);
    }

    public function register()
    {
        $id_user = $this->user['id'];
        $this->userModel->update($id_user, [
            'role_id' => 3
        ]);

        return redirect()->to('/mitra');
    }

    public function update($menu, $id)
    {

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar apakah tetap gambar lama
        if ($fileGambar->getError() ==  4) {
            $namaGambar = $this->request->getPost('gambarLama');
        } else {
            // generate nama file random
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('assets/img', $namaGambar);
            // hapus file lama
            // unlink('assets/img/' . $this->request->getPost('gambarLama'));
            try {
                unlink('assets/img/' . $this->request->getPost('gambarLama'));
            } catch (Exception $e) {
                session()->setFlashdata('gagalUpdate', 'Gagal update data');
                return redirect()->to('/mitra');
            }
        }

        if ($menu == 'kuliner') {
            $this->kulinerModel->update($id, [
                'nama' => htmlspecialchars($this->request->getPost('nama')),
                'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
                'jenis_kuliner' => htmlspecialchars($this->request->getPost('kategori')),
                'alamat' => htmlspecialchars($this->request->getPost('alamat')),
                // 'harga' => htmlspecialchars($this->request->getPost('harga')),
                'harga' => htmlspecialchars(preg_replace('/[^0-9]/', '', $this->request->getPost('harga'))),
                'maps' => htmlspecialchars($this->request->getPost('maps')),
                'gambar' => $namaGambar
            ]);

            session()->setFlashdata('update', 'Data berhasil diupdate!');
            return redirect()->to('/mitra');
        } elseif ($menu == 'penginapan') {
            $this->penginapanModel->update($id, [
                'nama' => htmlspecialchars($this->request->getPost('nama')),
                'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
                'jenis_penginapan' => htmlspecialchars($this->request->getPost('kategori')),
                'alamat' => htmlspecialchars($this->request->getPost('alamat')),
                // 'harga' => htmlspecialchars($this->request->getPost('harga')),
                'harga' => htmlspecialchars(preg_replace('/[^0-9]/', '', $this->request->getPost('harga'))),
                'maps' => htmlspecialchars($this->request->getPost('maps')),
                'gambar' => $namaGambar
            ]);

            session()->setFlashdata('update', 'Data berhasil diupdate!');
            return redirect()->to('/mitra');
        }
    }
}
