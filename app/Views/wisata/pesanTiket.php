<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-3 " src="/assets/img/brand-tegal.png" alt="<?= $wisata['nama_wisata']; ?>" width="72">
                <h2>Pesan Tiket <?= $wisata['nama_wisata']; ?></h2>
                <div class="row mt-3">
                    <div class="col-md-8 offset-md-2">
                        <p class="lead text-center"><?= $wisata['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-abu">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="col-md-4 col-lg-5 py-5">
                <h3 class="mb-4 text-center">Pemesanan Tiket Wisata</h3>
                <form class="needs-validation" method="post" action="/wisata/pesan">
                    <div class="row my-5">

                        <input type="hidden" id="harga" name="harga" onload="total()" value="<?= $wisata['harga']; ?>">
                        <input type="hidden" name="email" value="<?= $user['email']; ?>">
                        <input type="hidden" name="nama_wisata" value="<?= $wisata['nama_wisata']; ?>">

                        <div class="col-12 mb-3">
                            <label for="customer" class="form-label">Nama Pemesan / Rombongan</label>
                            <input type="text" class="form-control" id="customer" name="customer" placeholder="Customer">
                        </div>

                        <div class="col-md-6">
                            <label for="tanggal_datang" class="form-label">Tanggal Kedatangan</label>
                            <input type="date" class="form-control" name="tanggal_datang" id="tanggal_datang">
                        </div>

                        <div class="col-md-6">
                            <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
                            <input type="number" min="1" name="jumlah_tiket" class="form-control" id="jumlah_tiket" placeholder="Masukkan Jumlah" onclick="total()" onkeyup="total()">
                        </div>

                        <div class="col-md-12 my-3">
                            <label for="payment" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" id="payment" name="payment">
                                <option selected disabled>Pilih Pembayaran...</option>
                                <option value="1">Dana</option>
                                <option value="2">Shopeepay</option>
                                <option value="3">Bank BRI</option>
                                <option value="4">Bank BCA</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="harga_total" class="form-label">Total</label>
                            <input class="form-control" type="text" value="" name="harga_total" id="harga_total" aria-label="readonly input example" readonly>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="/wisata" class="w-100 btn btn-outline-dark">Kembali</a>
                        </div>
                        <div class="col-md-6">
                            <button class="w-100 btn btn-primary" type="submit">Pesan Tiket</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>