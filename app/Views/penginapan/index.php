<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto mt-10">

    <form class="sm:w-1/2 mx-auto w-5/6" action="" method="get">
        <div class="flex">
            <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
            <button id="search-tipe" data-dropdown-toggle="dropdown-kategori" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button"><?= $kategoriGet ? $kategoriGet : "All categories"; ?> <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg></button>
            <div id="dropdown-kategori" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All categories</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hotel</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Villa</button>
                    </li>
                </ul>
            </div>
            <input type="hidden" name="t" id="input-kategori">
            <div class="relative w-full">
                <input type="search" id="search-dropdown" name="s" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Cari penginapan dan hotel...">
                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>


</div>


<div class="container mx-auto sm:px-20 px-5">
    <h2 class="font-heebo font-bold text-2xl md:px-3 md:text-4xl text-center my-12 dark:text-white">Penginapan dan Hotel
    </h2>

    <div class="flex justify-center sm:gap-16 flex-wrap">
        <?php $i = 1 + (6 * ($currentPage - 1)); ?>
        <?php foreach ($penginapan as $data) : ?>
            <div class="rounded-lg shadow-md p-3 mb-4">
                <a href="/penginapan/detail/<?= $data['id']; ?>" class="mb-5 block rounded-full w-80 h-80 relative overflow-hidden border-x-4 border-red-500 group">
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
<?= $pager->links('penginapan', 'pagination'); ?>

<!-- END ALBUM -->

<?php $this->endSection(); ?>