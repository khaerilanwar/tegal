<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- FAVICON TEGAL -->
    <link rel="shortcut icon" href="/assets/img/ikon-tegal.ico" type="image/x-icon">
</head>

<body>
    <h1>Halaman Pembayaran</h1>
    <table>
        <tr>
            <td style="padding-right: 6em;">No. Pesanan</td>
            <td><?= $bayar['no_pesanan']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Pesan</td>
            <td><?= $bayar['tanggal_pesan']; ?></td>
        </tr>
        <tr>
            <td>Email Customer</td>
            <td><?= $bayar['email_cust']; ?></td>
        </tr>
        <tr>
            <td>Nama Wisata</td>
            <td><?= $bayar['nama_wisata']; ?></td>
        </tr>
        <tr>
            <td>Jumlah Tiket</td>
            <td><?= $bayar['jumlah_tiket']; ?></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td>Rp. <?= number_format($bayar['harga_total'], 0, '', '.') ?></td>
        </tr>
        <tr>
            <td>Bayar di</td>
            <td><?= $bayar['detail']; ?></td>
        </tr>
        <tr>
            <td>Metode</td>
            <td><?= $bayar['via']; ?></td>
        </tr>
    </table>
</body>

</html>