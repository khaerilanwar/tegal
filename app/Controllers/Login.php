<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
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

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

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
                        return redirect()->to('admin');
                    } else {
                        return redirect()->to('user');
                    }
                } else {
                    session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Kata Sandi Salah!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                    return redirect()->to('/login');
                }
            } else {
                session()->setFlashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Alamat email belum di aktivasi
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Alamat email belum terdaftar
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->remove('email');
        session()->remove('role_id');

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Alamat berhasil logged out <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        return redirect()->to('/login');
    }
}
