<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="px-4 py-5 mb-5 text-center">
    <img class="d-block mx-auto mb-4" src="/assets/img/brand-tegal.png" alt="" width="72">
    <h1 class="display-5 fw-bold">Jasa-jasa atau Pelayanan di Kota Tegal</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Berikut beberapa rekomendasi jasa yang ada di kota tegal.
            mempermudah
        </p>
    </div>
</div>

<div class="container mb-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <?php foreach ($jasa as $j) : ?>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/<?= $j['gambar']; ?>" class="card-img-top" alt="<?= $j['nama_jasa']; ?>" height="250">
                    <div class="card-body">
                        <h5 class="card-title"><?= $j['nama_jasa']; ?></h5>
                        <p class="card-text text-truncate"><?= $j['deskripsi']; ?></p>
                        <a href="#" class="btn btn-primary float-end">Hubungi</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php $this->endSection(); ?>