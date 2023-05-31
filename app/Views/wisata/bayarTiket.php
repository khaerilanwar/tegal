<?php $this->extend('layouts/temp'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto mt-8">
    <div class="flex justify-center gap-5">
        <img src="/assets/img/gateng.png" class="dark:hidden h-20" alt="">
        <img src="/assets/img/jateng dark.png" class="hidden dark:block h-20" alt="">
        <h3 class="md:text-6xl tracking-[.15em] dark:text-white my-auto font-pacifico">Tecation</h3>
    </div>
</div>

<div class="container mx-auto my-10">
    <div class="w-1/3 rounded-lg p-6 bg-slate-50 dark:bg-slate-400 shadow-xl mx-auto">
        <h4 class="font-medium font-heebo text-2xl text-center">Tagihan Tiket Wisata</h4>
        <h5 class="font-medium text-lg font-heebo text-center"><?= $bayar['no_pesanan']; ?></h5>

        <table class="mt-4">
            <tr>
                <td class="pr-4">Customer</td>
                <td class="">: <?= $bayar['customer']; ?></td>
            </tr>
            <tr>
                <td class="pr-4">Tempat Wisata</td>
                <td class="">: <?= $bayar['nama']; ?></td>
            </tr>
            <tr>
                <td class="pr-4">Tanggal Pesan</td>
                <td class="">: <?php
                                $pecah = explode('-', $bayar['tanggal_pesan']);

                                switch ($pecah[1]) {
                                    case '01':
                                        echo $pecah[2], ' Januari ', $pecah[0];
                                        break;
                                    case '02':
                                        echo $pecah[2], ' Februari ', $pecah[0];
                                        break;
                                    case '03':
                                        echo $pecah[2], ' Maret ', $pecah[0];
                                        break;
                                    case '04':
                                        echo $pecah[2], ' April ', $pecah[0];
                                        break;
                                    case '05':
                                        echo $pecah[2], ' Mei ', $pecah[0];
                                        break;

                                    case '06':
                                        echo $pecah[2], ' Juni ', $pecah[0];
                                        break;
                                    case '07':
                                        echo $pecah[2], ' Juli ', $pecah[0];
                                        break;
                                    case '08':
                                        echo $pecah[2], 'Agustus ', $pecah[0];
                                        break;
                                    case '09':
                                        echo $pecah[2], ' September ', $pecah[0];
                                        break;
                                    case '10':
                                        echo $pecah[2], ' Oktober', $pecah[0];
                                        break;
                                    case '11':
                                        echo $pecah[2], ' November ', $pecah[0];
                                        break;
                                    case '12':
                                        echo $pecah[2], ' Desember ', $pecah[0];
                                        break;
                                } ?></td>
            </tr>
        </table>

        <hr class="h-[2px] my-5 bg-gray-400 border-0 dark:bg-gray-700">

        <div class="flex">
            <p class="w-2/3">Jumlah Tiket</p>
            <p class="w-1/3 text-center"><?= $bayar['jumlah_tiket']; ?> x Rp. <?= number_format($bayar['harga'], 0, '', '.'); ?></p>
        </div>

        <hr class="h-[3px] my-5 bg-gray-400 border-0 dark:bg-gray-700">

        <div class="flex justify-end">
            <p class="font-semibold">Total : Rp. <?= number_format($bayar['harga_total'], 0, '', '.'); ?></p>
        </div>

        <hr class="h-[3px] my-5 bg-gray-400 border-0 dark:bg-gray-700">

        <div class="flex">
            <p class="w-2/3"><?= $bayar['via']; ?></p>
            <p class="w-1/3 text-center"><?= $bayar['detail']; ?></p>
        </div>

        <div class="mx-auto flex flex-col mt-14">
            <a href="/wisata/cetak-tagihan/<?= $bayar['no_pesanan']; ?>" class="text-blue-500 mx-auto" target="_blank">Cetak Tagihan</a>
            <p class="mx-auto text-center">Setelah melakukan pembayaran harap unggah bukti pembayarannya.</p>
        </div>

    </div>
</div>
<?php $this->endSection(); ?>