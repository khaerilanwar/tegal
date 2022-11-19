<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="px-4 my-5 text-center">
    <h1 class="display-5 fw-bold mb-5"><?= $jasa['nama_jasa']; ?></h1>
    <div class="col-lg-6 mx-auto">
        <div class="container px-5">
            <img src="/assets/img/<?= $jasa['gambar']; ?>" class="img-fluid rounded-3 shadow mb-4" alt="Example image" width="400">
        </div>
        <p class="lead my-4 text-center"><?= preg_replace('/\s\s+/', '<br/>', $jasa['deskripsi']) ?></p>
        <?php
        $nomor = str_replace($jasa['nomor_user'][0], '62', $jasa['nomor_user']);
        $text = "Haloo! Saya Tertarik dengan jasa anda !";
        $text = urlencode($text);
        ?>
        <a target="_blank" href="https://api.whatsapp.com/send/?phone=<?= $nomor; ?>&text=<?= $text; ?>" class="btn btn-primary d-inline btn-lg px-4 me-sm-3">Hubungi</a>
    </div>
</div>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <?= htmlspecialchars_decode($jasa['maps']); ?>
        </div>
        <div class="col-lg-6">
            <h1 class="display-6 fw-bold mb-5"><?= $jasa['nama_jasa']; ?></h1>
            <p class="fs-5"><?= $jasa['alamat']; ?></p>
        </div>
    </div>
</div>



<?php $this->endSection(); ?>