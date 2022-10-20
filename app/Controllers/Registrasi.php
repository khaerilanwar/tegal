<?php

namespace App\Controllers;

use App\Models\UserModel;

class Registrasi extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        if (session()->email && session()->role_id == 1) {
            return redirect()->to('admin');
        }

        $data = [
            'title' => 'Form Registrasi User',
            'validation' => \Config\Services::validation()
        ];

        return view('auth/register', $data);
    }

    public function save()
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
            return redirect()->to('/registrasi')->withInput();
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

        $this->userModel->insert($data);

        session()->setFlashdata('pesan', 'Berhasil Registrasi!');
        session()->setFlashdata('warna', 'success');

        return redirect()->to('/login');
    }
}
