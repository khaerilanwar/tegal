<?php $this->extend('layouts/auth_template'); ?>

<?php $this->section('content'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center col-lg-6 mx-auto">

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
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Kata Sandi">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                        </div>
                                    </div>
                                    <button href="index.html" class="btn btn-primary my-1 py-2 fs-5 btn-user btn-block">
                                        Masuk
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small text-decoration-none" href="forgot-password.html">Lupa Kata Sandi?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small text-decoration-none" href="/auth/registrasi">Buat Akun!</a>
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