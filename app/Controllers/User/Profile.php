<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Profile extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();

        helper('tegal');
        cekLogin();
    }

    public function index()
    {
        $data = [
            'title' => 'Profil Pengguna',
            'user' => $this->user
        ];

        return view('user/profile', $data);
    }

    public function editProfile()
    {
        $data = [
            'title' => 'Profil',
            'user' => $this->user
        ];

        return view('user/editProfile', $data);
    }

    public function edit($id)
    {
        $fileGambar = $this->request->getFile('gambar');

        // cek gambar apakah tetap gambar lama
        if ($fileGambar->getError() ==  4) {
            $namaGambar = $this->request->getPost('gambarLama');
        } else {
            // generate nama file random
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('assets/img', $namaGambar);
            // hapus file lama
            if (!$this->request->getPost('gambarLama') == 'default.jpg') {
                unlink('assests/img/' . $this->request->getPost('gambarLama'));
            }
        }

        $this->userModel->update($id, [
            'nama' => htmlspecialchars($this->request->getPost('nama')),
            'email' => htmlspecialchars($this->request->getPost('email')),
            'no_telp' => htmlspecialchars($this->request->getPost('no_telp')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('ubahProfil', 'Mengubah data pengguna');

        return redirect()->to('profil');
    }

    public function ubahPassword()
    {
        $data = [
            'title' => 'Ubah Kata Sandi Pengguna',
            'validation' => \Config\Services::validation(),
            'user' => $this->user
        ];

        return view('user/ubahPassword', $data);
    }

    public function ubahKatasandi()
    {
        $rules = [
            'currentPassword' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Kata sandi harus diisi'
                ]
            ],
            'newPassword' => [
                'rules' => 'required|trim|min_length[3]|matches[renewPassword]',
                'errors' => [
                    'required' => 'Kata sandi baru harus diisi',
                    'min_length' => 'Kata sandi minimal 3 karakter',
                    'matches' => 'Kata sandi tidak sama'
                ]
            ],
            'renewPassword' => [
                'rules' => 'required|trim|min_length[3]|matches[newPassword]',
                'errors' => [
                    'required' => 'Kata sandi baru harus diisi',
                    'min_length' => 'Kata sandi minimal 3 karakter',
                    'matches' => 'Kata sandi tidak sama'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/profil/ubah-password')->withInput();
        } else {
            $currentPassword = htmlspecialchars($this->request->getPost('currentPassword'));
            $newPassword = htmlspecialchars($this->request->getPost('newPassword'));
            if (!password_verify($currentPassword, $this->user['password'])) {
                // KASIH PESAN KESALAHAN
                session()->setFlashdata('pesan', 'Kata sandi salah');
                session()->setFlashdata('warna', 'warning');
                return redirect()->to('/profil/ubah-password');
            } else {
                if ($currentPassword == $newPassword) {
                    session()->setFlashdata('pesan', 'Kata sandi tidak boleh sama');
                    session()->setFlashdata('warna', 'warning');
                    return redirect()->to('/profil/ubah-password');
                } else {
                    // PASSWORD SUDAH OK
                    $password_hash = password_hash($newPassword, PASSWORD_DEFAULT);
                    $this->userModel->update($this->user['id'], [
                        'password' => $password_hash
                    ]);

                    session()->setFlashdata('ubahSandi', 'Mengubah kata sandi');
                    return redirect()->to('/profil');
                }
            }
        }
    }
}
