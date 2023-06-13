<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<section class="bg-white dark:bg-gray-900 mb-20 mt-5">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <div class="overflow-hidden aspect-[4/3] rounded-lg shadow-lg">
            <img class="w-full h-full object-cover" src="/assets/img/<?= $wisata['gambar']; ?>" alt="<?= $wisata['nama']; ?>">
        </div>
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"><?= $wisata['nama']; ?>, <?= $wisata['lokasi']; ?></h2>
            <p class="mb-6 font-normal text-gray-700 md:text-lg dark:text-gray-400 text-justify"><?= preg_replace('/\s\s+/', '<br/>', $wisata['deskripsi']) ?></p>
            <p class="font-medium mb-3 text-lg dark:text-white">Harga Tiket Rp. <?= number_format($wisata['harga'], 0, '', '.') ?></p>
            <a href="/wisata/pesantiket/<?= $wisata['id']; ?>" class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-900">
                Pesan Tiket
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<div class="container mx-auto flex flex-col justify-center">
    <h2 class="font-heebo font-bold text-4xl text-center dark:text-white">Kunjungi Maps <?= $wisata['nama']; ?></h2>
    <?= htmlspecialchars_decode($wisata['maps']); ?>
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



<?php $this->endSection(); ?>