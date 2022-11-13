<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<!-- JUDUL -->
<div class="container mt-5 mb-2">
    <div class="row">
        <div class="col-sm border-3 border-dark position-relative">
            <h2 class="text-center font-acme pb-2">REKOMENDASI PARIWISATA KABUPATEN TEGAL</h2>
            <div style="height: 4px;" class="w-50 position-absolute top-100 start-50 translate-middle bg-dark"></div>
        </div>
    </div>
</div>
<!-- END JUDUL -->

<!-- TOMBOL CARI -->
<div class="container position-relative my-4">
    <div class="row">
        <div class="col-sm-4 position-absolute top-0 end-0">
            <form action="" method="get">
                <div class="input-group">
                    <input type="text" class="form-control rounded" name="cari" placeholder="Cari wisata ..." aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn px-4 btn-outline-primary">Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END TOMBOL CARI -->

<!-- ALBUM  -->
<div class="album py-5 bg-light">
    <div class="container" id="cari">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">

            <?php foreach ($wisata as $data) : ?>
                <!-- PERALBUM SATU FOTO -->
                <div class="col-sm-3">
                    <div class="card shadow-sm h-100">
                        <img class="bd-placeholder-img card-img-top" src="/assets/img/<?= $data['gambar']; ?>" width="100%" height="225">

                        <div class="card-body">
                            <a class="text-decoration-none text-dark" href="/wisata/details">
                                <h5><?= $data['nama_wisata']; ?> | <?= $data['lokasi']; ?></h5>
                                <div class="text-truncate card-text mb-3">
                                    <?= $data['deskripsi']; ?>
                                </div>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <span class="fs-6 fw-bold">HTM <?= number_format($data['harga'], 0, '', '.') ?> / Orang</span>
                                </div>
                                <a href="" class="btn btn-primary p-2">Pesan Tiket</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PERALBUM SATU FOTO -->
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- END ALBUM -->

<?php $this->endSection(); ?>