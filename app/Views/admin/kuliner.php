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
                <h3 class="title-6 m-b-35">Daftar Kuliner Kabupaten Tegal</h3>
                <div class="row">
                    <div class="col-md-6">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-<?= session()->getFlashdata('warna'); ?> alert-dismissible fade show" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
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
                                    <option value="email_user">User</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--lg">
                                <div class="input-group ml-3">
                                    <input type="text" id="input1-group2" name="wisata" placeholder="Cari Objek Wisata" class="form-control py-2">
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
                            <?php $i = 1; ?>
                            <?php foreach ($kuliner as $k) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $k['nama_kuliner']; ?></td>
                                    <td><?= $k['jenis_kuliner']; ?></td>
                                    <td><?= number_format($k['harga'], 0, '', '.') ?></td>
                                    <td><?= $k['user_email']; ?></td>
                                    <td>
                                        <form action="/kuliner-tegal/<?= $k['id']; ?>" method="post" class="d-inline">
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

            </div>
        </div>
    </div>
</section>

<?php $this->endSection(); ?>