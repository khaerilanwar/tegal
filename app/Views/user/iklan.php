<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>

<!-- SVG -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="collection" viewBox="0 0 16 16">
    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
  </symbol>
  <symbol id="toggles2" viewBox="0 0 16 16">
    <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
    <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
    <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
  </symbol>
</svg>

<div class="px-4 pt-5 my-5 text-center">
  <h1 class="display-6 fw-bold">Majukan UMKM Kota Tegal</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <a href="#iklan" class="btn btn-primary btn-lg px-4 me-sm-3">Pasang Sekarang</a>
    </div>
  </div>
</div>

<?= $this->include($partial); ?>

<?php if ($partial == 'user/partial/index') : ?>

  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="text-center mb-5">Iklan Anda</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-5">
        <span>Cari Berdasarkan</span>
        <form action="" method="get">
          <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <!-- TABEL IKLAN -->
        <table class="table">
          <thead class="table-light">
            <th>No.</th>
            <th>Nama</th>
            <th>Bidang Jasa</th>
            <th>Harga</th>
            <th>Gambar</th>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($dataIklan as $iklan) : ?>
              <tr class="align-middle">
                <td><?= $i; ?></td>
                <td><?= $iklan['nama_jasa']; ?></td>
                <td><?= $iklan['bidang_jasa']; ?></td>
                <td> Rp. <?= number_format($iklan['harga'], 0, '', '.') ?></td>
                <td>
                  <img src="assets/img/<?= $iklan['gambar']; ?>" class="rounded" alt="<?= $iklan['nama_jasa']; ?>" width="70">
                </td>
                <td>
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal<?= $iklan['id']; ?>">
                    Edit
                  </button>

                  <form action="/pasang-iklan/<?= $iklan['id']; ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')">Hapus</button>
                  </form>
                </td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
        <!-- END TABEL IKLAN -->
      </div>
    </div>
  </div>

<?php endif; ?>

<?php foreach ($dataIklan as $iklan) : ?>
  <!-- Modal -->
  <div class="modal fade" id="editModal<?= $iklan['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Iklan Jasa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/pasang-iklan/update/<?= $iklan['id']; ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="gambarLama" value="<?= $iklan['gambar']; ?>">
            <div class="row mb-3">
              <div class="col-6">
                <div class="row">
                  <div class="col mb-3">
                    <label for="nama_jasa" class="form-label">Nama Jasa Kamu</label>
                    <input value="<?= $iklan['nama_jasa']; ?>" type="text" class="form-control" id="nama_jasa" name="nama_jasa" placeholder="Nama Jasa">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="harga" class="form-label">Harga Jasa Kamu</label>
                    <input value="<?= $iklan['harga']; ?>" type="text" class="form-control" id="harga" name="harga" placeholder="Harga Jasa Kamu">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <label for="gambar" class="form-label">Upload Gambar Jasa</label>
                <input type="file" name="gambar" class="form-control" id="gambar" onchange="previewImg()">
                <img src="/assets/img/<?= $iklan['gambar']; ?>" width="80" id="img-prv" class="img-thumbnail img-preview mt-2 mx-auto d-block">
              </div>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi Jasa Kamu</label>
              <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Deskripsi Jasa Kamu"><?= $iklan['deskripsi']; ?></textarea>
            </div>
            <div class="mb-3">
              <label for="maps" class="form-label">Maps Jasa Kamu</label>
              <textarea name="maps" class="form-control" id="maps" rows="3" placeholder="Alamat Maps Jasa Kamu"><?= $iklan['maps']; ?></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php $this->endSection(); ?>