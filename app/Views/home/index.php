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
                <h1>Website Tegal Official</h1>
                <p>Kami menyediakan berbagai</p>
                <a class="btn btn-outline-info mx-3" href="#"> Pariwisata </a>
                <a class="btn btn-outline-info mx-3" href="#">Kuliner </a>
                <a class="btn btn-outline-info mx-3" href="#">Penginapan </a>
                <a class="btn btn-outline-info mx-3" href="#">Jasa </a>

            </div>
        </div>
    </div>
    <div class="mb-5"></div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            <h1 class="animate-box badge rounded-pill bg-primary fs-5">PARIWISATA </h1>
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive shadow-sm p-3 mb-5 bg-body rounded" src="/assets/img/3dpantai.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">3000% Discount to Travel</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="mb-5"></div>
            <h1 class="animate-box badge rounded-pill bg-primary fs-5">KULINER</h1>
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/3dpantai.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">3000% Discount to Travel</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="mb-5"></div>
            <h1 class="animate-box badge rounded-pill bg-primary fs-5">PENGINAPAN</h1>
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/3dpantai.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">3000% Discount to Travel</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="mb-5"></div>
            <h1 class="animate-box badge rounded-pill bg-primary fs-5">JASA</h1>
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="/assets/img/3dpantai.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">3000% Discount to Travel</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

            <div class="clearfix visible-md-block"></div>
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