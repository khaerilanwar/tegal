<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-3 " src="/assets/img/brand-tegal.png" alt="<?= $wisata['nama_wisata']; ?>" width="72">
                <h2>Tagihan Pesan Tiket <?= $wisata['nama_wisata']; ?></h2>
                <div class="row mt-3">
                    <div class="col-md-8 offset-md-2">
                        <p class="lead text-center"><?= $wisata['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="col-md-4 col-lg-5 py-5">
                <div class="card shadow">
                    <div class="card-body mx-4">
                        <div class="container">
                            <h3 class="text-center">Tagihan Pesan Tiket</h3>
                            <h5 class="text-center mb-4"><?= $bayar['no_pesanan']; ?></h4>
                                <div class="row mb-4">
                                    <table>
                                        <tr>
                                            <td>Customer</td>
                                            <td>: <?= $bayar['customer']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Wisata</td>
                                            <td>: <?= $bayar['nama_wisata']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Pesan</td>
                                            <td>: <?php
                                                    $pecah = explode('-', $bayar['tanggal_pesan']);

                                                    switch ($pecah[1]) {
                                                        case '01':
                                                            echo $pecah[2], ' Januari ', $pecah[0];
                                                            break;
                                                        case '02':
                                                            echo $pecah[2], ' Februari ', $pecah[0];
                                                            break;
                                                        case '03':
                                                            echo $pecah[2], ' Maret ', $pecah[0];
                                                            break;
                                                        case '04':
                                                            echo $pecah[2], ' April ', $pecah[0];
                                                            break;
                                                        case '05':
                                                            echo $pecah[2], ' Mei ', $pecah[0];
                                                            break;

                                                        case '06':
                                                            echo $pecah[2], ' Juni ', $pecah[0];
                                                            break;
                                                        case '07':
                                                            echo $pecah[2], ' Juli ', $pecah[0];
                                                            break;
                                                        case '08':
                                                            echo $pecah[2], 'Agustus ', $pecah[0];
                                                            break;
                                                        case '09':
                                                            echo $pecah[2], ' September ', $pecah[0];
                                                            break;
                                                        case '10':
                                                            echo $pecah[2], ' Oktober', $pecah[0];
                                                            break;
                                                        case '11':
                                                            echo $pecah[2], ' November ', $pecah[0];
                                                            break;
                                                        case '12':
                                                            echo $pecah[2], ' Desember ', $pecah[0];
                                                            break;
                                                    } ?></td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="row">
                                    <hr>
                                    <div class="col-xl-8">
                                        <p>Jumlah Tiket</p>
                                    </div>
                                    <div class="col-xl-4">
                                        <p class="float-end"><?= $bayar['jumlah_tiket']; ?> x Rp. <?= number_format($wisata['harga'], 0, '', '.'); ?>
                                        </p>
                                    </div>
                                    <hr style="border: 2px solid black;">
                                </div>
                                <div class="row text-black">

                                    <div class="col-xl-12">
                                        <p class="float-end fw-bold">Total: Rp. <?= number_format($bayar['harga_total'], 0, '', '.'); ?>
                                        </p>
                                    </div>
                                    <hr style="border: 2px solid black;">
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <span><?= $bayar['via']; ?></span>
                                        <span class="float-end"><?= $bayar['detail']; ?></span>
                                    </div>
                                </div>
                                <div class="text-center" style="margin-top: 90px;">
                                    <a href="/wisata/cetak-tagihan/<?= $bayar['no_pesanan']; ?>" target="_blank" class="text-info">Cetak Tagihan</a>
                                    <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>