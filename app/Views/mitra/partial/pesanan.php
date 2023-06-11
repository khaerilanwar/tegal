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
                    <a href="/mitra/pesanan" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Pesanan</a>
                </li>
                <li class="mr-2">
                    <a href="/mitra/riwayat-pesanan" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Riwayat Pemesanan</a>
                </li>
            </ul>
        </div>

        <ul class="mt-4 divide-y divide-gray-200 dark:divide-gray-700">
            <?php foreach ($pesanan as $data) : ?>
                <li class="pb-3 sm:pb-4 cursor-pointer">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-24 h-24 object-cover rounded-full" src="/assets/img/<?= $data['gambar']; ?>" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-base font-medium text-gray-900 truncate dark:text-white">
                                <?= $data['nama_kuliner']; ?>
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                <table>
                                    <tr>
                                        <td class="dark:text-white pr-5">Customer</td>
                                        <td class="dark:text-white">: <?= $data['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="dark:text-white">Kuantitas</td>
                                        <td class="dark:text-white">: <?= $data['jumlah']; ?> Porsi</td>
                                    </tr>
                                    <tr>
                                        <td class="text-lg font-medium dark:text-white">Total</td>
                                        <td class="text-lg font-medium dark:text-white">: Rp. <?= number_format($data['harga_total'], 0, '', '.') ?></td>
                                    </tr>
                                </table>
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            <form action="/mitra/update-status/<?= $data['id_pesan']; ?>" method="post">
                                <button type="submit" class="<?= ($data['status'] == '1') ? 'pointer-events-none opacity-50 cursor-not-allowed' : '' ?> px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><?= ($data['status'] == '0') ? 'Kirim Pesanan' : 'Menunggu Konfirmasi'; ?></button>
                            </form>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php $this->endSection(); ?>