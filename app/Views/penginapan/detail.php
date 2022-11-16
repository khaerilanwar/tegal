<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="px-4 my-5 text-center">
    <h1 class="display-5 fw-bold mb-5"><?= $penginapan['nama_penginapan']; ?></h1>
    <div class="col-lg-6 mx-auto">
        <div class="container px-5">
            <img src="/assets/img/<?= $penginapan['gambar']; ?>" class="img-fluid rounded-3 shadow mb-4" alt="<?= $penginapan['nama_penginapan']; ?>" width="500">
        </div>
        <p class="lead my-4 text-center"><?= preg_replace('/\s\s+/', '<br/>', $penginapan['deskripsi']) ?></p>
        <div class="row mt-5">
            <div class="col-md-5 offset-md-1">
                <h5 class="d-inline">Harga Rp. <?= number_format($penginapan['harga'], 0, '', '.') ?></h5>
            </div>
            <div class="col-md-5">
                <?php
                $nomor = str_replace($penginapan['nomor_user'][0], '62', $penginapan['nomor_user']);
                $text = "Haloo, saya ingin memesan kamar " . $penginapan['nama_penginapan'] . " anda!";
                $text = urlencode($text);
                ?>
                <a target="_blank" href="https://api.whatsapp.com/send/?phone=<?= $nomor; ?>&text=<?= $text; ?>" class="btn btn-primary d-inline btn-lg px-4 me-sm-3">Info dan Booking</a>
            </div>
        </div>
    </div>
</div>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <?= $penginapan['maps']; ?>
        </div>
        <div class="col-lg-6">
            <h1 class="display-6 fw-bold mb-5"><?= $penginapan['nama_penginapan']; ?></h1>
            <p class="fs-5"><?= $penginapan['alamat']; ?></p>
        </div>
    </div>
</div>



<?php $this->endSection(); ?>