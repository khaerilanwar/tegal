<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<!-- CAROUSEL SLIDE OTOMATIS -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="/assets/img/restoran.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="/assets/img/flores.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="/assets/img/Bali.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="/assets/img/bali_2.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- END CAROUSEL SLIDE OTOMATIS -->

<!-- GARIS BAWAH -->
<div class="container-fluid bg-biru py-2 garis-bawah">
    <div class="row">
        <div class="col-sm">
            <h4 class="text-white text-center">Tempat Wisata Kabupaten Tegal</h4>
        </div>
    </div>
</div>
<!-- END GARIS BAWAH -->

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
                    <button type="submit" class="btn btn-outline-primary">Cari</button>
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
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" src="/assets/img/<?= $data['gambar']; ?>" width="100%" height="225">

                        <div class="card-body">
                            <a class="text-decoration-none text-dark" href="/wisata/detail/<?= $data['slug']; ?>">
                                <h5><?= $data['nama_wisata']; ?> | <?= $data['lokasi']; ?></h5>
                                <div class="text-truncate card-text mb-3">
                                    <?= $data['deskripsi']; ?>
                                </div>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <span class="fs-5 fw-bold"><?= number_format($data['harga'], 0, '', '.') ?> / Orang</span>
                                </div>
                                <a href="/wisata/pesantiket?idwisata=<?= $data['id']; ?>" class="btn btn-primary p-2">Pesan Tiket</a>
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