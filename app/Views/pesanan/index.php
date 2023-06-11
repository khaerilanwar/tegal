<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto mt-8 mb-16">
    <div class="flex justify-center gap-5">
        <img src="/assets/img/gateng.png" class="dark:hidden h-20" alt="">
        <img src="/assets/img/jateng dark.png" class="hidden dark:block h-20" alt="">
        <h3 class="md:text-6xl tracking-[.15em] dark:text-white my-auto font-pacifico">Tecation</h3>
    </div>
</div>

<div class="container mx-auto">
    <h4 class="font-heebo text-center dark:text-white text-xl mb-2">TecationPay</h4>
    <h2 class="font-heebo text-center dark:text-white text-4xl font-black mb-6">Rp. <?= number_format($user['saldo'], 0, '', '.') ?></h2>
</div>

<div class="container mx-auto mb-10">

    <div class="w-4/5 mx-auto">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only"></label>
            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Pesanan Saya</option>
                <option>Riwayat Pesanan</option>
            </select>
        </div>
        <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
            <li class="w-full">
                <a href="/pesanan" class="inline-block w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">Pesanan Saya</a>
            </li>
            <li class="w-full">
                <a href="/pesanan/riwayat" class="inline-block w-full p-4 bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Riwayat Pesanan</a>
            </li>
            </li>
        </ul>


        <ul class="mt-4 divide-y divide-gray-200 dark:divide-gray-700">
            <?php foreach ($pesanan as $data) : ?>

                <li class="pb-3 sm:pb-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-24 h-24 object-cover rounded-full" src="/assets/img/<?= $data['gambar']; ?>" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-base font-medium text-gray-900 truncate dark:text-white">
                                <?= $data['nama']; ?>
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                <table>
                                    <tr>
                                        <td class="dark:text-white pr-4">Jumlah</td>
                                        <td class="dark:text-white">: <?= $data['jumlah']; ?> x Rp. <?= number_format($data['harga'], 0, '', '.') ?></td>
                                    </tr>
                                    <tr>
                                        <td class="dark:text-white">Status</td>
                                        <td class="dark:text-white">: <?php
                                                                            if ($data['jenis_pesan'] == 'wisata') {
                                                                                if ($data['status'] == '0') {
                                                                                    echo 'Pesanan menunggu pembayaran';
                                                                                } elseif ($data['status'] == '1') {
                                                                                    echo 'Menunggu konfirmasi pembayaran';
                                                                                } elseif ($data['status'] == '2') {
                                                                                    echo 'Pemesanan tiket selesai';
                                                                                }
                                                                            } elseif ($data['jenis_pesan'] == 'kuliner') {
                                                                                if ($data['status'] == '0') {
                                                                                    echo 'Pesanan sedang dikemas penjual';
                                                                                } elseif ($data['status'] == '1') {
                                                                                    echo 'Pesanan sedang dikirim oleh penjual';
                                                                                }
                                                                            }
                                                                            ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-lg font-medium pt-2 dark:text-white">Total</td>
                                        <td class="text-lg font-medium pt-2 dark:text-white">: Rp. <?= number_format($data['harga_total'], 0, '', '.') ?></td>
                                    </tr>
                                </table>
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            <?php if ($data['jenis_pesan'] == 'kuliner') : ?>
                                <form action="/mitra/update-status/<?= $data['id_pesan']; ?>" method="post">
                                    <button type="submit" class="<?= ($data['status'] != '1') ? 'pointer-events-none opacity-50 cursor-not-allowed' : '' ?> px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pesanan Diterima</button>
                                </form>
                            <?php else : ?>
                                <button type="button" <?php if ($data['status'] == '0') {
                                                                    echo 'data-modal-target="uploadBuktiWisata" data-modal-toggle="uploadBuktiWisata"';
                                                                } elseif ($data['status'] == '2') {
                                                                    echo 'data-modal-target="small-modal" data-modal-toggle="small-modal"';
                                                                } ?> class="<?= ($data['status'] == '1') ? 'pointer-events-none opacity-50 cursor-not-allowed' : '' ?> px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><?php if ($data['status'] == '0') {
                                                                                                                                                                                                                                                                                                                                                                                                        echo 'Upload bukti';
                                                                                                                                                                                                                                                                                                                                                                                                    } elseif ($data['status'] == '1') {
                                                                                                                                                                                                                                                                                                                                                                                                        echo 'Menunggu konfirmasi';
                                                                                                                                                                                                                                                                                                                                                                                                    } elseif ($data['status'] == '2') {
                                                                                                                                                                                                                                                                                                                                                                                                        echo 'Lihat tiket';
                                                                                                                                                                                                                                                                                                                                                                                                    } ?></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>

</div>

<?php foreach ($pesanan as $data) : ?>
    <?php if ($data['status'] == '2') : ?>
        <!-- Small Modal -->
        <div id="small-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                            E-Ticket Wisata
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="small-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">

                        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 text-center dark:text-gray-400"><?= $data['nama']; ?></h5>
                            <img src="/assets/img/<?= $data['gambar']; ?>" class="w-24 h-24 mx-auto" alt="">
                            <!-- List -->
                            <ul role="list" class="space-y-5 my-7">
                                <li class="flex space-x-3">
                                    <!-- Icon -->
                                    <i class="fa-solid fa-check-double text-green-500"></i>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Tiket <?= $data['jumlah']; ?> orang</span>
                                </li>
                                <li class="flex space-x-3">
                                    <!-- Icon -->
                                    <i class="fa-solid fa-check-double text-green-500"></i>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Tanggal Tiket <?= date('d F Y', strtotime($data['tanggal_datang'])); ?></span>
                                </li>
                                <li class="flex space-x-3">
                                    <!-- Icon -->
                                    <i class="fa-solid fa-check-double text-green-500"></i>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Harga Total <?= number_format($data['harga_total'], 0, '', '.') ?></span>
                                </li>
                            </ul>
                            <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Pakai tiket</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>



<?php foreach ($pesanan as $data) : ?>
    <?php if ($data['jenis_pesan'] == 'wisata') : ?>
        <!-- Main modal -->
        <div id="uploadBuktiWisata" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="uploadBuktiWisata">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Unggah Bukti Pembayaran</h3>
                        <form class="space-y-6" action="/pesanan/unggah-bukti/wisata" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="no_pesan" value="<?= $data['id_pesan']; ?>">
                            <div>
                                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unggah bukti</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="gambar" name="bukti" type="file" onchange="previewImg()">
                            </div>
                            <img class="img-preview mx-auto max-h-80" alt="">
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Unggah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>


<?php $this->endSection(); ?>