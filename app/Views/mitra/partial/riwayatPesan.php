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
                            <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                <?= $data['nama_kuliner']; ?>
                            </p>
                            <p class="text-lg text-gray-500 truncate dark:text-gray-400">
                                Pesanan Selesai
                            </p>
                        </div>
                        <div class="inline-flex items-center text-lg font-semibold text-gray-900 dark:text-white">
                            Rp. <?= number_format($data['harga_total'], 0, '', '.') ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div id="topUpSaldo" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="topUpSaldo">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Unggah Bukti Pembayaran</h3>
                <form class="space-y-6" action="/mitra/top-up" enctype="multipart/form-data" method="post">

                    <div>
                        <label for="nominal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal Top Up</label>
                        <select id="nominal" name="nominal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="50000">Rp. 50.000</option>
                            <option value="100000">Rp. 100.000</option>
                            <option value="150000">Rp. 150.000</option>
                            <option value="200000">Rp. 200.000</option>
                            <option value="250000">Rp. 250.000</option>
                            <option value="300000">Rp. 300.000</option>
                            <option value="350000">Rp. 350.000</option>
                            <option value="400000">Rp. 400.000</option>
                            <option value="450000">Rp. 450.000</option>
                            <option value="500000">Rp. 500.000</option>
                        </select>
                    </div>

                    <div>
                        <label for="metode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode Pembayaran</label>
                        <select id="metode" name="metode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="Dana">Dana</option>
                            <option value="ShopeePay">ShopeePay</option>
                            <option value="Bank BRI">Bank BRI</option>
                            <option value="Bank BCA">Bank BCA</option>
                        </select>
                    </div>

                    <div>
                        <label for="gambarTopUp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unggah bukti</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="gambarTopUp" name="bukti" type="file" onchange="previewImgTopUp()">
                    </div>
                    <img class="img-preview-TopUp mx-auto max-h-80" alt="">
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Unggah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>