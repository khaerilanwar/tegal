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