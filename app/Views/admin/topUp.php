<?php $this->extend('layouts/adm_template'); ?>

<?php $this->section('content'); ?>

<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container text-center">
        <img src="/assets/img/brand-tegal.png" alt="Kabupaten Tegal" width="80">
        <h2 class="display-4 my-3">Top Up TecationPay</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas mollitia tenetur quia recusandae suscipit illum adipisci quam! Voluptatem facere dicta voluptatibus quaerat voluptatum totam culpa tempora nesciunt autem dolor? Repudiandae?</p>
    </div>
</div>

<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-5 m-b-35">Daftar Top Up TecationPay</h1>
                <!-- <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <form action="" method="get">
                            <div class="rs-select2--light rs-select2--md">
                                Cari Berdasarkan
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="based">
                                    <option value="customer">Customer</option>
                                    <option value="id">No. Pesan</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--lg">
                                <div class="input-group ml-3">
                                    <input type="text" id="input1-group2" name="pesanan" placeholder="Cari Pesanan" class="form-control py-2">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary py-2">
                                            <i class="fa fa-search"></i> Cari
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->

                <div id="wisata" class="table-responsive table--no-card m-b-30" style="overflow: hidden;">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Tanggal Pesan</th>
                                <th>Nominal</th>
                                <th>Metode Bayar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($topUp as $p) : ?>
                                <tr>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['tanggal']; ?></td>
                                    <td>Rp. <?= number_format($p['nominal'], 0, '', '.'); ?></td>
                                    <td><?= $p['metode']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#buktiModal<?= $p['id']; ?>">
                                            Bukti
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php foreach ($topUp as $p) : ?>
    <!-- Modal -->
    <div class="modal fade" id="buktiModal<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="buktiModal<?= $p['id']; ?>Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buktiModal<?= $p['id']; ?>Label">TecationPay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center mb-3">Bukti Bayar</h4>
                    <img src="/assets/img/<?= $p['bukti']; ?>" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="/mitra/acc-saldo" method="post">
                        <input type="hidden" name="id" value="<?= $p['id']; ?>">
                        <button type="submit" class="btn btn-primary">Accept</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php $this->endSection(); ?>