<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\PesananModel;
use App\Models\WisataModel;
use CodeIgniter\I18n\Time;

class Wisata extends BaseController
{
    protected $wisataModel;
    protected $pesananModel;

    public function __construct()
    {
        helper('text');
        $this->wisataModel = new WisataModel();
        $this->pesananModel = new PesananModel();
    }

    public function index()
    {
        $currentPage = $this->request->getGet('page') ? $this->request->getGet('page') : 1;
        $keyword = $this->request->getGet('cari');
        if ($keyword) {
            $wisata = $this->wisataModel->like('nama_wisata', $keyword)->orLike('lokasi', $keyword);
        } else {
            $wisata = $this->wisataModel;
        }

        $data = [
            'title' => 'Pariwisata Kabupaten Tegal',
            'wisata' => $wisata->paginate(8, 'wisata'),
            'pager' => $this->wisataModel->pager,
            'currentPage' => $currentPage,
            'user' => $this->user
        ];

        if ($keyword) {
            return view('wisata/result', $data);
        }

        return view('wisata/index', $data);
    }

    public function detail($slug)
    {
        $wisata = $this->wisataModel->where(['slug' => $slug])->first();
        $nama_wisata = $wisata['nama_wisata'];

        $data = [
            'title' => "Pariwisata $nama_wisata",
            'wisata' => $wisata,
            'user' => $this->user
        ];

        // jika komik tidak ada di tabel
        if (empty($data['wisata'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Halaman Tidak Ditemukan.');
        }

        return view('wisata/detail', $data);
    }

    public function pesan()
    {
        $no_pesan = random_string('num');

        $data = [
            'no_pesanan' => $no_pesan,
            'customer' => htmlspecialchars($this->request->getPost('customer')),
            'email_cust' => htmlspecialchars($this->request->getPost('email')),
            'tanggal_pesan' => Time::now(),
            'nama_wisata' => htmlspecialchars($this->request->getPost('nama_wisata')),
            'tanggal_datang' => htmlspecialchars($this->request->getPost('tanggal_datang')),
            'jumlah_tiket' => htmlspecialchars($this->request->getPost('jumlah_tiket')),
            'id_payment' => htmlspecialchars($this->request->getPost('payment')),
            'harga_total' => htmlspecialchars($this->request->getPost('harga_total'))
        ];

        $this->pesananModel->insert($data);

        session()->setFlashdata('pesanTiket', 'Berhasil Pesan Tiket!');
        return redirect()->to("wisata/tagihan/$no_pesan");
    }

    public function pesanTiket()
    {
        cekLogin();
        $id = $this->request->getGet('idwisata');

        $data = [
            'title' => 'Pesan Tiket Pariwisata Kabupaten Tegal',
            'wisata' => $this->wisataModel->find($id),
            'user' => $this->user
        ];
        return view('wisata/pesanTiket', $data);
    }

    public function tagihan($kode)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pesanan');
        $builder->select('*');
        $builder->join('pembayaran', 'pembayaran.id = pesanan.id_payment');
        $query = $builder->getWhere(['no_pesanan' => $kode])->getRowArray();

        $data = [
            'title' => 'Tagihan Tiket Wisata',
            'bayar' => $query,
            'wisata' => $this->wisataModel->where('nama_wisata', $query['nama_wisata'])->first(),
            'user' => $this->user
        ];

        return view('wisata/bayarTiket', $data);
    }

    public function cetakTagihan($kode)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pesanan');
        $builder->select('*');
        $builder->join('pembayaran', 'pembayaran.id = pesanan.id_payment');
        $query = $builder->getWhere(['no_pesanan' => $kode])->getRowArray();

        $data = [
            'title' => 'Cetak Tagihan Tiket Wisata',
            'bayar' => $query,
        ];

        return view('wisata/bayar', $data);
    }
}
