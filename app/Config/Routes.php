<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// $routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', function () {
    if (session()->email && \Config\Database::connect()->table('user')->getWhere(['email' => session()->email])->getRowArray()['role_id'] == 1) {
        return redirect()->to('/dashboard');
    } else {
        return redirect()->to('/home');
    }
});

// ROUTES AUTENTIFIKASI
// ROUTES LOGIN
$routes->get('/login', 'Auth\Login::index');
$routes->post('/login/masuk', 'Auth\Login::masuk');

// ROUTES LOGOUT
$routes->get('/logout', 'Auth\Logout::index');

// ROUTES REGISTRASI
$routes->get('/registrasi', 'Auth\Registrasi::index');
$routes->post('/registrasi/save', 'Auth\Registrasi::save');
$routes->get('/registrasi/verify', 'Auth\Registrasi::verify');

// ROUTES ADMIN
// ADMIN DASHBOARD
$routes->get('/dashboard', 'Admin\Dashboard::index');
$routes->post('/dashboard/tambahUser', 'Admin\Dashboard::tambahUser');
$routes->post('/dashboard/edit/(:num)', 'Admin\Dashboard::edit/$1');
$routes->delete('/dashboard/(:num)', 'Admin\Dashboard::hapus/$1');

// ADMIN PARIWISATA
$routes->get('/pariwisata', 'Admin\Pariwisata::index');
$routes->get('/pariwisata/pesanan-tiket', 'Admin\Pariwisata::pesananTiket');
$routes->post('/pariwisata/edit/(:num)', 'Admin\Pariwisata::edit/$1');
$routes->post('/pariwisata/tambahWisata', 'Admin\Pariwisata::tambahWisata');
$routes->delete('/pariwisata/(:num)/(:any)', 'Admin\Pariwisata::hapus/$1/$2');

// ADMIN  KULINER
$routes->get('/kuliner-tegal', 'Admin\Kuliner::index');
$routes->get('/kuliner-tegal/confirm', 'Admin\Kuliner::confirm');
$routes->put('/kuliner-tegal/apply/(:num)', 'Admin\Kuliner::apply/$1');
$routes->delete('/kuliner-tegal/(:num)/(:any)', 'Admin\Kuliner::hapus/$1/$2');

// ADMIN  PENGINAPAN
$routes->get('/penginapan-tegal', 'Admin\Penginapan::index');
$routes->get('/penginapan-tegal/confirm', 'Admin\Penginapan::confirm');
$routes->put('/penginapan-tegal/apply/(:num)', 'Admin\Penginapan::apply/$1');
$routes->delete('/penginapan-tegal/(:num)/(:any)', 'Admin\Penginapan::hapus/$1/$2');

// ROUTES USER
// ROUTES WISATA
$routes->get('/wisata', 'User\Wisata::index');
$routes->get('/wisata/pesantiket', 'User\Wisata::pesanTiket');
$routes->post('/wisata/pesan', 'User\Wisata::pesan');
$routes->get('/wisata/tagihan/(:num)', 'User\Wisata::tagihan/$1');
$routes->get('/wisata/cetak-tagihan/(:num)', 'User\Wisata::cetakTagihan/$1');
$routes->get('/wisata/detail/(:any)', 'User\Wisata::detail/$1');

// ROUTES USER
// ROUTES HOME
$routes->get('/home', 'User\Home::index', ['as' => 'home']);

// PROFIL USER
$routes->get('/profil', 'User\Profile::index');
$routes->get('/profil/edit-profile', 'User\Profile::editProfile');
$routes->get('/profil/ubah-password', 'User\Profile::ubahPassword');
$routes->post('/profil/ubahPass', 'User\Profile::ubahKatasandi');
$routes->post('/profil/edit/(:num)', 'User\Profile::edit/$1');

// USER IKLAN
$routes->get('/pasang-iklan', 'User\Iklan::index');
$routes->post('/pasang-iklan/update/(:num)', 'User\Iklan::update/$1');

//ROUTES KULINER
$routes->get('/kuliner', 'User\Kuliner::index');
$routes->post('/kuliner/addKuliner', 'User\Kuliner::addKuliner');
$routes->get('/kuliner/detail/(:any)', 'User\Kuliner::detail/$1');
$routes->delete('/kuliner/(:num)', 'User\Kuliner::hapus/$1');

// ROUTES PENGINAPAN
$routes->get('/penginapan', 'User\penginapan::index');
$routes->get('/penginapan/detail/(:any)', 'User\Penginapan::detail/$1');
$routes->post('/penginapan/addPenginapan', 'User\Penginapan::addPenginapan');
$routes->delete('/penginapan/(:num)', 'User\Penginapan::hapus/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
