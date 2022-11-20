<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

use App\Models\UserModel;

class Login extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper('tegal');
        cekSession();
    }

    public function index()
    {
        $data = [
            'title' => 'Login | Kabupaten Tegal',
            'validation' => \Config\Services::validation()
        ];

        return view('auth/login', $data);
    }

    public function masuk()
    {
        $rules = [
            'email' => [
                'rules' => 'required|trim|valid_email',
                'errors' => [
                    'required' => 'Alamat email belum diisi',
                    'valid_email' => 'Alamat email tidak valid'
                ]
            ],
            'password' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Kata sandi harus diisi'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/login')->withInput();
        }

        $email = htmlspecialchars($this->request->getPost('email'));
        $password = htmlspecialchars($this->request->getPost('password'));

        $user = $this->userModel->where('email', $email)->first();

        // Jika user ada
        if ($user) {

            // jika usernya sudah aktivasi
            if ($user['is_active'] == 1) {

                // cek password login
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    session()->set($data);

                    if ($user['role_id'] == 1) {
                        return redirect()->to('dashboard');
                    } else {
                        return redirect()->to('/');
                    }
                } else {
                    session()->setFlashdata('pesan', 'Kata Sandi Salah!');
                    session()->setFlashdata('warna', 'danger');
                    return redirect()->to('/login')->withInput();
                }
            } else {
                session()->setFlashdata('pesan', 'Alamat email belum di aktivasi');
                session()->setFlashdata('warna', 'warning');
                return redirect()->to('/login')->withInput();
            }
        } else {
            session()->setFlashdata('pesan', 'Email belum terdaftar');
            session()->setFlashdata('warna', 'warning');
            return redirect()->to('/login')->withInput();
        }
    }
}
