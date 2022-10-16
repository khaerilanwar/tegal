<?php $this->extend('layouts/auth_temp'); ?>

<?php $this->section('content'); ?>
<div class="container register">
    <div class="row">
        <div class="col-md-8 register-right m-auto">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading text-dark">Pendaftaran Akun</h3>
                    <form action="/registrasi/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="row register-form px-4">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" placeholder="Nama Lengkap" value="<?= old('nama'); ?>" />
                                    <div class="pl-3 invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="no_telepon" class="form-control <?= ($validation->hasError('no_telepon')) ? 'is-invalid' : ''; ?>" placeholder="Nomor Telepon" value="<?= old('no_telepon'); ?>" />
                                    <div class="pl-3 invalid-feedback">
                                        <?= $validation->getError('no_telepon'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" placeholder="Alamat" id="alamat" rows="3"><?= old('alamat'); ?></textarea>
                                    <div class="pl-3 invalid-feedback">
                                        <?= $validation->getError('no_telepon'); ?>
                                    </div>
                                </div>
                                <a href="" class="fs-6 mt-4 d-block text-decoration-none">Lupa Kata Sandi?</a>
                                <a href="/login" class="fs-6 text-decoration-none">Sudah punya akun? Masuk!</a>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" placeholder="Alamat Email" value="<?= old('email'); ?>" />
                                    <div class="pl-3 invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-3 d-flex justify-content-evenly">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="Laki-laki" name="jenis_kelamin" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Laki - laki
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="Perempuan" name="jenis_kelamin" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" placeholder="Kata Sandi" />
                                    <div class="pl-3 invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="repassword" class="form-control <?= ($validation->hasError('repassword')) ? 'is-invalid' : ''; ?>" placeholder="Konfirmasi Kata Sandi" />
                                    <div class="pl-3 invalid-feedback">
                                        <?= $validation->getError('repassword'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="mt-4 btnRegister fw-normal">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->endSection(); ?>