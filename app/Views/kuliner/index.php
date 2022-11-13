<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="px-4 py-5 mb-5 text-center">
    <img class="d-block mx-auto mb-4" src="/assets/img/brand-tegal.png" alt="" width="72">
    <h1 class="display-5 fw-bold">Beragam Kuliner yang tersedia di Kota Tegal</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Berikut beberapa rekomendasi aneka kuliner yang ada di sekitar Kota Tegal
        </p>
    </div>
</div>

<!-- ALBUM  -->
<div class="album py-5 bg-light">
    <div class="container mb-5">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <?php foreach ($kuliner as $k) : ?>
                <!-- PERALBUM SATU FOTO -->
                <div class="col-sm">
                    <div class="card shadow-sm">
                        <a class="text-decoration-none text-dark" href="/kuliner/details">
                            <img class="bd-placeholder-img card-img-top" src="/assets/img/<?= $k['gambar']; ?>" width="50%" height="195">
                            <div class="card-body">
                                <h5><?= $k['nama_kuliner']; ?> | <?= $k['jenis_kuliner']; ?></h5>
                                <p class="card-text"> <?= $k['alamat']; ?></p>

                                <p></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <span class="fs-5 fw-bold"> Rp. <?= number_format($k['harga'], 0, '', '.') ?></span>
                                    </div>
                                    <a href="#" class="btn btn-primary float-end">Info & Pemesanan</a>
                                </div>
                            </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- END ALBUM -->
<?php $this->endSection(); ?>