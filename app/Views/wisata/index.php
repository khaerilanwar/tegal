<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>


<!-- Breadcrumb -->
<!-- <nav class="flex px-5 py-3 justify-center mt-10 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-md font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
                Home
            </a>
        </li>
        <li>
            <div class="flex items-center">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <a href="#" class="ml-1 text-md font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Templates</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-1 text-md font-medium text-gray-500 md:ml-2 dark:text-gray-400">Flowbite</span>
            </div>
        </li>
    </ol>
</nav> -->


<div class="container mx-auto sm:px-20 px-5">
    <h2 class="font-heebo font-bold text-2xl md:px-3 md:text-4xl text-center my-12 dark:text-white">Jelajah dan Rekreasi
    </h2>

    <div class="flex justify-center sm:gap-9 flex-wrap">
        <?php $i = 1 + (6 * ($currentPage - 1)); ?>
        <?php foreach ($wisata as $data) : ?>
            <div class="rounded-lg shadow-md p-3 mb-4">
                <a href="/wisata/detail/<?= $data['id']; ?>" class="mb-5 block rounded-full w-80 h-80 relative overflow-hidden border-x-4 border-red-500 group">
                    <img class="absolute h-full w-full object-cover group-hover:scale-125 transition-all duration-700" src="/assets/img/<?= $data['gambar']; ?>" alt="">
                </a>
                <div class="border-t-2 border-slate-700">
                    <h3 class="font-heebo text-xl font-semibold py-2 text-center dark:text-white"><?= $data['nama_wisata']; ?></h3>
                    <p class="text-center"><i class="fa-solid fa-location-dot dark:text-white"></i><span class="ml-2 dark:text-white"><?php
                                                                                                                                            $alamat = $data['alamat'];
                                                                                                                                            $alamat = explode(" ", $alamat);
                                                                                                                                            $alamat_split = [];
                                                                                                                                            for ($i = 0; $i < 4; $i++) {
                                                                                                                                                $alamat_split[] = $alamat[$i];
                                                                                                                                            }
                                                                                                                                            $view_alamat = implode(" ", $alamat_split);
                                                                                                                                            if ($view_alamat[-1] == "," or $view_alamat[-1] == ".") {
                                                                                                                                                substr($view_alamat, 0, strlen($view_alamat) - 1);
                                                                                                                                            }
                                                                                                                                            echo $view_alamat
                                                                                                                                            ?></span></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $pager->links('wisata', 'pagination'); ?>

<?php $this->endSection(); ?>