<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>


<section class="bg-white dark:bg-gray-900 mb-20 mt-5">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <div class="overflow-hidden aspect-[4/3] rounded-lg shadow-lg">
            <img class="w-full h-full object-cover" src="/assets/img/<?= $penginapan['gambar']; ?>" alt="<?= $penginapan['nama']; ?>">
        </div>
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"><?= $penginapan['nama']; ?></h2>
            <p class="mb-6 font-normal text-gray-700 md:text-lg text-justify dark:text-gray-400"><?= preg_replace('/\s\s+/', '<br/>', $penginapan['deskripsi']) ?></p>
            <p class="font-medium mb-3 text-lg dark:text-white">Harga Permalam Rp. <?= number_format($penginapan['harga'], 0, '', '.') ?></p>
            <button id="ModalPenginapanButton" type="button" data-modal-toggle="ModalPenginapan" class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-900">
                Booking
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</section>

<div class="container mx-auto flex flex-col justify-center">
    <h2 class="font-heebo font-bold text-4xl text-center dark:text-white">Kunjungi Maps <?= $penginapan['nama']; ?></h2>
    <?= htmlspecialchars_decode($penginapan['maps']); ?>
</div>

<!-- Main modal -->
<div id="ModalPenginapan" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Pesan Penginapan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="ModalPenginapan">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="/penginapan/booking" method="post">
                <input type="hidden" name="id_produk" value="<?= $penginapan['id']; ?>">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <h3 class="dark:text-white font-semibold text-center text-xl sm:col-span-2">Pesan <?= $penginapan['nama']; ?></h3>
                    <div class="sm:col-span-2">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap">
                    </div>
                    <div>
                        <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Tamu</label>
                        <div class="mr-6 rounded-md border dark:border-gray-600 border-gray-300 dark:bg-gray-700 dark:text-white flex">
                            <button type="button" id="kurangPesan" class="flex px-3 hover:bg-gray-300 dark:hover:text-black rounded-md"><i class="fa-solid m-auto fa-minus"></i></button>
                            <!-- <input id="quantity" type="number" class="w-full font-heebo border-0 dark:bg-gray-700 rounded-md align-middle text-center font-medium" max="20" value="1" min="1" name="quantity"> -->
                            <input type="number" id="quantity" max="20" value="1" min="1" name="quantity" class="bg-gray-50 text-gray-900 text-center rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <button type="button" id="tambahPesan" class="flex px-3 hover:bg-gray-300 dark:hover:text-black rounded-md"><i class="fa-solid m-auto fa-plus"></i></button>
                        </div>
                    </div>
                    <div>
                        <label for="tanggal_datang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Kedatangan</label>
                        <input type="date" name="tanggal_datang" id="tanggal_datang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Booking Sekarang
                </button>
            </form>
        </div>
    </div>
</div>


<?php $this->endSection(); ?>