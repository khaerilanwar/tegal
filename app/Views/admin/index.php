<?php $this->extend('layouts/adm_template'); ?>

<?php $this->section('content'); ?>

<!-- WELCOME-->
<section class="welcome pt-5 p-t-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-4">Selamat Datang
                    <span><?= $admin['nama']; ?>!</span>
                </h1>
                <hr class="line-seprate">
            </div>
        </div>
    </div>
</section>
<!-- END WELCOME-->

<!-- STATISTIC-->
<section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <h2 class="number">10,368</h2>
                    <span class="desc">members online</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number">388,688</h2>
                    <span class="desc">items sold</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number">1,086</h2>
                    <span class="desc">this week</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--red">
                    <h2 class="number">$1,060,386</h2>
                    <span class="desc">total earnings</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END STATISTIC-->

<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-5 m-b-35">Daftar Pengguna</h1>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <form action="" method="get">
                            <div class="rs-select2--light rs-select2--md">
                                Cari Berdasarkan
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="based">
                                    <option value="nama">Nama</option>
                                    <option value="email">Email</option>
                                    <option value="no_telp">Telepon</option>
                                    <option value="alamat">Alamat</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--lg">
                                <div class="input-group ml-3">
                                    <input type="text" id="input1-group2" name="user" placeholder="Cari Pengguna" class="form-control py-2">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary py-2">
                                            <i class="fa fa-search"></i> Cari
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-data__tool-right">
                        <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#mediumModal">
                            <i class="zmdi zmdi-plus"></i>Tambah User</button>
                    </div>
                </div>
                <div class="table-responsive table--no-card m-b-30" style="overflow: hidden;">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No. Telepon</th>
                                <th>Alamat</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user as $u) : ?>
                                <tr>
                                    <td><?= $u['nama']; ?></td>
                                    <td><?= $u['email']; ?></td>
                                    <td><?= $u['no_telp']; ?></td>
                                    <td><?= $u['alamat']; ?></td>
                                    <td><?= $u['role_id'] == 1 ? 'Administrator' : 'Pengguna'; ?></td>
                                    <td>
                                        <a href="" class="px-2" data-toggle="tooltip" title="Edit">
                                            <i class="fa-sharp fa-solid fa-pen-to-square text-success h5"></i>
                                        </a>

                                        <a href="" class="px-2" data-toggle="tooltip" title="Edit">
                                            <i class="fa-solid fa-trash text-danger h5"></i>
                                        </a>

                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </button> -->
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
<!-- END DATA TABLE-->


<!-- MODAL -->
<!-- modal medium -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="mediumModalLabel">Tambah Data Pengguna</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/tambahUser" method="post">
                    <?= csrf_field(); ?>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="nama" class=" form-control-label">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <label for="email" class=" form-control-label">Alamat Email</label>
                            <input type="text" id="email" name="email" placeholder="Alamat Email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="no_telp" class=" form-control-label">Nomor Telepon</label>
                            <input type="text" id="no_telp" name="no_telp" placeholder="Nomor Telepon" class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid' : ''; ?>">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('no_telp'); ?>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <label class=" form-control-label d-block">Jenis Kelamin</label>
                            <div class="text-center">
                                <div class="form-check form-check-inline mx-3">
                                    <input class="form-check-input" type="radio" value="Laki-laki" name="jenis_kelamin" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Laki - laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline mx-3">
                                    <input class="form-check-input" type="radio" value="Perempuan" name="jenis_kelamin" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="password" class="form-control-label">Kata Sandi</label>
                            <input type="text" id="password" name="password" placeholder="Kata Sandi" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <label for="repassword" class=" form-control-label">Konfirmasi Kata Sandi</label>
                            <input type="text" id="repassword" name="repassword" placeholder="Konfirmasi Kata Sandi" class="form-control <?= ($validation->hasError('repassword')) ? 'is-invalid' : ''; ?>">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('repassword'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <label for="alamat" class="form-control-label">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="3" placeholder="Alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"></textarea>
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah User</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal medium -->
<!-- END MODAL -->

<?php $this->endSection(); ?>