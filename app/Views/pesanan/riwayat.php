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
    <div class="flex justify-center items-center align-bottom">
        <h2 class="mt-7 font-heebo text-center dark:text-white text-4xl font-black mr-4 mb-6">Rp. <?= number_format($user['saldo'], 0, '', '.') ?></h2>
        <button data-modal-target="topUpSaldo" data-modal-toggle="topUpSaldo" type="button">
            <i class="m-0 text-4xl fa-regular dark:text-white fa-square-plus"></i>
        </button>
    </div>
</div>

<div class="container mx-auto mb-10 h-screen">

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
                <a href="/pesanan" class="inline-block w-full p-4 bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Pesanan Saya</a>
            </li>
            <li class="w-full">
                <a href="/pesanan/riwayat" class="inline-block w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">Riwayat Pesanan</a>
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
                                        <td class="dark:text-white">: Pesanan Selesai</td>
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
                                <button type="button" data-modal-toggle="ModalRating<?= $data['id_pesan']; ?>" class="<?= ($data['status'] == '3') ? 'pointer-events-none opacity-50 cursor-not-allowed' : '' ?> px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Nilai</button>
                            <?php elseif ($data['jenis_pesan'] == 'wisata') : ?>
                                <button type="button" data-modal-toggle="ModalRating<?= $data['id_pesan']; ?>" class="<?= ($data['status'] == '4') ? 'pointer-events-none opacity-50 cursor-not-allowed' : '' ?> px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Nilai</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>

</div>


<?php foreach ($pesanan as $data) : ?>
    <!-- Main modal -->
    <div id="ModalRating<?= $data['id_pesan']; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Review <?= $data['nama']; ?>
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="ModalRating<?= $data['id_pesan']; ?>">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="/pesanan/rating" method="post">
                    <input type="hidden" name="id_pesan" value="<?= $data['id_pesan']; ?>">
                    <input type="hidden" name="jenis_pesan" value="<?= $data['jenis_pesan']; ?>">
                    <input type="hidden" name="id_produk" value="<?= $data['id_produk']; ?>">
                    <div class="grid gap-2 mb-4 sm:grid-cols-2">
                        <span class="block sm:col-span-2 text-sm font-medium text-gray-900 dark:text-white">Rating</span>
                        <div id="ratingKuliner" class="ratingKuliner flex items-center mb-3">
                            <input class="hidden" type="radio" id="star1" name="rating" value="1" />
                            <label for="star1"><i class="cursor-pointer text-gray-500 text-xl mr-1 fa-solid fa-star"></i></label>
                            <input class="hidden" type="radio" id="star2" name="rating" value="2" />
                            <label for="star2"><i class="cursor-pointer text-gray-500 text-xl mr-1 fa-solid fa-star"></i></label>
                            <input class="hidden" type="radio" id="star3" name="rating" value="3" />
                            <label for="star3"><i class="cursor-pointer text-gray-500 text-xl mr-1 fa-solid fa-star"></i></label>
                            <input class="hidden" type="radio" id="star4" name="rating" value="4" />
                            <label for="star4"><i class="cursor-pointer text-gray-500 text-xl mr-1 fa-solid fa-star"></i></label>
                            <input class="hidden" type="radio" id="star5" name="rating" value="5" />
                            <label for="star5"><i class="cursor-pointer text-gray-500 text-xl fa-solid fa-star"></i></label>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ulasan</label>
                            <textarea id="description" name="review" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Ulas
                    </button>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

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
                    <input type="hidden" name="no_pesan" value="<?= $data['id_pesan']; ?>">

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