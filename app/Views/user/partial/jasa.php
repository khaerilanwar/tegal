<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center pt-5" id="form">
            <div class="col-md-4 col-lg-6 py-5">
                <h3 class="mb-4 text-center">Pasang Iklan Jasamu</h3>
                <form method="post" action="/pasang-iklan/addJasa" enctype="multipart/form-data">
                    <div class="row my-5">
                        <div class="col-12 mb-3">
                            <label for="nama_jasa" class="form-label">Nama Jasa</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_jasa')) ? 'is-invalid' : ''; ?>" id="nama_jasa" name="nama_jasa" placeholder="Nama Jasa Kamu">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('nama_jasa'); ?>
                            </div>
                        </div>

                        <div class="col-md-12 my-3">
                            <label for="bidang_jasa" class="form-label">Bidang Jasa</label>
                            <select class="form-select <?= ($validation->hasError('bidang_jasa')) ? 'is-invalid' : ''; ?>" id="bidang_jasa" name="bidang_jasa">
                                <option selected disabled>Pilih Bidang...</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Cleaning">Cleaning</option>
                                <option value="Otomotif">Otomotif</option>
                                <option value="Pendidikan">Pendidikan</option>
                                <option value="Kesehatan">Kesehatan</option>
                            </select>
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('bidang_jasa'); ?>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" placeholder="Harga Jasa Kamu">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('harga'); ?>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" rows="3" placeholder="Deskripsi Jasa Kamu"></textarea>
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('deskripsi'); ?>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="inputGroupFile02">Gambar Jasa Kamu</label>
                            <input type="file" name="gambar" class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" onchange="previewImg()">
                            <img src="/assets/img/anwar.jpeg" width="100" id="img-prv" class="img-thumbnail img-preview mt-2" onload="hilang()">
                            <div class="pl-3 invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="maps" class="form-label">Frame Maps</label>
                            <textarea name="maps" class="form-control <?= ($validation->hasError('maps')) ? 'is-invalid' : ''; ?>" id="maps" rows="4" placeholder="Frame Maps Kamu"></textarea>
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