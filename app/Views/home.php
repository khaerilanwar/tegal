<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<!-- CAROUSEL SLIDE PEMANDANGAN -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/img/dufan-5.jpg" class="d-block w-100" alt="Dunia Fantasi">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/img/dufan-6.jpg" class="d-block w-100" alt="Dunia Fantasi">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/img/lombok.jpg" class="d-block w-100" alt="Dunia Fantasi">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- END CAROUSEL -->

<!-- JUDUL -->
<div class="container mt-5 mb-2">
    <div class="row">
        <div class="col">
            <h3 class="text-center comic">REKOMENDASI PARIWISATA KABUPATEN TEGAL</h3>
        </div>
    </div>
</div>
<!-- END JUDUL -->

<?php $this->endSection(); ?>