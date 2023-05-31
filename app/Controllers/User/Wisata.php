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
        $keyword = $this->request->getGet('s');
        if ($keyword) {
            $wisata = $this->wisataModel->like('nama', $keyword)->orLike('lokasi', $keyword);
        } else {
            $wisata = $this->wisataModel;
        }

        $data = [
            'title' => 'Pariwisata Kabupaten Tegal',
            'wisata' => $wisata->paginate(6, 'wisata'),
            'pager' => $this->wisataModel->pager,
            'currentPage' => $currentPage,
            'user' => $this->user
        ];

        return view('wisata/index', $data);
    }

    public function detail($id)
    {
        $wisata = $this->wisataModel->find($id);
        $nama = $wisata['nama'];

        $data = [
            'title' => "Pariwisata $nama",
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
            'tanggal_pesan' => Time::now(),
            'tanggal_datang' => htmlspecialchars($this->request->getPost('tanggal_datang')),
            'jumlah_tiket' => htmlspecialchars($this->request->getPost('jumlah_tiket')),
            'jenis_pesan' => 'wisata',
            'id_user' => $this->user['id'],
            'id_payment' => htmlspecialchars($this->request->getPost('payment')),
            'id_produk' => htmlspecialchars($this->request->getPost('id_produk')),
            'harga_total' => htmlspecialchars(preg_replace('/[^0-9]/', '', $this->request->getPost('harga_total'))),
            'status' => 0
        ];

        $this->pesananModel->insert($data);

        session()->setFlashdata('pesanTiket', 'Berhasil Pesan Tiket!');
        return redirect()->to("wisata/tagihan/$no_pesan");
    }

    public function pesanTiket($id)
    {
        cekLogin();

        if (!$id) {
            return redirect()->back();
        }

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
        $builder->join('wisata', 'wisata.id = pesanan.id_produk');
        $query = $builder->getWhere(['no_pesanan' => $kode])->getRowArray();

        $data = [
            'title' => 'Tagihan Tiket Wisata',
            'bayar' => $query,
            // 'wisata' => $this->wisataModel->where('nama', $query['nama'])->first(),
            // 'wisata' => $this->wisataModel->where('nama', )
            'user' => $this->user
        ];

        return view('wisata/bayarTiket', $data);
    }

    public function cetakTagihan($kode)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pesanan');
        $builder->select('pesanan.no_pesanan, pesanan.tanggal_pesan, user.email, wisata.nama, pesanan.jumlah_tiket, pesanan.harga_total, pembayaran.detail, pembayaran.via');
        $builder->join('pembayaran', 'pembayaran.id = pesanan.id_payment');
        $builder->join('wisata', 'wisata.id = pesanan.id_produk');
        $builder->join('user', 'user.id = pesanan.id_user');
        $query = $builder->getWhere(['no_pesanan' => $kode])->getRowArray();

        $data = [
            'title' => 'Cetak Tagihan Tiket Wisata',
            'bayar' => $query,
        ];

        return view('wisata/bayar', $data);
    }
}
