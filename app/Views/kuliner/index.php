<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="px-4 py-3 mb-5 text-center">
    <img class="d-block mx-auto mb-4" src="/assets/img/brand-tegal.png" alt="" width="72">
    <h1 class="display-5 fw-bold">Beragam Kuliner yang tersedia di Kota Tegal</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Berikut beberapa rekomendasi aneka kuliner yang ada di sekitar Kota Tegal
        </p>
    </div>
    <h3 class="mb-4">Kategori Kuliner Kota Tegal</h3>
    <div class="row">
        <div class="col">
            <a href="/kuliner?menu=makanan" class="btn btn-outline-success mx-3 px-3 fs-5 <?= $menuGet == 'makanan' ? 'active' : ''; ?>">Aneka Makanan</a>
            <a href="/kuliner?menu=minuman" class="btn btn-outline-info mx-3 px-3 fs-5 <?= $menuGet == 'minuman' ? 'active' : ''; ?>">Aneka Minuman</a>
            <a href="/kuliner?menu=camilan" class="btn btn-outline-warning mx-3 px-3 fs-5 <?= $menuGet == 'camilan' ? 'active' : ''; ?>">Aneka Camilan</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-8">
            <form action="" method="get">
                <div class="input-group ml-3">
                    <?php if ($menuGet) : ?>
                        <input type="hidden" name="menu" value="<?= $menuGet; ?>">
                    <?php endif; ?>
                    <input type="text" id="input1-group2" name="nama" placeholder="Nama Kuliner" class="form-control" autocomplete="off">
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

<?php if (count($kuliner) < 1) : ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Data tidak ditemukan</h3>
            </div>
        </div>
    </div>

<?php endif; ?>

<!-- ALBUM  -->
<div class="album py-5 bg-light">
    <div class="container mb-5">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <?php $i = 1 + (8 * ($currentPage - 1)); ?>
            <?php foreach ($kuliner as $k) : ?>
                <!-- PERALBUM SATU FOTO -->
                <div class="col-sm">
                    <div class="card shadow-sm">
                        <a class="text-decoration-none text-dark" href="/kuliner/detail/<?= $k['slug']; ?>">
                            <img class="bd-placeholder-img card-img-top" src="/assets/img/<?= $k['gambar']; ?>" height="250">
                            <div class="card-body">
                                <h5><?= $k['nama_kuliner']; ?></h5>
                                <p class="card-text mb-4 text-truncate"> <?= $k['alamat']; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <span class="fs-5 fw-bold"> Rp. <?= number_format($k['harga'], 0, '', '.') ?></span>
                                    </div>
                                    <?php
                                        $nomor = str_replace($k['nomor_user'][0], '62', $k['nomor_user']);
                                        $text = "Haloo, saya ingin memesan " . $k['jenis_kuliner'] . " anda!";
                                        $text = urlencode($text);
                                        ?>
                                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=<?= $nomor; ?>&text=<?= $text; ?>" class="btn btn-primary float-end">Info & Pemesanan</a>
                                </div>
                            </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $pager->links('kuliner', 'pagination'); ?>
    </div>
</div>
<!-- END ALBUM -->
<?php $this->endSection(); ?>