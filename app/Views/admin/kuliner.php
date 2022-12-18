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
                <h3 class="title-6 m-b-35 text-dark">Daftar Kuliner Kabupaten Tegal</h3>
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
                                <th></th>
                                <th>Nama Kuliner</th>
                                <th>Jenis Kuliner</th>
                                <th>Harga</th>
                                <th>Email User</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (10 * ($currentPage - 1)); ?>
                            <?php foreach ($kuliner as $k) : ?>
                                <tr>
                                    <td class="align-middle"><?= $i; ?></td>
                                    <td class="align-middle"><?= $k['nama_kuliner']; ?></td>
                                    <td class="align-middle"><?= $k['jenis_kuliner']; ?></td>
                                    <td class="align-middle"><?= number_format($k['harga'], 0, '', '.') ?></td>
                                    <td class="align-middle"><?= $k['user_email']; ?></td>
                                    <td>
                                        <form action="/kuliner-tegal/<?= $k['id']; ?>/daftar" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" onclick="return confirm('apakah anda yakin ?')" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?= $pager->links('kulinerAdmin', 'pagination'); ?>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection(); ?>