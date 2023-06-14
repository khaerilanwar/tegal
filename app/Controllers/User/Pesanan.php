<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\BuktiBayarModel;
use App\Models\PesananModel;
use App\Models\RatingKulinerModel;
use App\Models\RatingWisataModel;
use App\Models\TefoodModel;
use CodeIgniter\I18n\Time;

class Pesanan extends BaseController
{
    protected $ratingkulinerModel;
    protected $ratingwisataModel;
    protected $tefoodModel;
    protected $buktiModel;
    protected $pesananModel;

    public function __construct()
    {
        $this->ratingkulinerModel = new RatingKulinerModel();
        $this->ratingwisataModel = new RatingWisataModel();
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
        $wisata->select('pesanan.harga_total, pesanan.tanggal_datang, pesanan.jumlah_tiket AS jumlah, pesanan.jenis_pesan, pesanan.no_pesanan AS id_pesan, pesanan.status, wisata.gambar, wisata.nama, wisata.harga, pesanan.tanggal_pesan');
        $wisata->join('wisata', 'wisata.id = pesanan.id_produk');
        $wisata = $wisata->where('pesanan.id_user', $this->user['id'])->whereNotIn('pesanan.status', ['3', '4'])->get()->getResultArray();
        // $wisata = $wisata->getWhere(['pesanan.id_user' => $this->user['id'], 'pesanan.status !=' => '3'])->getResultArray();

        $kuliner = $db->table('tefood');
        $kuliner->select('tefood.harga_total, tefood.id_pesan, tefood.jumlah, kuliner.harga, kuliner.nama, tefood.jenis_pesan, tefood.status, kuliner.gambar, tefood.tanggal_pesan, tefood.id_penjual');
        $kuliner->join('kuliner', 'kuliner.id = tefood.id_produk');
        $kuliner = $kuliner->where('tefood.id_customer', $this->user['id'])->whereNotIn('tefood.status', ['2', '3'])->get()->getResultArray();
        // $kuliner = $kuliner->getWhere(['tefood.id_customer' => $this->user['id'], 'tefood.status !=' => '2', 'tefood.status !=' => '3'])->getResultArray();

        // dd(count($kuliner[0]));

        $pesanan = array_merge($wisata, $kuliner);

        // Mengambil array data tanggal dan waktu menjadi array terpisah
        $datetimes = array_column($pesanan, 'tanggal_pesan');

        // Mengubah format tanggal dan waktu menjadi timestamp untuk pengurutan
        $timestamps = [];
        foreach ($datetimes as $datetime) {
            $timestamps[] = strtotime($datetime);
        }

        // Mengurutkan array datetimes dan timestamps secara bersamaan
        array_multisort($timestamps, $datetimes, $pesanan);

        // Membalikkan urutan array secara descending
        $datetimes = array_reverse($datetimes);
        $pesanan = array_reverse($pesanan);

        $data = [
            'title' => 'Pesanan Saya',
            'user' => $this->user,
            'pesanan' => $pesanan
        ];

        return view('/pesanan/index', $data);
    }

    public function pakaiTiket()
    {
        $id_pesan = htmlspecialchars($this->request->getPost('id_pesan'));

        $this->pesananModel->update($id_pesan, [
            'status' => 3
        ]);

        return redirect()->to('/pesanan');
    }

    public function rating()
    {
        $id_produk = htmlspecialchars($this->request->getPost('id_produk'));
        $jenis_produk = htmlspecialchars($this->request->getPost('jenis_pesan'));
        $id_pesan = htmlspecialchars($this->request->getPost('id_pesan'));
        $rating = htmlspecialchars($this->request->getPost('rating'));
        $review = htmlspecialchars($this->request->getPost('review'));


        if ($jenis_produk == 'kuliner') {
            $dataPesan = $this->tefoodModel->find($id_pesan);
            $this->ratingkulinerModel->save([
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
        } elseif ($jenis_produk == 'wisata') {
            $dataPesan = $this->pesananModel->find($id_pesan);
            $this->ratingwisataModel->save([
                'tanggal' => Time::now(),
                'rate' => $rating,
                'review' => $review,
                'jenis_produk' => $jenis_produk,
                'id_user' => $this->user['id'],
                'id_produk' => $id_produk
            ]);

            $this->pesananModel->update($id_pesan, [
                'status' => $dataPesan['status'] + 1
            ]);
        }



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
        $wisata->select('pesanan.harga_total, pesanan.tanggal_pesan, pesanan.no_pesanan AS id_pesan, pesanan.status, pesanan.id_produk, pesanan.jenis_pesan, wisata.harga, pesanan.jumlah_tiket AS jumlah, wisata.gambar, wisata.nama');
        $wisata->join('wisata', 'wisata.id = pesanan.id_produk');
        $wisata = $wisata->where('pesanan.id_user', $this->user['id'])->whereIn('pesanan.status', ['3', '4'])->get()->getResultArray();
        // $wisata = $wisata->getWhere(['pesanan.id_user' => $this->user['id'], 'pesanan.status' => '3'])->getResultArray();

        $kuliner = $db->table('tefood');
        $kuliner->select('tefood.harga_total, tefood.tanggal_pesan, tefood.id_pesan, tefood.status, tefood.id_produk, tefood.jenis_pesan, tefood.jumlah, kuliner.gambar, kuliner.harga, kuliner.nama');
        $kuliner->join('kuliner', 'kuliner.id = tefood.id_produk')->orderBy('tefood.tanggal_pesan', 'DESC');
        $kuliner = $kuliner->whereIn('tefood.status', ['2', '3'])->where('tefood.id_customer', $this->user['id'])->get()->getResultArray();
        // $kuliner = $kuliner->getWhere(['tefood.status' => '2', 'tefood.status' => '3', 'tefood.id_customer' => $this->user['id']])->getResultArray();

        $riwayatPesanan = array_merge($wisata, $kuliner);

        // Mengambil array data tanggal dan waktu menjadi array terpisah
        $datetimes = array_column($riwayatPesanan, 'tanggal_pesan');

        // Mengubah format tanggal dan waktu menjadi timestamp untuk pengurutan
        $timestamps = [];
        foreach ($datetimes as $datetime) {
            $timestamps[] = strtotime($datetime);
        }

        // Mengurutkan array datetimes dan timestamps secara bersamaan
        array_multisort($timestamps, $datetimes, $riwayatPesanan);

        // Membalikkan urutan array secara descending
        $datetimes = array_reverse($datetimes);
        $riwayatPesanan = array_reverse($riwayatPesanan);

        $data = [
            'title' => 'Pesanan Saya',
            'user' => $this->user,
            'pesanan' => $riwayatPesanan
        ];

        return view('/pesanan/riwayat', $data);
    }
}
