<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesona Tegal</title>
    <!-- FAVICON TEGAL -->
    <link rel="shortcut icon" href="/assets/img/ikon-tegal.ico" type="image/x-icon">
    <!-- STYLE TAILWIND CSS -->
    <link rel="stylesheet" href="/assets/css/tailwindstyle.css" />
    <!-- CDN FONTAWESOME -->
    <script src="https://kit.fontawesome.com/addf044e73.js" crossorigin="anonymous"></script>
    <!-- CDN GOOGLE FONT HEEBO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="h-screen w-full">
        <div class="-z-[49] opacity-60 absolute top-0 left-0 h-screen w-full object-cover bg-black">
        </div>
        <video autoplay muted loop class="-z-50 absolute top-0 left-0 h-screen w-full object-cover">
            <source src="https://tourism.surabaya.go.id/assets/front/videos/surabaya.mp4" type="video/mp4">
        </video>

        <div class="container mx-auto flex justify-between sm:justify-around py-3">
            <img class="w-28 ml-4" src="/assets/img/gateng.png" alt="">
            <div class="my-auto">
                <ul class="hidden sm:flex sm:gap-x-8">
                    <li class="group">
                        <a href="/home" class="transition-all duration-500 group-hover:text-blue-500 font-heebo text-lg text-white">Beranda</a>
                        <div class="transition-all duration-500 mt-1 h-[3px] bg-slate-400 rounded-md group-hover:bg-purple-500">
                        </div>
                    </li>
                    <li class="group">
                        <a href="/wisata" class="transition-all duration-500 group-hover:text-blue-500 font-heebo text-lg text-white">Destinasi</a>
                        <div class="transition-all duration-500 mt-1 h-[3px] bg-slate-400 rounded-md group-hover:bg-purple-500">
                        </div>
                    </li>
                    <li class="group">
                        <a href="/kuliner" class="transition-all duration-500 group-hover:text-blue-500 font-heebo text-lg text-white">Kuliner</a>
                        <div class="transition-all duration-500 mt-1 h-[3px] bg-slate-400 rounded-md group-hover:bg-purple-500">
                        </div>
                    </li>
                    <li class="group">
                        <a href="/penginapan" class="transition-all duration-500 group-hover:text-blue-500 font-heebo text-lg text-white">Penginapan</a>
                        <div class="transition-all duration-500 mt-1 h-[3px] bg-slate-400 rounded-md group-hover:bg-purple-500">
                        </div>
                    </li>
                    <?php if (session()->email == false) : ?>
                        <li class="group">
                            <a href="/login" class="transition-all duration-500 group-hover:text-blue-500 font-heebo text-lg text-white">Masuk</a>
                            <div class="transition-all duration-500 mt-1 h-[3px] bg-slate-400 rounded-md group-hover:bg-purple-500">
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="sm:hidden mr-4 my-auto flex dropdown rounded bg-[#6096B4] w-11 h-11">
                <i class="fa-solid fa-bars text-white m-auto text-2xl cursor-pointer"></i>
            </div>
        </div>
        <ul class="dropdown-menu rounded absolute left-4 right-4 hidden bg-white py-1">
            <li class="my-2 ml-8">
                <a class="font-heebo font-" href="/">Beranda</a>
            </li>
            <li class="my-2 ml-8">
                <a class="font-heebo" href="/wisata">Destinasi</a>
            </li>
            <li class="my-2 ml-8">
                <a class="font-heebo" href="/kuliner">Kuliner</a>
            </li>
            <li class="my-2 ml-8">
                <a class="font-heebo" href="/penginapan">Penginapan</a>
            </li>
            <?php if (session()->email == false) : ?>
                <li class="my-2 ml-8">
                    <a class="font-heebo" href="/login">Masuk</a>
                </li>
            <?php endif; ?>
        </ul>

        <h1 class="text-white text-center font-heebo font-bold sm:text-6xl mt-12 text-2xl">WISATA KABUPATEN BREBES</h1>
        <h2 class="text-center text-white text-xl sm:text-[2.5rem] font-heebo mt-8">You will love every corner
            of it</h2>
        <h4 class="text-white text-center sm:text-lg text-sm px-5 font-heebo mt-[1.15rem]">Let's explore one of the biggest
            city in Indonesia with
            famous
            name
            called City of Heroes.</h4>

        <div class="container mx-auto mt-[14rem]">
            <div class="flex sm:justify-center justify-evenly sm:gap-16">
                <a href="/wisata" class="grid justify-items-center">
                    <i class="fa-solid block fa-map-location-dot text-white sm:text-4xl text-2xl"></i>
                    <span class="text-white block text-xs sm:text-lg font-heebo text-center leading-5 mt-3 font-extrabold">DESTINASI
                        <br>
                        WISATA</span>
                </a>
                <a href="/kuliner" class="grid justify-items-center">
                    <i class="fa-solid fa-bowl-food text-white sm:text-4xl text-2xl"></i>
                    <span class="text-white block text-xs sm:text-lg font-heebo text-center leading-5 mt-3 font-extrabold">KULINER
                        KHAS
                        <br>
                        DAERAH</span>
                </a>
                <a href="/penginapan" class="grid justify-items-center">
                    <i class="fa-solid fa-hotel text-white sm:text-4xl text-2xl"></i>
                    <span class="text-white block text-xs sm:text-lg font-heebo text-center leading-5 mt-3 font-extrabold">HOTEL
                        DAN <br>
                        VILLA</span>
                </a>
                <a href="#" class="grid justify-items-center">
                    <i class="fa-solid fa-map text-white sm:text-4xl text-2xl"></i>
                    <span class="text-white block text-xs sm:text-lg font-heebo text-center leading-5 mt-3 font-extrabold">PETA
                        <br>
                        DIGITAL</span>
                </a>
            </div>
        </div>
    </div>

    <!-- JUDUL GALERI KOTA TEGAL -->

    <div class="container mx-auto mt-20 sm:mb-10 mb-3">
        <img class="mx-auto" src="/assets/img/icon-sign (1).png" alt="">

        <h1 class="mt-7 sm:text-6xl text-4xl text-center text-[#6096B4] font-heebo">Start Your Best <br>Journey In Brebes
        </h1>
    </div>

    <!-- END JUDUL GALERI KOTA TEGAL -->

    <!-- GALERI KOTA TEGAL -->

    <div class="container mx-auto">
        <div class="sm:grid sm:grid-cols-2 sm:w-3/4 sm:grid-rows-2 mx-auto sm:justify-items-center">
            <div class="sm:row-end-2 sm:row-span-2 sm:m-1 rounded-2xl sm:p-3 p-2 mb-7 w-full">
                <div class="overflow-hidden group rounded-2xl sm:aspect-[4/3]">
                    <img class="group-hover:scale-125 w-full h-full object-cover transition-all duration-[2000ms]" src="/assets/img/<?= $wisata[0]['gambar']; ?>" alt="">
                </div>
                <div class="mt-5">
                    <span class="px-3 py-2 text-sm sm:text-lg bg-[#6096B4] text-white font-heebo rounded-lg">Pariwisata</span>
                    <h5 class="sm:mt-3 mt-2 sm:sm:text-xl font-bold font-heebo"><?= $wisata[0]['nama']; ?></h5>
                    <p class="sm:mt-1"><i class="fa-solid fa-location-dot"></i><span class="ml-2"><?php
                                                                                                    $alamat = $wisata[0]['alamat'];
                                                                                                    $alamat = explode(" ", $alamat);
                                                                                                    $alamat_split = [];
                                                                                                    for ($i = 0; $i < 4; $i++) {
                                                                                                        $alamat_split[] = $alamat[$i];
                                                                                                    }
                                                                                                    $view_alamat = implode(" ", $alamat_split);
                                                                                                    if ($view_alamat[-1] == "," or $view_alamat[-1] == ".") {
                                                                                                        substr($view_alamat, 0, strlen($view_alamat) - 1);
                                                                                                    }
                                                                                                    echo $view_alamat
                                                                                                    ?></span></p>
                </div>
            </div>
            <div class="sm:row-start-1 sm:row-end-3 sm:m-1 rounded-2xl sm:p-3 p-2 mb-7 w-full">
                <div class="rounded-2xl overflow-hidden group sm:aspect-[9/16]">
                    <img class="w-full h-full object-cover group-hover:scale-125 transition-all duration-[2000ms]" src="/assets/img/<?= $wisata[1]['gambar']; ?>" alt="">
                </div>
                <div class="mt-5">
                    <span class="px-3 py-2 text-sm sm:text-lg bg-[#6096B4] text-white font-heebo rounded-lg">Pariwisata</span>
                    <h5 class="sm:mt-3 mt-2 sm:sm:text-xl font-bold font-heebo"><?= $wisata[1]['nama']; ?></h5>
                    <p class="sm:mt-1"><i class="fa-solid fa-location-dot"></i><span class="ml-2"><?php
                                                                                                    $alamat = $wisata[1]['alamat'];
                                                                                                    $alamat = explode(" ", $alamat);
                                                                                                    $alamat_split = [];
                                                                                                    for ($i = 0; $i < 4; $i++) {
                                                                                                        $alamat_split[] = $alamat[$i];
                                                                                                    }
                                                                                                    $view_alamat = implode(" ", $alamat_split);
                                                                                                    if ($view_alamat[-1] == "," or $view_alamat[-1] == ".") {
                                                                                                        substr($view_alamat, 0, strlen($view_alamat) - 1);
                                                                                                    }
                                                                                                    echo $view_alamat
                                                                                                    ?></span></p>
                </div>
            </div>
            <div class="sm:row-start-2 sm:row-end-4 sm:m-1 rounded-2xl sm:p-3 p-2 mb-7 w-full">
                <div class="rounded-2xl overflow-hidden group sm:aspect-[9/16]">
                    <img class="w-full h-full object-cover group-hover:scale-125 transition-all duration-[2000ms]" src="/assets/img/<?= $penginapan[0]['gambar']; ?>" alt="">
                </div>
                <div class="mt-5">
                    <span class="px-3 py-2 text-sm sm:text-lg bg-[#6096B4] text-white font-heebo rounded-lg">Pariwisata</span>
                    <h5 class="sm:mt-3 mt-2 sm:text-xl font-bold font-heebo"><?= $penginapan[0]['nama']; ?></h5>
                    <p class="sm:mt-1"><i class="fa-solid fa-location-dot"></i><span class="ml-2"><?php
                                                                                                    $alamat = $penginapan[0]['alamat'];
                                                                                                    $alamat = explode(" ", $alamat);
                                                                                                    $alamat_split = [];
                                                                                                    for ($i = 0; $i < 4; $i++) {
                                                                                                        $alamat_split[] = $alamat[$i];
                                                                                                    }
                                                                                                    $view_alamat = implode(" ", $alamat_split);
                                                                                                    if ($view_alamat[-1] == "," or $view_alamat[-1] == ".") {
                                                                                                        substr($view_alamat, 0, strlen($view_alamat) - 1);
                                                                                                    }
                                                                                                    echo $view_alamat
                                                                                                    ?></span></p>
                </div>
            </div>
            <div class="sm:row-start-3 sm:row-end-4 sm:m-1 rounded-2xl sm:p-3 p-2 mb-7 w-full">
                <div class="rounded-2xl overflow-hidden group sm:aspect-[4/3]">
                    <img class="group-hover:scale-125 w-full h-full object-cover transition-all duration-[2000ms]" src="/assets/img/<?= $kuliner[0]['gambar']; ?>" alt="">
                </div>
                <div class="mt-5">
                    <span class="px-3 py-2 text-sm sm:text-lg bg-[#6096B4] text-white font-heebo rounded-lg">Pariwisata</span>
                    <h5 class="sm:mt-3 mt-2 sm:text-xl font-bold font-heebo"><?= $kuliner[0]['nama']; ?></h5>
                    <p class="sm:mt-1"><i class="fa-solid fa-location-dot"></i><span class="ml-2"><?php
                                                                                                    $alamat = $kuliner[0]['alamat'];
                                                                                                    $alamat = explode(" ", $alamat);
                                                                                                    $alamat_split = [];
                                                                                                    for ($i = 0; $i < 4; $i++) {
                                                                                                        $alamat_split[] = $alamat[$i];
                                                                                                    }
                                                                                                    $view_alamat = implode(" ", $alamat_split);
                                                                                                    if ($view_alamat[-1] == "," or $view_alamat[-1] == ".") {
                                                                                                        substr($view_alamat, 0, strlen($view_alamat) - 1);
                                                                                                    }
                                                                                                    echo $view_alamat
                                                                                                    ?></span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- END GALERI KOTA TEGAL -->

    <!-- SECTION EVENT KOTA TEGAL -->

    <div class="container mx-auto my-16 py-12 sm:px-24 px-[0.6rem]">
        <h2 class="font-heebo font-bold text-4xl text-center mb-8">Event Kota Tegal</h2>

        <div class="grid sm:grid-cols-3 grid-cols-2 gap-5">
            <div class="sm:col-span-3 col-span-2 h-64 flex rounded-lg group overflow-hidden relative">
                <h3 class="z-[11] m-auto text-white font-heebo sm:text-4xl text-2xl w-2/3 text-center">Ayoo !! Berkunjung ke
                    Kota Tegal</h3>
                <div class="bg-black absolute top-0 left-0 w-full h-full object-cover z-10 opacity-30"></div>
                <img class="absolute w-full h-full object-cover group-hover:scale-110 transition-all duration-1000" src="https://www.ancol.com/shared/file-manager/Event Banner/April 2023/f2c3839f-040c-48d0-b3fd-073dc4a6005d.jpg" alt="">
            </div>
            <div class="h-64 flex rounded-lg overflow-hidden relative group">
                <h3 class="z-[11] m-auto text-white font-heebo text-[1.7rem] w-2/3 text-center">Waterpark Bahari</h3>
                <div class="bg-black absolute top-0 left-0 w-full h-full object-cover z-10 opacity-30"></div>
                <img class="absolute w-full h-full object-cover group-hover:scale-110 transition-all duration-1000" src="https://www.ancol.com/shared/file-manager/Event Banner/April 2023/344dab9b-4ea3-4ff4-8355-26c8ad4be01b.jpg" alt="">
            </div>
            <div class="h-64 flex rounded-lg overflow-hidden relative group">
                <h3 class="z-[11] m-auto text-white font-heebo text-[1.7rem] w-2/3 text-center">Waterpark Bahari</h3>
                <div class="bg-black absolute top-0 left-0 w-full h-full object-cover z-10 opacity-30"></div>
                <img class="absolute w-full h-full object-cover group-hover:scale-110 transition-all duration-1000" src="https://www.ancol.com/shared/file-manager/Event Banner/April 2023/344dab9b-4ea3-4ff4-8355-26c8ad4be01b.jpg" alt="">
            </div>
            <div class="h-64 col-span-2 sm:col-span-1 flex rounded-lg overflow-hidden relative group">
                <h3 class="z-[11] m-auto text-white font-heebo text-[1.7rem] w-2/3 text-center">Waterpark Bahari</h3>
                <div class="bg-black absolute top-0 left-0 w-full h-full object-cover z-10 opacity-30"></div>
                <img class="absolute w-full h-full object-cover group-hover:scale-110 transition-all duration-1000" src="https://www.ancol.com/shared/file-manager/Event Banner/April 2023/344dab9b-4ea3-4ff4-8355-26c8ad4be01b.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- END SECTION EVENT KOTA TEGAL -->


    <footer class="bg-[#6096B4] rounded-t-lg shadow dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Khaeril Anwar</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Kelompok 3™</a>. All Rights Reserved.</span>
        </div>
    </footer>



    <script>
        const dropdown = document.querySelector('.dropdown');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdown.addEventListener('click', function() {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>