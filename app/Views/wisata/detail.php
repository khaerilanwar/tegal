<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="px-4 my-5 text-center">
    <h1 class="display-5 fw-bold"><?= $wisata['nama_wisata']; ?>, <?= $wisata['lokasi']; ?></h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mt-4 mb-3">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <h5 class="mb-4">Harga Tiket Rp. <?= number_format($wisata['harga'], 0, '', '.') ?></h5>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <a href="/wisata/pesantiket?idwisata=<?= $wisata['id']; ?>" class="btn btn-primary btn-lg px-4 me-sm-3">Pesan Tiket</a>
        </div>
    </div>
    <div class="overflow-hidden">
        <div class="container px-5">
            <img src="/assets/img/<?= $wisata['gambar']; ?>" class="img-fluid rounded-3 shadow mb-4" alt="Example image" width="500">
        </div>
    </div>
</div>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <?= $wisata['maps']; ?>
        </div>
        <div class="col-lg-6">
            <h1 class="display-6 fw-bold mb-5"><?= $wisata['nama_wisata']; ?></h1>
            <p class="fs-5"><?= $wisata['alamat']; ?></p>
        </div>
    </div>
</div>



<?php $this->endSection(); ?>