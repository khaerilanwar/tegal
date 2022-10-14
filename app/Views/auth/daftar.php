<?php $this->extend('layouts/auth_template'); ?>

<?php $this->section('content'); ?>

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Daftar Akun!</h1>
                        </div>
                        <form class="user" method="post" action="/auth/daftar">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control form-control-user <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" placeholder="Nama Lengkap" value="<?= old('nama'); ?>" autofocus>
                                <div class="pl-3 invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control form-control-user <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" value="<?= old('email'); ?>" id="email" placeholder="Alamat Email">
                                <div class="pl-3 invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="no_telepon" class="form-control form-control-user <?= ($validation->hasError('no_telepon')) ? 'is-invalid' : ''; ?>" value="<?= old('no_telepon'); ?>" id="no_telepon" placeholder="Nomor Telepon">
                                <div class="pl-3 invalid-feedback">
                                    <?= $validation->getError('no_telepon'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="jenis_kelamin" class="<?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?> form-select px-3 py-3 form-select-md form-control-user text-muted rounded-5">
                                    <option selected disabled value="">Pilih Jenis Kelamin</option>
                                    <option <?= (old('jenis_kelamin') == 'Laki-laki') ? 'selected' : ''; ?> value="Laki-laki">Laki - laki</option>
                                    <option <?= (old('jenis_kelamin') == 'Perempuan') ? 'selected' : ''; ?> value="Perempuan">Perempuan</option>
                                </select>
                                <div class="pl-3 invalid-feedback">
                                    <?= $validation->getError('jenis_kelamin'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-user rounded-4 <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" rows="3" placeholder="Alamat Pengguna"></textarea>
                                <div class="pl-3 invalid-feedback">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="password1" id="password1" placeholder="Kata Sandi">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="password2" class="form-control form-control-user" id="password2" placeholder="Konfirmasi Kata Sandi">
                                </div>
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary btn-user btn-block">
                                Daftar Akun
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small text-decoration-none" href="forgot-password.html">Lupa Kata Sandi?</a>
                        </div>
                        <div class="text-center">
                            <a class="small text-decoration-none" href="/auth">Sudah punya akun? Masuk!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->endSection(); ?>