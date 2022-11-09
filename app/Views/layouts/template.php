<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- FAVICON TEGAL -->
    <link rel="shortcut icon" href="/assets/img/ikon-tegal.ico" type="image/x-icon">

    <!-- CSS BOOTSTRAP -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/addf044e73.js" crossorigin="anonymous"></script>
</head>

<body>

    <?= $this->include('layouts/navbar_login'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layouts/footer'); ?>

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


    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script>
        function total() {
            var jumlahTiket, hargaTiket, hasil;
            jumlahTiket = parseInt(document.getElementById('jumlah_tiket').value);
            hargaTiket = parseInt(document.getElementById('harga').value);
            if (jumlahTiket > 0) {
                hasil = jumlahTiket * hargaTiket;
                document.getElementById('harga_total').value = hasil;
            }
        }
    </script>

    <script>
        // SCRIPT JAVASCRIPT UNTUK MEMBUAT PREVIEW GAMBAR YANG DI UPLOAD
        function previewImg() {
            const gambar = document.querySelector('#gambar');
            // const sampulLabel = document.querySelector('.custom-f')
            const imgPreview = document.querySelector('.img-preview');
            const fileGambar = new FileReader();

            fileGambar.readAsDataURL(gambar.files[0]);

            fileGambar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>