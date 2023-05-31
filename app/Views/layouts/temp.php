<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- FAVICON TEGAL -->
    <link rel="shortcut icon" href="/assets/img/ikon-tegal.ico" type="image/x-icon">
    <!-- STYLE TAILWIND CSS -->
    <link rel="stylesheet" href="/assets/css/tailwindstyle.css" />
    <!-- CDN FONTAWESOME -->
    <script src="https://kit.fontawesome.com/addf044e73.js" crossorigin="anonymous"></script>
    <!-- CDN FLOWBITE -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <!-- CDN GOOGLE FONT HEEBO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body class="dark:bg-slate-900">

    <?= (preg_match('/Login/', $title) || preg_match('/Registrasi/', $title)) ?: $this->include('layouts/navbar_tailwind') ?>

    <?= $this->renderSection('content'); ?>

    <?= (preg_match('/Login/', $title) || preg_match('/Registrasi/', $title)) ?: $this->include('layouts/footer_tailwind'); ?>

    <!-- TOMBOL UNTUK MENGGANTI DARK DAN LIGHT MODE -->
    <input type="checkbox" id="toggle" class="hidden" />
    <label for="toggle">

        <div data-tooltip-target="tooltip-left" data-tooltip-placement="left" class="fixed bottom-3 left-3 bg-slate-700 text-white h-9 w-9 rounded-lg flex cursor-pointer hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
            <i id="ikon" class="m-auto fa-solid fa-moon"></i>
        </div>
        <div id="tooltip-left" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            dark<div class="tooltip-arrow" data-popper-arrow></div>
        </div>

    </label>
    <!-- END TOMBOL UNTUK MENGGANTI DARK DAN LIGHT MODE -->


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <?php if (session()->getFlashdata('update')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('update'); ?>!", "success");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('addJasa')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('addJasa'); ?>!", "success");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('addKuliner')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('addKuliner'); ?>!", "success");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('addPenginapan')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('addPenginapan'); ?>!", "success");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('ubahProfil')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('ubahProfil'); ?>!", "success");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('ubahSandi')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('ubahSandi'); ?>!", "success");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('hapusIklan')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('hapusIklan'); ?>!", "success");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('gagalUpdate')) : ?>
        <script>
            swal("Gagal!", "<?= session()->getFlashdata('gagalUpdate'); ?>!", "error");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('pesanTiket')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('pesanTiket'); ?>!", "success");
        </script>
    <?php endif; ?>

    <!-- JAVASCRIPT CUSTOM -->
    <script src="/assets/js/script.js"></script>

    <script>
        function total() {
            var jumlahTiket, hargaTiket, hasil;

            jumlahTiket = parseInt(document.getElementById('jumlah_tiket').value);
            hargaTiket = parseInt(document.getElementById('harga').value);
            if (jumlahTiket > 0) {
                hasil = jumlahTiket * hargaTiket;
                document.getElementById('harga_total').value = `Rp ${hasil.toLocaleString('id-ID')}`;
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

        // KODE JS UNTUK TOMBOL DARK MODE
        const checkbox = document.querySelector('#toggle');
        const tooltip = document.querySelector('#tooltip-left');
        const html = document.querySelector('html');
        const ikon = document.querySelector('#ikon');

        // checkbox.addEventListener('change', function() {
        //     if (checkbox.checked) {
        //         sessionStorage.setItem('darkMode', 'true');
        //     } else {
        //         sessionStorage.removeItem('darkMode');
        //     }
        // });

        checkbox.addEventListener('change', function(event) {
            // Mendapatkan status checked checkbox
            var isChecked = event.target.checked;

            // Melakukan sesuatu ketika status checked berubah
            if (isChecked) {
                console.log('Checkbox dicentang');
                sessionStorage.setItem('darkMode', 'true');
                console.log(sessionStorage.getItem('darkMode'));
                // Lakukan tindakan yang diinginkan ketika checkbox dicentang
            } else {
                console.log('Checkbox tidak dicentang');
                sessionStorage.removeItem('darkMode');
                sessionStorage.setItem('darkMode', 'false');
                console.log(sessionStorage.getItem('darkMode'));
                // Lakukan tindakan yang diinginkan ketika checkbox tidak dicentang
            }

            if (sessionStorage.getItem('darkMode') === 'true') {
                // Terapkan gaya dark mode
                html.classList.add('dark');
                tooltip.innerHTML = 'light';
                ikon.classList.replace('fa-moon', 'fa-lightbulb');
            } else {
                // Terapkan gaya light mode
                ikon.classList.replace('fa-lightbulb', 'fa-moon');
                tooltip.innerHTML = 'dark';
                html.classList.remove('dark');
            }
        });


        if (sessionStorage.getItem('darkMode') === 'true') {
            // Terapkan gaya dark mode
            html.classList.add('dark');
            tooltip.innerHTML = 'light';
            ikon.classList.replace('fa-moon', 'fa-lightbulb');
        } else {
            // Terapkan gaya light mode
            ikon.classList.replace('fa-lightbulb', 'fa-moon');
            tooltip.innerHTML = 'dark';
            html.classList.remove('dark');
        }

        // checkbox.addEventListener('click', function() {
        //     if (checkbox.checked) {
        //         html.classList.add('dark');
        //         tooltip.innerHTML = 'light';
        //         ikon.classList.replace('fa-moon', 'fa-lightbulb');
        //     } else {
        //         ikon.classList.replace('fa-lightbulb', 'fa-moon');
        //         tooltip.innerHTML = 'dark';
        //         html.classList.remove('dark');
        //     }
        // });
    </script>
    <script>
        const dropdown = document.querySelector('.dropdown');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        if (dropdown != null) {
            dropdown.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>

</html>