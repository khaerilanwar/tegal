<?php $this->extend('layouts/adm_template'); ?>

<?php $this->section('content'); ?>

<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container text-center">
        <img src="/assets/img/brand-tegal.png" alt="Kabupaten Tegal" width="80">
        <h2 class="display-4 my-3">Pariwisata Kabupaten Tegal</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas mollitia tenetur quia recusandae suscipit illum adipisci quam! Voluptatem facere dicta voluptatibus quaerat voluptatum totam culpa tempora nesciunt autem dolor? Repudiandae?</p>
    </div>
</div>

<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-5 m-b-35">Daftar Tempat Pariwisata Kabupaten Tegal</h1>
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
                                    <option value="nama_wisata">Nama</option>
                                    <option value="lokasi">Lokasi</option>
                                    <option value="alamat">Alamat</option>
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
                    <div class="table-data__tool-right">
                        <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#addWisataModal">
                            <i class="zmdi zmdi-plus"></i>Tambah Wisata</button>
                    </div>
                </div>

                <div id="wisata" class="table-responsive table--no-card m-b-30" style="overflow: hidden;">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Lokasi</th>
                                <th>Alamat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($wisata as $w) : ?>
                                <tr>
                                    <td><?= $w['nama_wisata']; ?></td>
                                    <td><?= $w['harga']; ?></td>
                                    <td><?= $w['lokasi']; ?></td>
                                    <td>
                                        <span class="d-inline-block text-truncate" style="max-width: 500px;">
                                            <?= $w['alamat']; ?>
                                        </span>
                                    </td>
                                    <td>

                                        <!-- <a href="" class="px-2" data-toggle="tooltip" title="Edit">
                                            <i class="fa-sharp fa-solid fa-pen-to-square text-success h5"></i>
                                        </a> -->

                                        <button data-toggle="modal" data-target="#editWisataModal<?= $w['id']; ?>">
                                            <i class="fa-sharp fa-solid fa-pen-to-square text-success h5 px-2" data-toggle="tooltip" title="Edit"></i>
                                        </button>

                                        <form action="/pariwisata/<?= $w['id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" onclick="return confirm('apakah anda yakin ?')"><i class="fa-solid fa-trash text-danger h5 px-2" data-toggle="tooltip" title="Hapus"></i></button>
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

<!-- MODAL -->
<!-- Modal Add User -->
<div class="modal fade" id="addWisataModal" tabindex="-1" role="dialog" aria-labelledby="addWisataModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="mediumModalLabel">Tambah Objek Wisata</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/pariwisata/tambahWisata" method="post">
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
                            <label for="no_telepon" class=" form-control-label">Nomor Telepon</label>
                            <input type="text" id="no_telepon" name="no_telepon" placeholder="Nomor Telepon" class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid' : ''; ?>">
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
                            <input type="password" id="password" name="password" placeholder="Kata Sandi" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <label for="repassword" class=" form-control-label">Konfirmasi Kata Sandi</label>
                            <input type="password" id="repassword" name="repassword" placeholder="Konfirmasi Kata Sandi" class="form-control <?= ($validation->hasError('repassword')) ? 'is-invalid' : ''; ?>">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Add User -->

<?php foreach ($wisata as $w) : ?>
    <!-- Modal Edit User -->
    <div class="modal fade" id="editWisataModal<?= $w['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editWisataModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="mediumModalLabel">Edit Objek Wisata</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/pariwisata/edit/<?= $w['id']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="row form-group">
                            <div class="col col-md-6">
                                <label for="nama" class=" form-control-label">Nama Objek Wisata</label>
                                <input type="text" id="nama" name="nama" value="<?= $w['nama_wisata']; ?>" placeholder="Nama Pariwisata" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>">
                                <div class="pl-3 invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label for="harga" class=" form-control-label">Harka Tiket Masuk</label>
                                <input type="text" value="<?= $w['harga']; ?>" id="harga" name="harga" placeholder="Harga Tiket Masuk" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>">
                                <div class="pl-3 invalid-feedback">
                                    <?= $validation->getError('harga'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-6">
                                <label for="lokasi" class=" form-control-label">Lokasi Tempat Pariwisata</label>
                                <input type="text" value="<?= $w['lokasi']; ?>" id="lokasi" name="lokasi" placeholder="Lokasi Tempat Pariwisata" class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid' : ''; ?>">
                                <div class="pl-3 invalid-feedback">
                                    <?= $validation->getError('lokasi'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <label for="maps" class="form-control-label">Frame Google Maps</label>
                                <textarea name="maps" id="maps" rows="3" placeholder="maps" class="form-control <?= ($validation->hasError('maps')) ? 'is-invalid' : ''; ?>"><?= $w['maps']; ?></textarea>
                                <div class="pl-3 invalid-feedback">
                                    <?= $validation->getError('maps'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Selesai</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Edit User -->
<?php endforeach; ?>
<!-- END MODAL -->

<?php $this->endSection(); ?>