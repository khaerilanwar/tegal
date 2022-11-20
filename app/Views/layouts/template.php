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

    <?php if (preg_match('/Home/', $title)) : ?>
        <!-- Animate.css -->
        <link rel="stylesheet" href="/assets/css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="/assets/css/icomoon.css">
        <!-- Bootstrap  -->
        <!-- <link rel="stylesheet" href="/assets/css/2bootstrap.css"> -->
        <!-- Superfish -->
        <link rel="stylesheet" href="/assets/css/superfish.css">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.min.css">

        <link rel="stylesheet" href="/assets/css/2style.css">


        <!-- Modernizr JS -->
        <script src="/assets/js/modernizr-2.6.2.min.js"></script>
    <?php endif; ?>
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

        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
</body>

</html>