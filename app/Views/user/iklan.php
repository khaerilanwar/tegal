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

<div class="px-4 my-5 text-center">
  <h1 class="display-6 fw-bold">Majukan UMKM Kota Tegal</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <a href="<?= $partial == 'user/partial/index' ? '#iklan' : '/pasang-iklan'; ?>" class="btn btn-primary btn-lg px-4 me-sm-3">Pasang Sekarang</a>
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

    <form action="" method="get">
      <div class="row mb-4">
        <div class="col-8">
          <div class="row mb-3">
            <div class="col">
              <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
              <span class="ms-2">Cari Berdasarkan</span>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <select class="form-select p-2" name="menu" aria-label="Default select example">
                <option value="kuliner" <?= $displayIklan == 'kuliner' ? 'selected' : ''; ?>>Kuliner</option>
                <option value="penginapan" <?= $displayIklan == 'penginapan' ? 'selected' : ''; ?>>Penginapan</option>
                <option value="jasa" <?= $displayIklan == 'jasa' ? 'selected' : ''; ?>>Jasa</option>
              </select>
            </div>
            <div class="col-6">
              <div class="input-group ml-3">
                <input type="text" id="input1-group2" name="produk" placeholder="Nama Produk/Jasa" class="form-control py-2" autocomplete="off">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-primary py-2">
                    <i class="fa fa-search"></i> Cari
                  </button>
                </div>
              </div>
            </div>
            <div class="col-2">
              <a href="/pasang-iklan" class="btn btn-success">Refresh</a>
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="row">
      <div class="col">
        <?php if ($dataIklan) : ?>
          <?php $i = 1; ?>
          <?php
              if (array_key_exists('nama_jasa', $dataIklan[0])) {
                $field = ['nama_jasa', 'bidang_jasa', 'Bidang Jasa', 'jasa'];
              } elseif (array_key_exists('nama_kuliner', $dataIklan[0])) {
                $field = ['nama_kuliner', 'jenis_kuliner', 'Jenis Kuliner', 'kuliner'];
              } else {
                $field = ['nama_penginapan', 'jenis_penginapan', 'Jenis Penginapan', 'penginapan'];
              }
              ?>
          <!-- TABEL IKLAN -->
          <table class="table">
            <thead class="table-light">
              <th>No.</th>
              <th>Nama</th>
              <th><?= $field[2]; ?></th>
              <th>Harga</th>
              <th>Gambar</th>
              <th></th>
            </thead>
            <tbody>
              <?php foreach ($dataIklan as $iklan) : ?>
                <tr class="align-middle">
                  <td><?= $i; ?></td>
                  <td><?= $iklan[$field[0]]; ?></td>
                  <td><?= $iklan[$field[1]]; ?></td>
                  <td> Rp. <?= number_format($iklan['harga'], 0, '', '.') ?></td>
                  <td>
                    <img src="assets/img/<?= $iklan['gambar']; ?>" class="rounded" alt="<?= $iklan[$field[0]]; ?>" width="70" height="70">
                  </td>
                  <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal<?= $iklan['id']; ?>">
                      Edit
                    </button>

                    <form action="/<?= $field[3]; ?>/<?= $iklan['id']; ?>" method="post" class="d-inline">
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

        <?php else : ?>

          <?php
              if (
                count($dataJasa) < 1 &&
                count($dataKuliner) < 1 &&
                count($dataPenginapan) < 1
              ) : ?>

            <div class="container">
              <div class="row">
                <div class="col">
                  <h2 class="text-center my-4">Anda belum memasang iklan</h2>
                </div>
              </div>
            </div>

          <?php else : ?>

            <?php if ($dataKuliner) : ?>
              <h2 class="text-center my-3">Iklan Aneka Kuliner</h2>
              <!-- TABEL KULINER -->
              <table class="table">
                <thead class="table-light">
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Jenis Kuliner</th>
                  <th>Harga</th>
                  <th>Gambar</th>
                  <th></th>
                </thead>
                <tbody>

                  <?php $i = 1; ?>
                  <?php foreach ($dataKuliner as $kuliner) : ?>
                    <tr class="align-middle">
                      <td><?= $i; ?></td>
                      <td><?= $kuliner['nama_kuliner']; ?></td>
                      <td><?= $kuliner['jenis_kuliner']; ?></td>
                      <td> Rp. <?= number_format($kuliner['harga'], 0, '', '.') ?></td>
                      <td>
                        <img src="assets/img/<?= $kuliner['gambar']; ?>" class="rounded" alt="<?= $kuliner['nama_kuliner']; ?>" width="70" height="70">
                      </td>
                      <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModalKuliner<?= $kuliner['id']; ?>">
                          Edit
                        </button>

                        <form action="/kuliner/<?= $kuliner['id']; ?>" method="post" class="d-inline">
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
              <!-- END TABEL KULINER -->
            <?php endif; ?>

            <?php if ($dataJasa) : ?>
              <h2 class="text-center mt-5 mb-3">Iklan Pelayanan Jasa</h2>
              <!-- TABEL JASA -->
              <table class="table">
                <thead class="table-light">
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Bidang Jasa</th>
                  <th>Harga</th>
                  <th>Gambar</th>
                  <th></th>
                </thead>
                <tbody>

                  <?php $i = 1; ?>
                  <?php foreach ($dataJasa as $jasa) : ?>
                    <tr class="align-middle">
                      <td><?= $i; ?></td>
                      <td><?= $jasa['nama_jasa']; ?></td>
                      <td><?= $jasa['bidang_jasa']; ?></td>
                      <td> Rp. <?= number_format($jasa['harga'], 0, '', '.') ?></td>
                      <td>
                        <img src="assets/img/<?= $jasa['gambar']; ?>" class="rounded" alt="<?= $jasa['nama_jasa']; ?>" width="70" height="70">
                      </td>
                      <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModalJasa<?= $jasa['id']; ?>">
                          Edit
                        </button>

                        <form action="/jasa/<?= $jasa['id']; ?>" method="post" class="d-inline">
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
              <!-- END TABEL JASA -->
            <?php endif; ?>

            <?php if ($dataPenginapan) : ?>
              <h2 class="text-center mt-5 mb-3">Iklan Penginapan</h2>
              <!-- TABEL JASA -->
              <table class="table">
                <thead class="table-light">
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Jenis Penginapan</th>
                  <th>Harga</th>
                  <th>Gambar</th>
                  <th></th>
                </thead>
                <tbody>

                  <?php $i = 1; ?>
                  <?php foreach ($dataPenginapan as $penginapan) : ?>
                    <tr class="align-middle">
                      <td><?= $i; ?></td>
                      <td><?= $penginapan['nama_penginapan']; ?></td>
                      <td><?= $penginapan['jenis_penginapan']; ?></td>
                      <td> Rp. <?= number_format($penginapan['harga'], 0, '', '.') ?></td>
                      <td>
                        <img src="assets/img/<?= $penginapan['gambar']; ?>" class="rounded" alt="<?= $penginapan['nama_penginapan']; ?>" width="70" height="70">
                      </td>
                      <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModalPenginapan<?= $penginapan['id']; ?>">
                          Edit
                        </button>

                        <form action="/penginapan/<?= $penginapan['id']; ?>" method="post" class="d-inline">
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
              <!-- END TABEL JASA -->
            <?php endif ?>
          <?php endif; ?>

        <?php endif; ?>



      </div>
    </div>
  </div>

<?php endif; ?>

<?php if ($dataIklan) : ?>
  <?php
    if (array_key_exists('nama_jasa', $dataIklan[0])) {
      $field = ['nama_jasa', 'bidang_jasa', 'Nama Jasa', 'Jasa', 'jasa'];
    } elseif (array_key_exists('nama_kuliner', $dataIklan[0])) {
      $field = ['nama_kuliner', 'jenis_kuliner', 'Nama Kuliner', 'Kuliner', 'kuliner'];
    } else {
      $field = ['nama_penginapan', 'jenis_penginapan', 'Jenis Penginapan', 'Penginapan', 'penginapan'];
    }
    ?>
  <?php foreach ($dataIklan as $iklan) : ?>
    <!-- Modal -->
    <div class="modal fade" id="editModal<?= $iklan['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Iklan <?= $field[3]; ?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/pasang-iklan/update/<?= $iklan['id']; ?>?menu=<?= $field[4] ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="gambarLama" value="<?= $iklan['gambar']; ?>">
              <div class="row mb-3">
                <div class="col-6">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="<?= $field[0]; ?>" class="form-label">Nama <?= $field[3]; ?> Kamu</label>
                      <input value="<?= $iklan[$field[0]]; ?>" type="text" class="form-control" id="<?= $field[0]; ?>" name="<?= $field[0]; ?>" placeholder="<?= $field[2]; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="harga" class="form-label">Harga <?= $field[3]; ?> Kamu</label>
                      <input value="<?= $iklan['harga']; ?>" type="text" class="form-control" id="harga" name="harga" placeholder="Harga Jasa Kamu">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <label for="gambar" class="form-label">Upload Gambar <?= $field[3]; ?></label>
                  <input type="file" name="gambar" class="form-control" id="gambar" onchange="previewImg()">
                  <img src="/assets/img/<?= $iklan['gambar']; ?>" width="80" id="img-prv" class="img-thumbnail img-preview mt-2 mx-auto d-block">
                </div>
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi <?= $field[3]; ?> Kamu</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Deskripsi <?= $field[3]; ?> Kamu"><?= $iklan['deskripsi']; ?></textarea>
              </div>
              <div class="mb-3">
                <label for="maps" class="form-label">Maps <?= $field[3]; ?> Kamu</label>
                <textarea name="maps" class="form-control" id="maps" rows="3" placeholder="Alamat Maps <?= $field[3]; ?> Kamu"><?= $iklan['maps']; ?></textarea>
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

<?php else : ?>
  <!-- MODAL DATA JASA -->
  <?php foreach ($dataJasa as $jasa) : ?>
    <!-- Modal -->
    <div class="modal fade" id="editModalJasa<?= $jasa['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Iklan Jasa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/pasang-iklan/update/<?= $jasa['id']; ?>?menu=jasa" method="post" enctype="multipart/form-data">
              <input type="hidden" name="gambarLama" value="<?= $jasa['gambar']; ?>">
              <div class="row mb-3">
                <div class="col-6">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nama_jasa" class="form-label">Nama Jasa Kamu</label>
                      <input value="<?= $jasa['nama_jasa']; ?>" type="text" class="form-control" id="nama_jasa" name="nama_jasa" placeholder="Nama Jasa">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="harga" class="form-label">Harga Jasa Kamu</label>
                      <input value="<?= $jasa['harga']; ?>" type="text" class="form-control" id="harga" name="harga" placeholder="Harga Jasa Kamu">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <label for="gambar" class="form-label">Upload Gambar Jasa</label>
                  <input type="file" name="gambar" class="form-control" id="gambar" onchange="previewImg()">
                  <img src="/assets/img/<?= $jasa['gambar']; ?>" width="80" id="img-prv" class="img-thumbnail img-preview mt-2 mx-auto d-block">
                </div>
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Jasa Kamu</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Deskripsi Jasa Kamu"><?= $jasa['deskripsi']; ?></textarea>
              </div>
              <div class="mb-3">
                <label for="maps" class="form-label">Maps Jasa Kamu</label>
                <textarea name="maps" class="form-control" id="maps" rows="3" placeholder="Alamat Maps Jasa Kamu"><?= $jasa['maps']; ?></textarea>
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

  <!-- MODAL DATA KULINER -->
  <?php foreach ($dataKuliner as $kuliner) : ?>
    <!-- Modal -->
    <div class="modal fade" id="editModalKuliner<?= $kuliner['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Iklan Kuliner</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/pasang-iklan/update/<?= $kuliner['id']; ?>?menu=kuliner" method="post" enctype="multipart/form-data">
              <input type="hidden" name="gambarLama" value="<?= $kuliner['gambar']; ?>">
              <div class="row mb-3">
                <div class="col-6">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nama_kuliner" class="form-label">Nama Jasa Kamu</label>
                      <input value="<?= $kuliner['nama_kuliner']; ?>" type="text" class="form-control" id="nama_kuliner" name="nama_kuliner" placeholder="Nama Kuliner">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="harga" class="form-label">Harga Kuliner Kamu</label>
                      <input value="<?= $kuliner['harga']; ?>" type="text" class="form-control" id="harga" name="harga" placeholder="Harga Jasa Kamu">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <label for="gambar" class="form-label">Upload Gambar Kuliner</label>
                  <input type="file" name="gambar" class="form-control" id="gambar" onchange="previewImg()">
                  <img src="/assets/img/<?= $kuliner['gambar']; ?>" width="80" id="img-prv" class="img-thumbnail img-preview mt-2 mx-auto d-block">
                </div>
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Kuliner Kamu</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Deskripsi Kuliner Kamu"><?= $kuliner['deskripsi']; ?></textarea>
              </div>
              <div class="mb-3">
                <label for="maps" class="form-label">Maps Kuliner Kamu</label>
                <textarea name="maps" class="form-control" id="maps" rows="3" placeholder="Alamat Maps Jasa Kamu"><?= $kuliner['maps']; ?></textarea>
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

  <!-- MODAL DATA PENGINAPAN -->
  <?php foreach ($dataPenginapan as $penginapan) : ?>
    <!-- Modal -->
    <div class="modal fade" id="editModalPenginapan<?= $penginapan['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Iklan Penginapan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/pasang-iklan/update/<?= $penginapan['id']; ?>?menu=penginapan" method="post" enctype="multipart/form-data">
              <input type="hidden" name="gambarLama" value="<?= $penginapan['gambar']; ?>">
              <div class="row mb-3">
                <div class="col-6">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nama_penginapan" class="form-label">Nama Penginapan Kamu</label>
                      <input value="<?= $penginapan['nama_penginapan']; ?>" type="text" class="form-control" id="nama_penginapan" name="nama_penginapan" placeholder="Nama Penginapan">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="harga" class="form-label">Harga Penginapan Kamu</label>
                      <input value="<?= $penginapan['harga']; ?>" type="text" class="form-control" id="harga" name="harga" placeholder="Harga Penginapan Kamu">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <label for="gambar" class="form-label">Upload Gambar Penginapan</label>
                  <input type="file" name="gambar" class="form-control" id="gambar" onchange="previewImg()">
                  <img src="/assets/img/<?= $penginapan['gambar']; ?>" width="80" id="img-prv" class="img-thumbnail img-preview mt-2 mx-auto d-block">
                </div>
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Penginapan Kamu</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Deskripsi Penginapan Kamu"><?= $penginapan['deskripsi']; ?></textarea>
              </div>
              <div class="mb-3">
                <label for="maps" class="form-label">Maps Penginapan Kamu</label>
                <textarea name="maps" class="form-control" id="maps" rows="3" placeholder="Alamat Maps Penginapan Kamu"><?= $penginapan['maps']; ?></textarea>
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
<?php endif; ?>

<?php $this->endSection(); ?>