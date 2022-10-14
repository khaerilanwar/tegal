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
                        'rules' => 'required|password_strength[8]',
                        'errors' => [
                            'required' => 'Password harus diisi',
                            'password_strength' => 'Password harus menggunakan kombinasi angka dan huruf'
                        ]
                    ]

        ];

        if (!$this->validate($rules)) {

            // return view('auth/daftar', $data);
            return redirect()->to('/auth/registrasi')->withInput();
        }
    }
}
