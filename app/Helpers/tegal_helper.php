<?php

function cekLogin()
{
    // return dd(session()->email);
    if (!session()->email && !session()->role_id) {
        session()->setFlashdata('pesan', 'Silakan Login Dulu!');
        session()->setFlashdata('warna', 'warning');
        header('Location: /login');
        exit;
    }
}

function cekSession()
{
    if (session()->email && session()->role_id == 1) {
        header('Location: /dashboard');
        exit;
    } elseif (session()->email && session()->role_id == 2) {
        header('Location: /wisata');
        exit;
    }
}
