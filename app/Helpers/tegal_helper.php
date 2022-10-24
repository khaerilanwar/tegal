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
