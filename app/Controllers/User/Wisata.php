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
        $this->wisataModel = new WisataModel();
        $this->pesananModel = new PesananModel();
        helper(['text']);
        // helper('tegal');
        // cekLogin();

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
        return redirect()->to("/wisata/bayar/$no_pesan");
    }

    public function pesanTiket()
    {
        cekLogin();
        $id = $this->request->getGet('idwisata');

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

    public function bayar($kode)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pesanan');
        $builder->select('*');
        $builder->join('pembayaran', 'pembayaran.id = pesanan.id_payment');
        $query = $builder->where('no_pesanan', $kode);
        // $query = $builder->get()->where('no_pesanan', $kode)->getRowArray();

        $data = [
            'title' => 'Pembayaran Tiket Wisata',
            'bayar' => $query
        ];

        return view('wisata/bayar', $data);
    }
}
