<?php

function cekLogin()
{
    if (!session()->email && !session()->role_id) {
        session()->setFlashdata('pesan', 'Silakan Login Dulu!');
        session()->setFlashdata('warna', 'warning');
        header('Location: /login');
        exit;
    }
}

function cekAdmin()
{
    $user = \Config\Database::connect()->table('user')->getWhere(['email' => session()->email])->getRowArray();
    if ($user['role_id'] != 1) {
        header('Location: /home');
        exit;
    }
}

function cekSession()
{
    if (session()->email && session()->role_id == 1) {
        header('Location: /dashboard');
        exit;
    } elseif (session()->email && session()->role_id == 2) {
        header('Location: /home');
        exit;
    }
}
