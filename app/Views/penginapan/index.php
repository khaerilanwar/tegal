<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="px-4 py-5 mb-5 text-center">
    <img class="d-block mx-auto mb-4" src="/assets/img/brand-tegal.png" alt="" width="72">
    <h1 class="display-5 fw-bold">Hotel & Penginapan di Kota Tegal</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Rekomendasi Hotel dan penginapan yang ada di kota tegal.
            
        </p>
    </div>
</div>

<div class="container mb-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <?php foreach ($penginapan as $p) : ?>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/<?= $p['gambar']; ?>" class="card-img-top" alt="<?= $p['nama_penginapan']; ?>" height="250">
                    <div class="card-body">
                        <h5 class="card-title"><?= $p['nama_penginapan']; ?></h5>
                        <p class="card-text text-truncate"><?= $p['deskripsi']; ?></p>
                        <p class="card-text text-truncate"><?= $p['alamat']; ?></p>
                        <p class="card-text text-truncate"><?= $p['maps']; ?></p>
                        <a href="#" class="btn btn-primary float-end">Booking</a>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php $this->endSection(); ?>