<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<section class="bg-white h-screen dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
        <div class="flex mb-12 justify-center gap-5">
            <img src="/assets/img/gateng.png" class="dark:hidden h-20" alt="">
            <img src="/assets/img/jateng dark.png" class="hidden dark:block h-20" alt="">
            <h3 class="md:text-6xl tracking-[.15em] dark:text-white my-auto font-pacifico">Tecation</h3>
        </div>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Jadilah Bagian dari Mitra Tecation!</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Anda belum terdaftar menjadi mitra kami. <a href="/mitra/daftar" class="text-blue-500">Gabung</a> jadi mitra Tecation.</p>
    </div>
</section>

<?php $this->endSection(); ?>