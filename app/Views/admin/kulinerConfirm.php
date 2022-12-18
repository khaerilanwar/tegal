<?php $this->extend('layouts/adm_template'); ?>

<?php $this->section('content'); ?>

<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container text-center">
        <img src="/assets/img/brand-tegal.png" alt="Kabupaten Tegal" width="80">
        <h2 class="display-4 my-3">Aneka Kuliner Kabupaten Tegal</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas mollitia tenetur quia recusandae suscipit illum adipisci quam! Voluptatem facere dicta voluptatibus quaerat voluptatum totam culpa tempora nesciunt autem dolor? Repudiandae?</p>
    </div>
</div>

<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-6 m-b-35 text-dark">Daftar Konfirmasi Kuliner Kabupaten Tegal</h3>
                <?php if (count($kuliner) > 0) : ?>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <form action="" method="get">
                                <div class="rs-select2--light rs-select2--md">
                                    Cari Berdasarkan
                                </div>
                                <div class="rs-select2--light rs-select2--sm">
                                    <select class="js-select2" name="based">
                                        <option value="nama_kuliner">Nama</option>
                                        <option value="jenis_kuliner">Jenis</option>
                                        <option value="user_email">User</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--light rs-select2--lg">
                                    <div class="input-group ml-3">
                                        <input type="text" id="input1-group2" name="kuliner" placeholder="Cari Kuliner" class="form-control py-2">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-primary py-2">
                                                <i class="fa fa-search"></i> Cari
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="wisata" class="table-responsive table--no-card m-b-30" style="overflow: hidden;">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th class="px-4 text-center"></th>
                                    <th class="px-4 text-center">Nama Kuliner</th>
                                    <th class="px-4 text-center">Jenis Kuliner</th>
                                    <th class="px-4 text-center">Harga</th>
                                    <th class="px-4 text-center">Email User</th>
                                    <th class="px-4 text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 + (10 * ($currentPage - 1)); ?>
                                <?php foreach ($kuliner as $k) : ?>
                                    <tr>
                                        <td class="px-3 align-middle"><?= $i++; ?>.</td>
                                        <td class="px-3 align-middle"><?= $k['nama_kuliner']; ?></td>
                                        <td class="px-3 align-middle text-center"><?= $k['jenis_kuliner']; ?></td>
                                        <td class="px-3 align-middle text-center">Rp. <?= number_format($k['harga'], 0, '', '.') ?></td>
                                        <td class="px-3 align-middle"><?= $k['user_email']; ?></td>
                                        <td class="text-center">
                                            <form action="/kuliner-tegal/apply/<?= $k['id']; ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="PUT">
                                                <button type="submit" class="btn btn-success">Konfirmasi</button>
                                            </form>

                                            <form action="/kuliner-tegal/<?= $k['id']; ?>/iklan" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" onclick="return confirm('apakah anda yakin ?')" class="btn btn-danger">Hapus</button>
                                            </form>

                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg-<?= $k['id']; ?>">Detail</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?= $pager->links('kulinerConfirmAdmin', 'pagination'); ?>
                <?php else : ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center">Belum ada data</h3>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>


<!-- DETAIL MODAL -->
<?php foreach ($kuliner as $k) : ?>
    <div class="modal fade bd-example-modal-lg-<?= $k['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">DETAIL IKLAN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center mb-3"><?= $k['nama_kuliner']; ?></h2>
                            <div class="d-flex justify-content-center mb-3">
                                <img src="/assets/img/<?= $k['gambar']; ?>" width="300">
                            </div>
                            <p class="text-center h5 text-dark mb-3"><span class="font-weight-bold">Harga </span>Rp. <?= number_format($k['harga'], 0, '', '.') ?></p>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <h4 class="mb-1">Deskripsi</h4>
                                    <p class="text-justify text-dark mb-3"><?= $k['deskripsi']; ?></p>
                                    <h4 class="mb-1">Alamat</h4>
                                    <p class="text-dark mb-3"><?= $k['alamat']; ?></p>
                                    <div class="d-flex justify-content-center">
                                        <?= htmlspecialchars_decode($k['maps']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="/kuliner-tegal/apply/<?= $k['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit" class="btn btn-success">Konfirmasi</button>
                    </form>
                    <form action="/kuliner-tegal/<?= $k['id']; ?>/iklan" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="return confirm('apakah anda yakin ?')" class="btn btn-danger">Hapus</button>
                    </form>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- END DETAIL MODAL -->

<?php $this->endSection(); ?>