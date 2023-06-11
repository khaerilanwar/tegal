<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<?= $this->include('mitra/index'); ?>

<div class="container mx-auto mb-10">

    <div class="w-4/5 mx-auto">
        <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
            <ul class="flex justify-around flex-wrap -mb-px">
                <li class="mr-2">
                    <a href="/mitra" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Produk</a>
                </li>
                <li class="mr-2">
                    <a href="/mitra/pesanan" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Pesanan</a>
                </li>
                <li class="mr-2">
                    <a href="/mitra/riwayat-pesanan" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Riwayat Pemesanan</a>
                </li>
            </ul>
        </div>


        <ul class="divide-y mt-5 divide-gray-200 dark:divide-gray-700">
            <?php foreach ($riwayatPesanan as $data) : ?>
                <li class="pb-3 sm:pb-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="/assets/img/<?= $data['gambar']; ?>" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                <?= $data['nama_kuliner']; ?>
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                Pesanan Selesai
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp. <?= number_format($data['harga_total'], 0, '', '.') ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php $this->endSection(); ?>