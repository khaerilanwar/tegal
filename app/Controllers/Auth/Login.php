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
                    session()->setFlashdata('warna', '<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Error icon</span>
                </div>');
                    return redirect()->to('/login')->withInput();
                }
            } else {
                session()->setFlashdata('pesan', 'Alamat email belum di aktivasi');
                session()->setFlashdata('warna', '<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Warning icon</span>
    </div>');
                return redirect()->to('/login')->withInput();
            }
        } else {
            session()->setFlashdata('pesan', 'Email belum terdaftar');
            session()->setFlashdata('warna', '<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Warning icon</span>
    </div>');
            return redirect()->to('/login')->withInput();
        }
    }
}
