<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto mt-8">
    <div class="flex justify-center gap-5">
        <img src="/assets/img/gateng.png" class="dark:hidden h-20" alt="">
        <img src="/assets/img/jateng dark.png" class="hidden dark:block h-20" alt="">
        <h3 class="md:text-6xl tracking-[.15em] dark:text-white my-auto font-pacifico">Tecation</h3>
    </div>
</div>

<div class="container mx-auto mt-16 mb-10">
    <h2 class="font-heebo text-2xl dark:text-white text-center">Pesan Tiket <?= $wisata['nama']; ?></h2>
    <div class="w-2/5 mx-auto mt-6">
        <form action="/wisata/pesan" method="post">
            <input type="hidden" name="harga" id="harga" onload="total()" value="<?= $wisata['harga']; ?>">
            <input type="hidden" name="id_produk" value="<?= $wisata['id']; ?>">
            <div class="mb-6">
                <label for="pemesan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemesan / Rombongan</label>
                <input type="text" name="customer" id="pemesan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Customer">
            </div>
            <div class="columns-2">
                <div class="mb-6">
                    <label for="tanggal-datang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Kedatangan</label>
                    <input type="date" name="tanggal_datang" id="tanggal-datang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="jumlah_tiket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Tiket</label>
                    <input onclick="total()" onkeyup="total()" value="1" type="number" min="1" name="jumlah_tiket" id="jumlah_tiket" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jumlah Tiket">
                </div>
            </div>

            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Metode Pembayaran</label>
            <select id="countries" name="payment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected disabled>Pilih pembayaran</option>
                <option value="1">Dana</option>
                <option value="2">ShopeePay</option>
                <option value="3">Bank BRI</option>
                <option value="4">Bank BCA</option>
            </select>

            <div class="my-6">
                <label for="harga_total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total</label>
                <input type="text" name="harga_total" id="harga_total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
            </div>

            <div class="columns-2">
                <a href="/wisata" class="w-full block text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Kembali</a>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pesan Tiket</button>
            </div>

        </form>
    </div>
</div>

<?php $this->endSection(); ?>