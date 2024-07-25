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

    <style>
        /* Menghilangkan tanda panah pada input number */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body class="dark:bg-slate-900">

    <?= (preg_match('/Login/', $title) || preg_match('/Registrasi/', $title)) ? '' : $this->include('layouts/navbar_tailwind') ?>

    <?= $this->renderSection('content'); ?>

    <?= (preg_match('/Login/', $title) || preg_match('/Registrasi/', $title)) ? '' : $this->include('layouts/footer_tailwind'); ?>

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

    <?php if (session()->getFlashdata('pesanProduk')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('pesanProduk'); ?>!", "success");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('isiRating')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('isiRating'); ?>!", "success");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('unggah')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('unggah'); ?>!", "success");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('topUp')) : ?>
        <script>
            swal("Berhasil!", "<?= session()->getFlashdata('topUp'); ?>!", "success");
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

        function previewImgTopUp() {
            const gambar = document.querySelector('#gambarTopUp');
            // const sampulLabel = document.querySelector('.custom-f')
            const imgPreview = document.querySelector('.img-preview-TopUp');
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

        try {
            // script modal mitra gabung
            const mitraCheck = document.getElementById('mitra-checkbox');
            const btnAccept = document.querySelector('button#mitra-accept-btn');

            // pointer-events-none opacity-50 cursor-not-allowed
            mitraCheck.addEventListener('click', function() {
                if (mitraCheck.checked) {
                    btnAccept.classList.remove('pointer-events-none', 'opacity-50', 'cursor-not-allowed');
                } else {
                    btnAccept.classList.add('pointer-events-none', 'opacity-50', 'cursor-not-allowed');
                }
            })
        } catch (error) {

        }


        // script modal tambah produk
        document.addEventListener("DOMContentLoaded", function(event) {
            try {
                document.getElementById('ModalButtonTambahProduk').click();
            } catch (error) {

            }
        });

        document.addEventListener("DOMContentLoaded", function(event) {
            try {
                document.getElementById('defaultModalButton').click();
            } catch (error) {

            }
        });

        // function decreaseQuantity() {
        //     var quantityInput = document.getElementById('quantity');
        //     var currentValue = parseInt(quantityInput.value);
        //     if (currentValue > 1) {
        //         quantityInput.value = currentValue - 1;
        //     }
        // }

        try {
            const tambahKuliner = document.getElementById('tambahPesan');
            const kurangKuliner = document.getElementById('kurangPesan');

            tambahKuliner.addEventListener('click', function() {


                var quantityInput = document.getElementById('quantity');
                var jumlah = document.querySelector('input[name="jumlah"]');
                var currentValue = parseInt(quantityInput.value);
                var maxValue = parseInt(quantityInput.getAttribute('max'));
                if (currentValue < maxValue) {
                    quantityInput.value = currentValue + 1;
                    jumlah.value = currentValue + 1;
                }

                // console.log(jumlah.value);
                // console.log(quantityInput.value);

                var kuantitas = parseInt(document.getElementById('quantity').value);
                var totalHarga = document.querySelector('.total-harga-kuliner')
                var hargaKuliner = parseInt(document.querySelector('span.harga-kuliner').textContent.replace(/\D/g, ''));

                // UBAH ISI KONTEN HTML
                document.querySelector('span.kuantitas-pesan').innerText = kuantitas;
                var hasil = hargaKuliner * kuantitas;
                totalHarga.innerText = `Rp ${hasil.toLocaleString('id-ID')}`;

                const alertSaldo = document.querySelector('#saldoKurang');
                const saldoUser = document.querySelector('input[name="saldoUser"]');
                if (parseInt(document.querySelector('input[name="saldoUser"]').value) < parseInt(document.querySelector('.total-harga-kuliner').textContent.replace(/\D/g, ''))) {
                    alertSaldo.classList.remove('hidden');
                    alertSaldo.classList.add('flex');
                    document.querySelector('.tombolPesan').classList.add('pointer-events-none', 'opacity-50', 'cursor-not-allowed');
                } else {
                    alertSaldo.classList.add('hidden');
                    document.querySelector('.tombolPesan').classList.remove('pointer-events-none');
                    document.querySelector('.tombolPesan').classList.remove('opacity-50');
                    document.querySelector('.tombolPesan').classList.remove('cursor-not-allowed');
                }

                // console.log(totalHarga.textContent);
            })

            kurangKuliner.addEventListener('click', function() {
                var quantityInput = document.getElementById('quantity');
                var jumlah = document.querySelector('input[name="jumlah"]');
                var currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                    jumlah.value = currentValue - 1;
                }

                // console.log(jumlah.value);
                // console.log(quantityInput.value);

                var kuantitas = parseInt(document.getElementById('quantity').value);
                var totalHarga = document.querySelector('.total-harga-kuliner')
                var hargaKuliner = parseInt(document.querySelector('span.harga-kuliner').textContent.replace(/\D/g, ''));

                // UBAH ISI KONTEN HTML
                document.querySelector('span.kuantitas-pesan').innerText = kuantitas;
                var hasil = hargaKuliner * kuantitas;
                totalHarga.innerText = `Rp ${hasil.toLocaleString('id-ID')}`;

                const alertSaldo = document.querySelector('#saldoKurang');
                const saldoUser = document.querySelector('input[name="saldoUser"]');
                if (parseInt(document.querySelector('input[name="saldoUser"]').value) < parseInt(document.querySelector('.total-harga-kuliner').textContent.replace(/\D/g, ''))) {
                    alertSaldo.classList.remove('hidden');
                    alertSaldo.classList.add('flex');
                    // pointer-events-none opacity-50 cursor-not-allowed
                    document.querySelector('.tombolPesan').classList.add('pointer-events-none', 'opacity-50', 'cursor-not-allowed');
                } else {
                    alertSaldo.classList.add('hidden');
                    document.querySelector('.tombolPesan').classList.remove('pointer-events-none');
                    document.querySelector('.tombolPesan').classList.remove('opacity-50');
                    document.querySelector('.tombolPesan').classList.remove('cursor-not-allowed');
                }

                // console.log(totalHarga.textContent);

            })
        } catch (error) {

        }

        try {
            const alertSaldo = document.querySelector('#saldoKurang');
            const saldoUser = document.querySelector('input[name="saldoUser"]');
            if (parseInt(document.querySelector('input[name="saldoUser"]').value) < parseInt(document.querySelector('.total-harga-kuliner').textContent.replace(/\D/g, ''))) {
                alertSaldo.classList.remove('hidden');
                alertSaldo.classList.add('flex');
            }

            console.log(document.querySelector('input[name="jumlah"]').value)
        } catch (error) {

        }

        // console.log(parseInt(document.querySelector('input[name="saldoUser"]').value));
        // console.log(parseInt(document.querySelector('.total-harga-kuliner').textContent.replace(/\D/g, '')));

        // function increaseQuantity() {
        //     var quantityInput = document.getElementById('quantity');
        //     var currentValue = parseInt(quantityInput.value);
        //     var maxValue = parseInt(quantityInput.getAttribute('max'));
        //     if (currentValue < maxValue) {
        //         quantityInput.value = currentValue + 1;
        //     }
        // }

        // const ratingKuliner = document.querySelector('.ratingKuliner');
        // const stars = ratingKuliner.querySelectorAll('i');

        // for (let i = 0; i < stars.length; i++) {
        //     stars[i].addEventListener('click', function() {
        //         for (let j = i + 1; j < stars.length; j++) {
        //             stars[j].classList.remove('text-yellow-300');
        //         }

        //         for (let j = 0; j <= i; j++) {
        //             stars[j].classList.add('text-yellow-300')
        //         }
        //     })
        // }

        const metode = document.querySelector('#metode');
        const rekening = document.querySelector('#rekening');

        metode.addEventListener('change', function() {
            const selectedOption = metode.value;

            if (selectedOption == 'Dana' || selectedOption == 'ShopeePay') {
                rekening.value = '085870627026';
            } else if (selectedOption == 'Bank BRI') {
                rekening.value = '586501030011537';
            } else if (selectedOption == 'Bank BCA') {
                rekening.value = '5220304312';
            }
        })

        const ratingKuliners = document.querySelectorAll('.ratingKuliner');

        for (let i = 0; i < ratingKuliners.length; i++) {
            const stars = ratingKuliners[i].querySelectorAll('i');
            for (let j = 0; j < stars.length; j++) {
                stars[j].addEventListener('click', function() {
                    for (let k = j + 1; k < stars.length; k++) {
                        stars[k].classList.remove('text-yellow-300');
                    }

                    for (let k = 0; k <= j; k++) {
                        stars[k].classList.add('text-yellow-300')
                    }
                })
            }
        }
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