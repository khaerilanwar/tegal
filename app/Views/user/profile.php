<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto my-7">
    <h2 class="font-heebo text-4xl font-medium dark:text-white text-center">Profil Pengguna</h2>

    <div class="flex flex-row w-3/4 mx-auto gap-20 mt-10">
        <div class="basis-1/4">
            <img class="rounded-full w-64 h-64 mx-auto object-cover" src="/assets/img/<?= $user['gambar']; ?>" alt="">
            <h4 class="dark:text-white text-center text-xl mt-3"><?= $user['nama']; ?></h4>
        </div>
        <div class="basis-3/4">
            <div class="mb-6">
                <label for="default-input" class="block mb-2 font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                <input type="text" id="default-input" value="<?= $user['nama']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
            </div>
            <div class="mb-6">
                <label for="default-input" class="block mb-2 font-medium text-gray-900 dark:text-white">E-mail</label>
                <input type="text" id="default-input" value="<?= $user['email']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
            </div>
            <div class="mb-6">
                <label for="default-input" class="block mb-2 font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                <input type="text" id="default-input" value="<?= $user['no_telp']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
            </div>

            <label for="message" class="block mb-2 font-medium text-gray-900 dark:text-white">Alamat</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."><?= $user['alamat']; ?></textarea>

            <div class="mt-6 flex justify-end">
                <a href="/profil/edit-profile" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit Profil</a>
                <a href="/profil/ubah-password" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-300 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Ubah Kata Sandi</a>
            </div>

        </div>
    </div>

</div>

<?php $this->endSection(); ?>