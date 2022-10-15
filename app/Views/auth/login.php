<?php $this->extend('layouts/auth_template'); ?>

<?php $this->section('content'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center col-lg-7 mx-auto">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                </div>
                                <?= session()->getFlashdata('pesan'); ?>
                                <form class="user" method="post" action="/login/masuk">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" value="<?= old('email'); ?>" id="email" placeholder="Masukkan Email">
                                        <div class="pl-3 invalid-feedback">
                                            <?= $validation->getError('email'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" placeholder="Kata Sandi">
                                        <div class="pl-3 invalid-feedback">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary my-1 py-2 fs-5 btn-user btn-block">
                                        Masuk
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small text-decoration-none" href="forgot-password.html">Lupa Kata Sandi?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small text-decoration-none" href="/registrasi">Buat Akun!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?php $this->endSection(); ?>