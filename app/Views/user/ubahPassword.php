<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="container my-5">
    <div class="row my-5">
        <div class="col">
            <h2 class="text-center">Ubah Kata Sandi</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-cs py-2 alert-<?= session()->getFlashdata('warna'); ?> alert-dismissible fade show" id="pesan" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close pb-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <form action="/profil/ubahPass" method="post">
                <div class="mb-4">
                    <label for="currentPassword" class="form-label">Kata sandi saat ini</label>
                    <input type="password" class="form-control <?= ($validation->hasError('currentPassword')) ? 'is-invalid' : ''; ?>" name="currentPassword" id="currentPassword" placeholder="Kata sandi sekarang">
                    <div class="pl-3 invalid-feedback">
                        <?= $validation->getError('currentPassword'); ?>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="newPassword" class="form-label">Kata sandi baru</label>
                    <input type="password" class="form-control <?= ($validation->hasError('newPassword')) ? 'is-invalid' : ''; ?>" name="newPassword" id="newPassword" placeholder="Kata sandi sekarang">
                    <div class="pl-3 invalid-feedback">
                        <?= $validation->getError('newPassword'); ?>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="renewPassword" class="form-label">Konfirmasi kata sandi</label>
                    <input type="password" class="form-control <?= ($validation->hasError('renewPassword')) ? 'is-invalid' : ''; ?>" name="renewPassword" id="renewPassword" placeholder="Konfirmasi kata sandi">
                    <div class="pl-3 invalid-feedback">
                        <?= $validation->getError('renewPassword'); ?>
                    </div>
                </div>
                <div class="mb-5 mt-3 float-end">
                    <button class="btn btn-success px-4" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>