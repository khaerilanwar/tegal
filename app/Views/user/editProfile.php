<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-7 mx-auto">
            <h1 class="my-5 text-center">Edit Profil Pengguna</h1>

            <form action="/profil/edit/<?= $user['id']; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="gambarLama" value="<?= $user['gambar']; ?>">

                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" id="nama" name="nama" value="<?= $user['nama']; ?>">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="email" id="email" value="<?= $user['email']; ?>">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="no_telp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="no_telp" id="no_telp" value="<?= $user['no_telp']; ?>">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="alamat" name="alamat" rows="5"><?= $user['alamat']; ?></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label" for="gambar">Gambar Jasa Kamu</label>
                    <div class="col-sm-2">
                        <img src="/assets/img/<?= $user['gambar']; ?>" width="100" id="img-prv" class="img-preview mt-2">
                    </div>
                    <div class="col-sm-7">
                        <input type="file" name="gambar" class="form-control" id="gambar" onchange="previewImg()">
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-md-3 offset-md-9">
                        <button type="submit" class="btn btn-success w-100">Simpan Perubahan</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>

<?php $this->endSection(); ?>