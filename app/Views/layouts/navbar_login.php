<div class="container-fluid p-0 fixed-top">
    <header class="bg-biru d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 border-bottom">
        <a href="/" class="d-flex align-items-center col-sm-3 justify-content-center mb-3 mb-md-0 me-md-auto text-decoration-none">
            <img src="/assets/img/brand-tegal.png" class="bi me-2" height="55" alt="Brand Tegal">
        </a>

        <ul class="nav nav-pills col-sm-6 d-flex justify-content-center">
            <li class="nav-item"><a href="/home" class="nav-link fs-5 text-white <?= preg_match('/Home/', $title) ? 'active' : ''; ?>">Home</a></li>
            <li class="nav-item"><a href="/wisata" class="nav-link fs-5 text-white <?= preg_match('/Pariwisata/', $title) ? 'active' : ''; ?>">Pariwisata</a></li>
            <li class="nav-item"><a href="/kuliner" class="nav-link fs-5 text-white <?= preg_match('/Puliner/', $title) ? 'active' : ''; ?>">Kuliner</a></li>
            <li class="nav-item"><a href="/penginapan" class="nav-link fs-5 text-white <?= preg_match('/Penginapan/', $title) ? 'active' : ''; ?>">Penginapan</a></li>
            <li class="nav-item"><a href="/jasa" class="nav-link fs-5 text-white <?= preg_match('/Jasa/', $title) ? 'active' : ''; ?>">Jasa</a></li>
        </ul>

        <?php if (session()->email == false) : ?>

            <div class="col-sm-3 d-flex justify-content-center">
                <a href="login" class="btn fs-5 btn-outline-light me-2">Login</a>
                <a href="registrasi" class="btn fs-5 btn-primary">Sign-up</a>
            </div>

        <?php else : ?>

            <div class="col-sm-3">
                <div class="btn-group float-end me-3">
                    <button type="button" class="btn" style="border: 0;" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <img class="d-inline rounded-circle" src="/assets/img/<?= $user['gambar']; ?>" width="45" height="45" alt="<?= $user['nama']; ?>">
                        <span class="d-inline text-white ps-2"><?= $user['nama']; ?></span>
                        <i class="fa-solid fa-circle-chevron-down ms-2 text-white fs-5"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end me-3" style="width: 100%;">
                        <li>
                            <div class="row">
                                <div class="col-3">
                                    <img src="/assets/img/<?= $user['gambar']; ?>" alt="" class="ms-2 mt-1" width="40">
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col">
                                            <h6><?= $user['nama']; ?></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <span><?= $user['email']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/profil">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="col-10">
                                        Profil Saya
                                    </div>
                                </div>
                            </a></li>

                        <li><a class="dropdown-item" href="/pasang-iklan">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-rectangle-ad"></i>
                                    </div>
                                    <div class="col-10">
                                        Pasang Iklan
                                    </div>
                                </div>
                            </a></li>
                        <li><a class="dropdown-item" href="/logout">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </div>
                                    <div class="col-10">
                                        Logout
                                    </div>
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>

        <?php endif; ?>
    </header>
</div>
<div class="mt-5 pt-4"></div>