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
        <p class="fw-normal mb-5">Hallo Sobat! Di website ini kami menyediakan berbagai kebutuhan mengenai Tegal, Kalian mampu menyexplore isi tegal dari mulai Pariwisata lokal di tegal, Kuliner asli dari tegal, Penginapan sekitar Tegal dengan variasi harga bahkan kami menyuguhkan Jasa yang ada di Tegal. Kami harap dengan terciptanya website kami bisa membantu kalangan usaha dan umkm lokal termasuk di Tegal, sehingga bisa mempermudah wisatawan dan warga lokal dalam mencari informasi,jasa,kuliner,penginapan bahkan tiket wisata.</p>
    </div>
    <div class="mb-5"></div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div id="pariwisata" class="mb-5"></div>
            <h1 class="animate-box badge rounded-pill mt-5 bg-primary fs-5">PARIWISATA </h1>
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/3dpantai.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">3000% Discount to Travel</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p> <a href="#" class="btn btn-primary">Lihat Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div id="kuliner" class="mb-5"></div>
            <h1 class="animate-box badge rounded-pill mt-5 bg-primary fs-5">KULINER</h1>
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/3dpantai.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">3000% Discount to Travel</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#" class="btn btn-primary">Lihat Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="mb-5" id="penginapan"></div>
            <h1 class="animate-box badge rounded-pill mt-5 bg-primary fs-5">PENGINAPAN</h1>
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/3dpantai.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">3000% Discount to Travel</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#" class="btn btn-primary">Lihat Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div id="jasa" class="mb-5"></div>
            <h1 class="animate-box badge rounded-pill mt-5 bg-primary fs-5">JASA</h1>
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/3dpantai.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">3000% Discount to Travel</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#" class="btn btn-primary">Lihat Selengkapnya</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="clearfix visible-md-block"></div>
        </div>
        <div class="animate-box text-center">
            <h3 class="text-primary">Kunjungi Maps Tegal</h3>
        </div>
        <div>
            <a href="https://www.google.com/maps/place/Tegal,+Kota+Tegal,+Jawa+Tengah/data=!4m2!3m1!1s0x2e6fb9dfbf3264c3:0x3027a76e352bbe0?sa=X&ved=2ahUKEwiEp-C8urr7AhUhHrcAHdvvAbgQ8gF6BAgQEAE" target="_blank">
                <img class="img-responsive animate-box rounded mx-auto d-block" src="/assets/img/maps.PNG"></a>
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