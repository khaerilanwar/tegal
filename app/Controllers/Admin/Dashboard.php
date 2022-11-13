<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\UserModel;

class Dashboard extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        helper('tegal');
        cekLogin();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // Mengambil inputan cari user
        $dasar = $this->request->getGet('based');
        $cari = $this->request->getGet('user');

        // Query data admin
        // $builder = $this->db->table('user');
        // $admin = $builder->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();
        $admin = $this->build->getWhere(['email' => 'khaerilanwar1992@gmail.com'])->getRowArray();

        // $wisata = $this->wisataModel->asArray()->like('nama_wisata', $keyword)->orLike('lokasi', $keyword)->findAll();

        switch ($dasar) {
            case 'nama':
                $user = $this->userModel->asArray()->like('nama', $cari)->findAll();
                break;
            case 'email':
                $user = $this->userModel->asArray()->like('email', $cari)->findAll();
                break;
            case 'no_telp':
                $user = $this->userModel->asArray()->like('no_telp', $cari)->findAll();
                break;
            case 'alamat':
                $user = $this->userModel->asArray()->like('alamat', $cari)->findAll();
                break;
            default:
                $user = $this->userModel->findAll();
        }

        // $user = $this->builder->get()->getResultArray();

        $data = [
            'title' => 'Dashboard Kabupaten Tegal',
            'validation' => \Config\Services::validation(),
            'admin' => $admin,
            'user' => $user
        ];

        return view('admin/index', $data);
    }

    public function tambahUser()
    {
        $rules = [
            'nama' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required|trim|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => 'Email tidak boleh kosong',
                    'valid_email' => 'Alamat email tidak valid',
                    'is_unique' => 'Alamat email sudah terdaftar'
                ]
            ],
            'no_telepon' => [
                'rules' => 'required|trim|numeric',
                'errors' => [
                    'required' => 'Nomor Telepon tidak boleh kosong',
                    'numeric' => 'Masukkan nomor telepon yang benar'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harap isi jenis kelamin'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules' => 'required|matches[repassword]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'matches' => 'Kata sandi tidak cocok'
                ]
            ],
            'repassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Harap isi konfirmasi password anda',
                    'matches' => 'Kata sandi tidak cocok'
                ]
            ]

        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/dashboard')->withInput();
        }

        $password = htmlspecialchars($this->request->getPost('password'));
        $password = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            // 'nama', 'email', 'no_telp', 'jenis_kelamin', 'alamat', 'password', 'role'
            'nama' => htmlspecialchars($this->request->getPost('nama')),
            'email' => htmlspecialchars($this->request->getPost('email')),
            'no_telp' => htmlspecialchars($this->request->getPost('no_telepon')),
            'jenis_kelamin' => htmlspecialchars($this->request->getPost('jenis_kelamin')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'password' => $password,
            'gambar' => 'default.jpg',
            'is_active' => 1,
            'role_id' => 2
        ];

        session()->setFlashdata('pesan', 'User berhasil ditambahkan!');
        session()->setFlashdata('warna', 'success');

        $this->userModel->insert($data);
        return redirect()->to('/dashboard');
    }

    public function hapus($id)
    {
        $this->userModel->delete($id);
        session()->setFlashdata('pesan', 'User berhasil dihapus!');
        session()->setFlashdata('warna', 'success');

        return redirect()->to('/dashboard');
    }

    public function edit($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telepon'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $this->userModel->update($id, $data);

        session()->setFlashdata('pesan', 'User berhasil diubah!');
        session()->setFlashdata('warna', 'success');

        return redirect()->to('/dashboard');
    }
}
