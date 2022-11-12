<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <h1 class="my-5 text-center">PROFIL PENGGUNA</h1>

            <form action="" method="post">

                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" id="nama" value="<?= $user['nama']; ?>" aria-label="readonly input example" readonly>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" id="email" value="<?= $user['email']; ?>" aria-label="readonly input example" readonly>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="no_telp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" id="no_telp" value="<?= $user['no_telp']; ?>" aria-label="readonly input example" readonly>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="alamat" rows="5" readonly><?= $user['alamat']; ?></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label">Foto Profil</label>
                    <div class="col-sm-9">
                        <img src="assets/img/<?= $user['gambar'] ?>" alt="<?= $user['nama']; ?>" width="100">
                    </div>
                </div>

            </form>

            <div class="row my-4">
                <div class="col-md-3 offset-md-9">
                    <a href="/profil/edit-profile" class="btn btn-success w-100">Edit Profil</a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php $this->endSection(); ?>