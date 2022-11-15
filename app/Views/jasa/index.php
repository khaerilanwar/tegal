<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="px-4 py-3 mb-5 text-center">
    <img class="d-block mx-auto mb-4" src="/assets/img/brand-tegal.png" alt="" width="72">
    <h1 class="display-5 fw-bold">Jasa-jasa atau Pelayanan di Kota Tegal</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Berikut beberapa rekomendasi jasa yang ada di kota tegal.
            mempermudah
        </p>
    </div>
    <h3 class="mb-4">Kategori Pelayanan Kota Tegal</h3>
    <div class="row">
        <div class="col">
            <a href="/jasa?bidang=elektronik" class="btn btn-outline-success mx-3 px-3 fs-5 <?= $bidangGet == 'makanan' ? 'active' : ''; ?>">Elektronik</a>
            <a href="/jasa?bidang=pendidikan" class="btn btn-outline-info mx-3 px-3 fs-5 <?= $bidangGet == 'minuman' ? 'active' : ''; ?>">Pendidikan</a>
            <a href="/jasa?bidang=otomotif" class="btn btn-outline-warning mx-3 px-3 fs-5 <?= $bidangGet == 'camilan' ? 'active' : ''; ?>">Otomotif</a>
            <a href="/jasa?bidang=kesehatan" class="btn btn-outline-secondary mx-3 px-3 fs-5 <?= $bidangGet == 'camilan' ? 'active' : ''; ?>">Kesehatan</a>
            <a href="/jasa?bidang=cleaning" class="btn btn-outline-primary mx-3 px-3 fs-5 <?= $bidangGet == 'camilan' ? 'active' : ''; ?>">Cleaning</a>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-md-4 offset-md-8">
            <form action="" method="get">
                <div class="input-group ml-3">
                    <?php if ($bidangGet) : ?>
                        <input type="hidden" name="bidang" value="<?= $bidangGet; ?>">
                    <?php endif; ?>
                    <input type="text" id="input1-group2" name="nama" placeholder="Nama Pelayanan" class="form-control" autocomplete="off">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i> Cari
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php if (count($jasa) < 1) : ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Data tidak ditemukan</h3>
            </div>
        </div>
    </div>

<?php endif; ?>

<div class="container mb-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <?php foreach ($jasa as $j) : ?>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/<?= $j['gambar']; ?>" class="card-img-top" alt="<?= $j['nama_jasa']; ?>" height="250">
                    <div class="card-body">
                        <h5 class="card-title"><?= $j['nama_jasa']; ?></h5>
                        <p class="card-text text-truncate"><?= $j['deskripsi']; ?></p>
                        <?php
                            $nomor = str_replace($j['nomor_user'][0], '62', $j['nomor_user']);
                            $text = 'Haloo! Saya Tertarik dengan jasa anda !';
                            $text = urlencode($text);
                            ?>
                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=<?= $nomor; ?>&text=<?= $text; ?>" class="btn btn-primary float-end">Hubungi</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php $this->endSection(); ?>