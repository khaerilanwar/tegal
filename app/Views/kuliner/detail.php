<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>
<section class="bg-white dark:bg-gray-900 mb-20 mt-5">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <div class="overflow-hidden aspect-[4/3] rounded-lg shadow-lg">
            <img class="w-full h-full object-cover" src="/assets/img/<?= $kuliner['gambar']; ?>" alt="<?= $kuliner['nama']; ?>">
        </div>
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"><?= $kuliner['nama']; ?></h2>
            <p class="mb-6 font-normal text-gray-700 md:text-lg text-justify dark:text-gray-400"><?= preg_replace('/\s\s+/', '<br/>', $kuliner['deskripsi']) ?></p>
            <p class="font-medium mb-3 text-lg dark:text-white">Harga Kuliner Rp. <?= number_format($kuliner['harga'], 0, '', '.') ?></p>

            <!-- <input type="number" class="w-12 text-center" value="1" min="1" name="quantity"> -->

            <div class="inline-block mr-6 bg-gray-200 rounded-md dark:bg-gray-700 dark:text-white">
                <button id="kurangPesan" class="w-10 h-10 text-xl align-middle hover:bg-gray-300 dark:hover:text-black rounded-md"><i class="fa-solid fa-minus"></i></button>
                <input id="quantity" type="number" class="w-12 h-10 font-heebo border-0 dark:bg-gray-700 rounded-md text-xl align-middle text-center font-medium" max="20" value="1" min="1" name="quantity">
                <button id="tambahPesan" class="w-10 h-10 text-xl align-middle hover:bg-gray-300 dark:hover:text-black rounded-md"><i class="fa-solid fa-plus"></i></button>
            </div>

            <button <?= !session()->email ? 'data-popover-target="popover-default"' : 'data-modal-toggle="readProductModal"'; ?> type="button" id="readProductButton" class="<?= !session()->email ? 'opacity-50' : '' ?> inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-900">
                Pesan
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>

            <div data-popover id="popover-default" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                <div class="flex p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        Silakan login untuk memesan!
                    </div>
                </div>
                <div data-popper-arrow></div>
            </div>


        </div>
    </div>
</section>

<div class="container mx-auto flex flex-col justify-center">
    <h2 class="font-heebo font-bold text-4xl text-center dark:text-white">Kunjungi Maps <?= $kuliner['nama']; ?></h2>
    <?= htmlspecialchars_decode($kuliner['maps']); ?>
</div>

<!-- ULASAN -->

<div class="container mx-auto px-36 my-12">
    <div class="flex items-center mb-3">

        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i <= intval($rating_global['rate_mean'])) : ?>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Fourth star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
            <?php else : ?>
                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Fifth star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
            <?php endif; ?>
        <?php endfor; ?>

        <p class="ml-2 text-sm font-medium text-gray-900 dark:text-white"><?= number_format(floatval($rating_global['rate_mean']), 2); ?> out of 5</p>
    </div>
    <p class="text-sm font-medium text-gray-500 dark:text-gray-400"><?= count($rating); ?> global ratings</p>

    <?php foreach ($rating as $review) : ?>
        <!-- REVIEW USERS -->
        <article class="mt-10 w-2/3">
            <div class="flex items-center mb-4 space-x-4">
                <img class="w-10 h-10 rounded-full" src="/assets/img/<?= $review['gambar']; ?>" alt="">
                <div class="space-y-1 font-medium dark:text-white">
                    <p class="text-2xl"><?= $review['nama']; ?></p>
                </div>
            </div>
            <div class="flex items-center mb-1">

                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <?php if ($i <= $review['rate']) : ?>
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fourth star</title>
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    <?php else : ?>
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fifth star</title>
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    <?php endif; ?>
                <?php endfor; ?>

            </div>
            <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400">
                <p>Reviewed on <time datetime="2017-03-03 19:00">
                        <?php
                            $date = $review['tanggal']; // Tanggal yang ingin diubah formatnya


                            // $date = $review['tanggal']; // Tanggal yang ingin diubah formatnya
                            // setlocale(LC_TIME, 'id_ID');
                            // $newDate = strftime('%d %B %Y', strtotime($date));
                            // $newDate = date('d F Y ', strtotime($date));
                            $timestamp = strtotime($date);
                            $newDate = date('d F Y', $timestamp);

                            echo $newDate; // Output: 18 May 2023

                            ?>
                    </time></p>
            </footer>
            <p class="mb-2 text-gray-500 dark:text-gray-400 text-justify"><?= $review['review']; ?></p>
        </article>
    <?php endforeach; ?>

</div>



<!-- MODAL PESAN KULINER -->

<!-- Main modal -->
<div id="readProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                    <h3 class="font-semibold ">
                        Pesan <?= $kuliner['nama']; ?>
                    </h3>
                </div>
                <div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="readProductModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
            </div>

            <!-- ALERT SALDO KURANG -->
            <input type="hidden" name="saldoUser" value="<?= session()->email ? $user['saldo'] : '0' ?>">
            <div id="saldoKurang" class=" hidden p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    Saldo TecationPay anda tidak cukup!
                </div>
            </div>
            <!-- END ALERT SALDO KURANG -->

            <dl>
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Details</dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">

                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-sm dark:text-gray-400">Nama Kuliner</dt>
                            <dd class="text-sm font-semibold"><?= $kuliner['nama']; ?></dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-sm dark:text-gray-400">Jumlah Pesan</dt>
                            <dd class="text-sm font-semibold">
                                <span class="kuantitas-pesan">1</span>
                                <i class="fa-solid fa-xmark"></i>
                                <span class="harga-kuliner"> Rp. <?= number_format($kuliner['harga'], 0, '', '.') ?></span>
                            </dd>
                        </div>
                        <div class="flex flex-col pt-3">
                            <dt class="mb-1 text-gray-500 md:text-sm dark:text-gray-400">Total Harga</dt>
                            <dd class="text-sm font-semibold total-harga-kuliner">Rp. <?= number_format($kuliner['harga'], 0, '', '.') ?></dd>
                        </div>
                    </dl>

                </dd>
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Kategori</dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400"><?= $kuliner['jenis_kuliner']; ?></dd>
            </dl>
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3 sm:space-x-4">
                    <form action="/kuliner/pesanKuliner" method="post">
                        <input type="hidden" name="jumlah" value="1">
                        <input type="hidden" name="idProduk" value="<?= $kuliner['id']; ?>">
                        <input type="hidden" name="hargaProduk" value="<?= $kuliner['harga']; ?>">
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 tombolPesan">
                            Pesan
                        </button>
                    </form>
                    <button data-modal-toggle="readProductModal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL PESAN KULINER -->


<?php $this->endSection(); ?>