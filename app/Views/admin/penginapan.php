<?php $this->extend('layouts/adm_template'); ?>

<?php $this->section('content'); ?>

<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container text-center">
        <img src="/assets/img/brand-tegal.png" alt="Kabupaten Tegal" width="80">
        <h2 class="display-4 my-3">Penginapan Kota & Kabupaten Tegal</h2>
        <p class="lead">Daftar Penginapan yang ada di wilayah Kota Tegal</p>
    </div>
</div>

<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-6 m-b-35 text-dark">Daftar Penginapan</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <form action="" method="get">
                            <div class="rs-select2--light rs-select2--md">
                                Cari Berdasarkan
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="based">
                                    <option value="nama_penginapan">Nama</option>
                                    <option value="jenis_penginapan">Jenis</option>
                                    <option value="user_email">User</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--lg">
                                <div class="input-group ml-3">
                                    <input type="text" id="input1-group2" name="penginapan" placeholder="Cari Penginapan" class="form-control py-2">
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
                                <th></th>
                                <th>Nama Penginapan</th>
                                <th>Jenis Penginapan</th>
                                <th>Harga</th>
                                <th>Email User</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (10 * ($currentPage - 1)); ?>
                            <?php foreach ($penginapan as $p) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['jenis_penginapan']; ?></td>
                                    <td><?= number_format($p['harga'], 0, '', '.') ?></td>
                                    <td><?= $p['email']; ?></td>
                                    <td>
                                        <form action="/penginapan-tegal/<?= $p['id']; ?>/daftar" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" onclick="return confirm('apakah anda yakin ?')" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection(); ?>