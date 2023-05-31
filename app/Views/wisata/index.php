<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto w-1/2 mt-10">

    <form action="" method="get">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input name="s" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari tempat rekreasi..." required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
        </div>
    </form>

</div>


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
                    <h3 class="font-heebo text-xl font-semibold py-2 text-center dark:text-white"><?= $data['nama']; ?></h3>
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