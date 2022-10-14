<?php

namespace App\Controllers;

class Auth extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Login | Kabupaten Tegal'
        ];
        return view('auth/login', $data);
    }

    public function registrasi()
    {
        $data = [
            'title' => 'Form Registrasi User',
            'validation' => \Config\Services::validation()
        ];

        return view('auth/daftar', $data);
    }

    public function daftar()
    {
        $rules = [
            'nama' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required|trim|valid_email',
                'errors' => [
                    'required' => 'Email tidak boleh kosong',
                    'valid_email' => 'Alamat email tidak valid'
                ]
            ],
            'no_telepon' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nomor Telepon tidak boleh kosong'
                ]
            ]
        ];

        if (!$this->validate($rules)) {

            // return view('auth/daftar', $data);
            return redirect()->to('/auth/registrasi')->withInput();
        }
    }
}
