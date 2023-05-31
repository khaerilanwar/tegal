<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto mt-8 mb-16">
    <div class="flex justify-center gap-5">
        <img src="/assets/img/gateng.png" class="dark:hidden h-20" alt="">
        <img src="/assets/img/jateng dark.png" class="hidden dark:block h-20" alt="">
        <h3 class="md:text-6xl tracking-[.15em] dark:text-white my-auto font-pacifico">Tecation</h3>
    </div>
</div>

<div class="container mx-auto mb-10">

    <div class="w-4/5 mx-auto">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only"></label>
            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Pesanan Saya</option>
                <option>Riwayat Pesanan</option>
            </select>
        </div>
        <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
            <li class="w-full">
                <a href="/pesanan" class="inline-block w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">Pesanan Saya</a>
            </li>
            <li class="w-full">
                <a href="/pesanan/riwayat" class="inline-block w-full p-4 bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Riwayat Pesanan</a>
            </li>
            </li>
        </ul>


        <ul class="mt-4 divide-y divide-gray-200 dark:divide-gray-700">
            <?php foreach ($pesanan as $data) : ?>
                <li class="pb-3 sm:pb-4">
                    <a href="/pesanan/detail/<?= $data['no_pesanan']; ?>">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="/assets/img/<?= $data['gambar']; ?>" alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    <?= $data['nama']; ?>
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    <?php
                                        if ($data['status'] == '0') {
                                            echo 'Pesanan menunggu pembayaran';
                                        } elseif ($data['status'] == '1') {
                                            echo 'Pesanan sedang dikemas oleh penjual';
                                        } elseif ($data['status'] == '2') {
                                            echo 'Pesanan sedang dikirim kurir';
                                        }
                                        ?>
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                Rp. <?= number_format($data['harga_total'], 0, '', '.') ?>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>

</div>

<?php $this->endSection(); ?>