<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<!-- CAROUSEL SLIDE OTOMATIS -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php $slide = ['restoran.jpg', 'flores.jpg', 'Bali.jpg', 'gapura.jpg', 'laut-wisata.jpg'] ?>
        <?php for ($i = 0; $i < count($slide); $i++) : ?>
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="/assets/img/<?= $slide[$i]; ?>" class="d-block w-100" alt="...">
            </div>
        <?php endfor; ?>
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

<!-- Isi Home-->

<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="text-center">
            <div class="text-center mb-5 animate-box">
                <h1 class="fw-bolder">Website Tegal Official</h1>
                <p>Kami menyediakan berbagai</p>
                <a class="btn btn-outline-info mx-3" href="#pariwisata"> Pariwisata </a>
                <a class="btn btn-outline-info mx-3" href="#kuliner">Kuliner </a>
                <a class="btn btn-outline-info mx-3" href="#penginapan">Penginapan </a>
                <a class="btn btn-outline-info mx-3" href="#jasa">Jasa </a>
            </div>
        </div>
    </div>
    <div class="text-center animate-box shadow-sm p-3 mb-1 bg-body rounded">
        <h1 class="c-page-title">For Information</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <p class="fw-normal mb-5">Hallo Sobat! Di website ini kami menyediakan berbagai kebutuhan mengenai Tegal, Kalian mampu menyexplore isi tegal dari mulai Pariwisata lokal di tegal, Kuliner asli dari tegal, Penginapan sekitar Tegal dengan variasi harga bahkan kami menyuguhkan Jasa yang ada di Tegal. Kami harap dengan terciptanya website kami bisa membantu kalangan usaha dan umkm lokal termasuk di Tegal, sehingga bisa mempermudah wisatawan dan warga lokal dalam mencari informasi,jasa,kuliner,penginapan bahkan tiket wisata.</p>
            </div>
        </div>
    </div>
    <div class="mb-5"></div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div id="pariwisata" class="mb-5"></div>
            <h1 class="animate-box badge rounded-pill mt-5 bg-primary fs-5">PARIWISATA </h1>
            <?php foreach ($wisata as $w) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/<?= $w['gambar']; ?>" alt="<?= $w['nama_wisata']; ?>" height="270"></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><?= $w['nama_wisata']; ?></h3>
                                <p class="text-truncate"><?= $w['deskripsi']; ?></p>
                                <a href="/wisata/detail/<?= $w['slug']; ?>" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div id="kuliner" class="mb-5"></div>
            <h1 class="animate-box badge rounded-pill mt-5 bg-primary fs-5">KULINER</h1>
            <?php foreach ($kuliner as $k) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/<?= $k['gambar']; ?>" alt="<?= $k['nama_kuliner'] ?>" height="270"></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><?= $k['nama_kuliner']; ?></h3>
                                <p class="text-truncate"><?= $k['deskripsi']; ?></p>
                                <a href="/kuliner/detail/<?= $k['slug']; ?>" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="mb-5" id="penginapan"></div>
            <h1 class="animate-box badge rounded-pill mt-5 bg-primary fs-5">PENGINAPAN</h1>
            <?php foreach ($penginapan as $p) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/<?= $p['gambar']; ?>" alt="<?= $p['nama_penginapan']; ?>" height="270"></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><?= $p['nama_penginapan']; ?></h3>
                                <p class="text-truncate"><?= $p['deskripsi']; ?></p>
                                <p><a href="/penginapan/detail/<?= $p['slug']; ?>" class="btn btn-primary">Lihat Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div id="jasa" class="mb-5"></div>
            <h1 class="animate-box badge rounded-pill mt-5 bg-primary fs-5">JASA</h1>
            <?php foreach ($jasa as $j) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/<?= $j['gambar']; ?>" alt="<?= $j['nama_jasa']; ?>" height="270"></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><?= $j['nama_jasa']; ?></h3>
                                <p class="text-truncate"><?= $j['deskripsi']; ?></p>
                                <p><a href="/jasa/detail/<?= $j['slug']; ?>" class="btn btn-primary">Lihat Selengkapnya</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="clearfix visible-md-block"></div>
        </div>
        <div class="animate-box text-center">
            <h3 class="text-primary">Kunjungi Maps Tegal</h3>
        </div>
        <div class="d-flex justify-content-center">
            <iframe class="animate-box" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31689.336857369755!2d109.11723959999999!3d-6.8705707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9dfbf3264c3%3A0x3027a76e352bbe0!2sTegal%2C%20Kota%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1668928325284!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<script src="/assets/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/assets/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/assets/js/2bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/assets/js/jquery.waypoints.min.js"></script>
<script src="/assets/js/sticky.js"></script>

<!-- Stellar -->
<script src="/assets/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="/assets/js/hoverIntent.js"></script>
<script src="/assets/js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="/assets/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/selectFx.js"></script>

<!-- Main JS -->
<script src="/assets/js/main.js"></script>

<?php $this->endSection(); ?>