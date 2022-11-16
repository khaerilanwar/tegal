<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center pt-5" id="form">
            <div class="col-md-4 col-lg-6 py-5">
                <h3 class="mb-4 text-center">Pasang Iklan Kulinermu</h3>
                <form method="post" action="/penginapan/addPenginapan" enctype="multipart/form-data">
                    <input type="hidden" name="nomor_user" value="<?= $user['no_telp']; ?>">
                    <div class="row mt-5 mb-3">
                        <div class="col-12 mb-3">
                            <label for="nama_penginapan" class="form-label">Nama Penginapan</label>
                            <input type="text" value="<?= old('nama_penginapan'); ?>" class="form-control <?= ($validation->hasError('nama_penginapan')) ? 'is-invalid' : ''; ?>" id="nama_penginapan" name="nama_penginapan" placeholder="Nama Kuliner Kamu">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('nama_penginapan'); ?>
                            </div>
                        </div>

                        <div class="col-md-12 my-3">
                            <label for="jenis_penginapan" class="form-label">Jenis Penginapan</label>
                            <select class="form-select <?= ($validation->hasError('jenis_penginapan')) ? 'is-invalid' : ''; ?>" id="jenis_penginapan" name="jenis_penginapan">
                                <option selected disabled>Pilih Jenis Penginapan</option>
                                <option value="Hotel" <?= old('jenis_penginapan') == 'Hotel' ? 'selected' : ''; ?>>Hotel</option>
                                <option value="Villa" <?= old('jenis_penginapan') == 'Villa' ? 'selected' : ''; ?>>Villa</option>
                            </select>
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('jenis_penginapan'); ?>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" value="<?= old('harga'); ?>" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" placeholder="Harga Penginapan Kamu">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('harga'); ?>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" rows="3" placeholder="Alamat Penginapan Kamu"><?= old('alamat'); ?></textarea>
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" rows="3" placeholder="Deskripsi Penginapan Kamu"><?= old('deskripsi'); ?></textarea>
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('deskripsi'); ?>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="inputGroupFile02">Gambar Penginapan Kamu</label>
                            <input type="file" name="gambar" class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" onchange="previewImg()">
                            <img src="/assets/img/anwar.jpeg" width="100" id="img-prv" class="img-thumbnail img-preview mt-2">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="maps" class="form-label">Frame Maps</label>
                            <textarea name="maps" class="form-control <?= ($validation->hasError('maps')) ? 'is-invalid' : ''; ?>" id="maps" rows="4" placeholder="Frame Maps Kamu"><?= old('maps'); ?></textarea>
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('maps'); ?>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="/pasang-iklan" class="w-100 btn btn-outline-dark">Kembali</a>
                        </div>
                        <div class="col-md-6">
                            <button class="w-100 btn btn-primary" type="submit">Pasang Iklan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>