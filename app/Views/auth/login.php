<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/assets/img/ikon-tegal.ico" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- LOGIN CSS CUSTOM -->
    <link rel="stylesheet" href="/assets/css/login.css">
</head>

<body>
    <div class="container">
        <div class="loginBox">
            <img class="img-user" src="/assets/img/user.png" height="100px" width="100px">
            <h3>Selamat Datang</h3>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-cs py-2 alert-<?= session()->getFlashdata('warna'); ?> alert-dismissible fade show" id="pesan" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close pb-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <form action="/login/masuk" method="post">
                <?= csrf_field(); ?>
                <div class="inputBox mb-4">
                    <input id="email" class="<?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" value="<?= old('email'); ?>" type="text" name="email" placeholder="Masukkan Email">
                    <div class="pl-3 invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
                <div class="inputBox mb-4">
                    <input class="<?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" value="<?= old('password'); ?>" type="password" name="password" placeholder="Kata Sandi">
                    <div class="pl-3 invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                </div>
                <button type="submit" class="mb-3">Login</button>
            </form>
            <a href="#">Lupa Kata Sandi<br> </a>
            <div class="mt-2 text-center">
                <a href="registrasi" class="fs-6" style="color: #59238F;">Belum punya akun? Daftar</a>
            </div>
        </div>
    </div>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>