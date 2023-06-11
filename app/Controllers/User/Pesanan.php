<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\BuktiBayarModel;
use App\Models\PesananModel;
use App\Models\RatingModel;
use App\Models\TefoodModel;
use CodeIgniter\I18n\Time;

class Pesanan extends BaseController
{
    protected $ratingModel;
    protected $tefoodModel;
    protected $buktiModel;
    protected $pesananModel;

    public function __construct()
    {
        $this->ratingModel = new RatingModel();
        $this->tefoodModel = new TefoodModel();
        $this->buktiModel = new BuktiBayarModel();
        $this->pesananModel = new PesananModel();
        helper('tegal');
        cekLogin();
    }

    public function index()
    {

        $db = \Config\Database::connect();
        $wisata = $db->table('pesanan');
        $wisata->select('pesanan.harga_total, pesanan.tanggal_datang, pesanan.jumlah_tiket AS jumlah, pesanan.jenis_pesan, pesanan.no_pesanan AS id_pesan, pesanan.status, wisata.gambar, wisata.nama, wisata.harga');
        $wisata->join('wisata', 'wisata.id = pesanan.id_produk');
        $wisata = $wisata->getWhere(['pesanan.id_user' => $this->user['id'], 'pesanan.status !=' => '3'])->getResultArray();

        $kuliner = $db->table('tefood');
        $kuliner->select('tefood.id_pesan, tefood.jumlah, kuliner.harga, kuliner.nama, tefood.jenis_pesan, tefood.status, kuliner.gambar, tefood.harga_total');
        $kuliner->join('kuliner', 'kuliner.id = tefood.id_produk');
        $kuliner = $kuliner->getWhere(['tefood.id_customer' => $this->user['id'], 'tefood.status !=' => '2', 'tefood.status !=' => '3'])->getResultArray();

        $pesanan = array_merge($wisata, $kuliner);

        $data = [
            'title' => 'Pesanan Saya',
            'user' => $this->user,
            'pesanan' => $pesanan
        ];

        return view('/pesanan/index', $data);
    }

    public function rating()
    {
        $id_produk = htmlspecialchars($this->request->getPost('id_produk'));
        $jenis_produk = htmlspecialchars($this->request->getPost('jenis_pesan'));
        $id_pesan = htmlspecialchars($this->request->getPost('id_pesan'));
        $rating = htmlspecialchars($this->request->getPost('rating'));
        $review = htmlspecialchars($this->request->getPost('review'));

        $dataPesan = $this->tefoodModel->find($id_pesan);

        $this->ratingModel->save([
            'tanggal' => Time::now(),
            'rate' => $rating,
            'review' => $review,
            'jenis_produk' => $jenis_produk,
            'id_user' => $this->user['id'],
            'id_produk' => $id_produk
        ]);

        $this->tefoodModel->update($id_pesan, [
            'status' => $dataPesan['status'] + 1
        ]);

        session()->setFlashdata('isiRating', 'Terimakasih sudah menilai!');

        return redirect()->to('/pesanan/riwayat');
    }

    public function unggahBukti($jenis)
    {
        $no_pesan = htmlspecialchars($this->request->getPost('no_pesan'));
        $fileGambar = $this->request->getFile('bukti');
        if ($fileGambar->getError() == 0) {
            // generate nama gambar
            $namaGambar = $fileGambar->getRandomName();

            // pindahkan file ke folder img
            $fileGambar->move('assets/img', $namaGambar);
        }

        $this->pesananModel->update($no_pesan, [
            'status' => 1,
            'bukti' => $namaGambar
        ]);

        session()->setFlashdata('unggah', 'Unggah berhasil!');

        return redirect()->to('/pesanan');
    }

    public function history()
    {
        $db = \Config\Database::connect();
        $wisata = $db->table('pesanan');
        $wisata->select('pesanan.harga_total, pesanan.no_pesanan AS id_pesan, pesanan.status, pesanan.id_produk, pesanan.jenis_pesan, wisata.harga, pesanan.jumlah_tiket AS jumlah, wisata.gambar, wisata.nama');
        $wisata->join('wisata', 'wisata.id = pesanan.id_produk');
        $wisata = $wisata->getWhere(['pesanan.id_user' => $this->user['id'], 'pesanan.status' => '3'])->getResultArray();

        $kuliner = $db->table('tefood');
        $kuliner->select('tefood.harga_total, tefood.id_pesan, tefood.status, tefood.id_produk, tefood.jenis_pesan, tefood.jumlah, kuliner.gambar, kuliner.harga, kuliner.nama');
        $kuliner->join('kuliner', 'kuliner.id = tefood.id_produk')->orderBy('tanggal_pesan', 'DESC');
        $kuliner = $kuliner->getWhere(['tefood.status' => '2', 'tefood.status' => '3', 'tefood.id_customer' => $this->user['id']])->getResultArray();

        $riwayatPesanan = array_merge($wisata, $kuliner);

        $data = [
            'title' => 'Pesanan Saya',
            'user' => $this->user,
            'pesanan' => $riwayatPesanan
        ];

        return view('/pesanan/riwayat', $data);
    }
}
