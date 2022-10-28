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

        <!-- <div class="col-sm-3 d-flex justify-content-center">
            <a href="login" class="btn fs-5 btn-outline-light me-2">Login</a>
            <a href="registrasi" class="btn fs-5 btn-primary">Sign-up</a>
        </div> -->

        <div class="col-sm-3">
            <div class="btn-group float-end pe-3">
                <button type="button" class="btn" style="border: 0;" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    <img class="d-inline rounded-circle" src="/assets/img/<?= $user['gambar']; ?>" width="45" height="45" alt="<?= $user['nama']; ?>">
                    <span class="d-inline text-white ps-2"><?= $user['nama']; ?></span>
                    <i class="fa-solid fa-circle-chevron-down ps-2 text-white fs-5"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="#" type="button"><i class="fa-solid fa-user"></i>Profil Saya</a></li>
                    <li><a class="dropdown-item" href="#" type="button"><i class="fa-solid fa-rectangle-ad"></i>Pasang Iklan</a></li>
                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul>
            </div>
        </div>

        <!-- <div class="col-sm-3">
            <div>
                <img src="/assets/img/anwar.jpeg" alt="Khaeril Anwar">
            </div>
            <div>
                <h5>Muhammad Khaeril Anwar</h5>
            </div>
        </div> -->
    </header>
</div>
<div class="mt-5 pt-4"></div>