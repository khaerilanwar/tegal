<div class="container-fluid p-0 fixed-top">
    <header class="bg-biru d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 border-bottom">
        <a href="/" class="d-flex align-items-center col-sm-3 justify-content-center mb-3 mb-md-0 me-md-auto text-decoration-none">
            <img src="/assets/img/brand-tegal.png" class="bi me-2" height="55" alt="Brand Tegal">
        </a>

        <ul class="nav nav-pills col-sm-6 d-flex justify-content-center">
            <li class="nav-item"><a href="/home" class="nav-link fs-5 text-white <?= preg_match('/Home/', $title) ? 'active' : ''; ?>">Home</a></li>
            <li class="nav-item"><a href="/wisata" class="nav-link fs-5 text-white <?= preg_match('/Pariwisata/', $title) ? 'active' : ''; ?>">Pariwisata</a></li>
            <li class="nav-item"><a href="/kuliner" class="nav-link fs-5 text-white <?= preg_match('/Kuliner/', $title) ? 'active' : ''; ?>">Kuliner</a></li>
            <li class="nav-item"><a href="/penginapan" class="nav-link fs-5 text-white <?= preg_match('/Penginapan/', $title) ? 'active' : ''; ?>">Penginapan</a></li>
        </ul>

        <?php if (session()->email == false) : ?>

            <div class="col-sm-3 d-flex justify-content-center">
                <a href="/login" class="btn fs-5 btn-outline-light me-2">Login</a>
                <a href="/registrasi" class="btn fs-5 btn-primary">Sign-up</a>
            </div>

        <?php else : ?>

            <div class="col-sm-3">
                <div class="btn-group float-end me-3 dropdown">
                    <button class="btn border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="d-inline rounded-circle" src="/assets/img/<?= $user['gambar']; ?>" width="45" height="45" alt="<?= $user['nama']; ?>">
                        <span class="d-inline text-white ps-2"><?= $user['nama']; ?></span>
                        <!-- <i class="fa-solid fa-circle-chevron-down ms-2 text-white fs-5"></i> -->
                        <i class="fa-solid fa-caret-down ms-2 text-white fs-6"></i>
                    </button>

                    <ul class="dropdown-menu">
                        <li>

                            <table class="mx-3">
                                <tr>
                                    <td rowspan="2">
                                        <img src="/assets/img/<?= $user['gambar']; ?>" alt="<?= $user['nama']; ?>" class="me-3 rounded-circle" width="45">
                                    </td>
                                    <td class="fw-bold"><?= $user['nama']; ?></td>
                                </tr>
                                <tr>
                                    <td><?= $user['email']; ?></td>
                                </tr>
                            </table>
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