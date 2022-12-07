<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="px-4 pt-5 mb-5 text-center">
    <img class="d-block mx-auto mb-4" src="/assets/img/brand-tegal.png" alt="" width="72">
    <h1 class="display-5 fw-bold">Hotel & Penginapan di Kota Tegal</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Rekomendasi Hotel dan penginapan yang ada di kota tegal.</p>
    </div>
    <h3 class="mb-4">Kategori Penginapan Kota Tegal</h3>
    <div class="row">
        <div class="col">
            <a href="/penginapan?kategori=hotel" class="btn btn-outline-success mx-3 px-3 fs-5 <?= $kategoriGet == 'hotel' ? 'active' : ''; ?>">Hotel</a>
            <a href="/penginapan?kategori=villa" class="btn btn-outline-info mx-3 px-3 fs-5 <?= $kategoriGet == 'villa' ? 'active' : ''; ?>">Aneka Villa</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-8">
            <form action="" method="get">
                <div class="input-group ml-3">
                    <?php if ($kategoriGet) : ?>
                        <input type="hidden" name="kategori" value="<?= $kategoriGet; ?>">
                    <?php endif; ?>
                    <input type="text" id="input1-group2" name="nama" placeholder="Nama Penginapan" class="form-control" autocomplete="off">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i> Cari
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ALBUM  -->
<div class="album py-5 bg-light">
    <div class="container mb-5">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <?php $i = 1 + (8 * ($currentPage - 1)); ?>
            <?php foreach ($penginapan as $j) : ?>
                <!-- PERALBUM SATU FOTO -->
                <div class="col-sm">
                    <div class="card shadow-sm">
                        <a class="text-decoration-none text-dark" href="/penginapan/detail/<?= $j['slug']; ?>">
                            <img class="bd-placeholder-img card-img-top size-img" src="/assets/img/<?= $j['gambar']; ?>" height="270">
                            <div class="card-body">
                                <h5><?= $j['nama_penginapan']; ?></h5>
                                <p class="card-text mb-4 text-truncate"> <?= $j['alamat']; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <span class="fs-5 fw-bold"> Rp. <?= number_format($j['harga'], 0, '', '.') ?></span>
                                    </div>
                                    <?php
                                        $nomor = str_replace($j['nomor_user'][0], '62', $j['nomor_user']);
                                        $text = "Haloo, saya ingin memesan kamar " . $j['nama_penginapan'] . " anda!";
                                        $text = urlencode($text);
                                        ?>
                                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=<?= $nomor; ?>&text=<?= $text; ?>" class="btn btn-primary float-end">Info & Booking</a>
                                </div>
                            </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $pager->links('penginapan', 'pagination'); ?>
    </div>
</div>
<!-- END ALBUM -->

<?php $this->endSection(); ?>