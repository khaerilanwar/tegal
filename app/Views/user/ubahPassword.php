<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto my-7">
    <h2 class="font-medium text-4xl font-heebo text-center dark:text-white">Ubah Kata Sandi</h2>

    <form action="/profil/ubahPass" class="w-1/2 mx-auto" method="post">
        <div class="mb-6">
            <label for="currentPassword" class="block mb-2 font-medium text-gray-900 dark:text-white">Kata sandi saat ini</label>
            <input type="password" name="currentPassword" id="currentPassword" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="newPassword" class="block mb-2 font-medium text-gray-900 dark:text-white">Kata sandi baru</label>
            <input type="password" name="newPassword" id="newPassword" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="renewPassword" class="block mb-2 font-medium text-gray-900 dark:text-white">Konfirmasi kata sandi</label>
            <input type="password" name="renewPassword" id="renewPassword" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-md px-5 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
    </form>
</div>

<?php $this->endSection(); ?>