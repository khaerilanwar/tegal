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
$routes->get('/', 'Home::index');

// ROUTES AUTENTIFIKASI
// ROUTES LOGIN
$routes->get('/login', 'Auth\Login::index');
$routes->post('/login/masuk', 'Auth\Login::masuk');

// ROUTES LOGOUT
$routes->get('/logout', 'Auth\Logout::index');

// ROUTES REGISTRASI
$routes->get('/registrasi', 'Auth\Registrasi::index');
$routes->post('/registrasi/save', 'Auth\Registrasi::save');

// ROUTES ADMIN
// ADMIN DASHBOARD
$routes->get('/dashboard', 'Admin\Dashboard::index');
$routes->post('/dashboard/tambahUser', 'Admin\Dashboard::tambahUser');
$routes->post('/dashboard/edit/(:num)', 'Admin\Dashboard::edit/$1');
$routes->delete('/dashboard/(:num)', 'Admin\Dashboard::hapus/$1');

// ADMIN PARIWISATA
$routes->get('/pariwisata', 'Admin\Pariwisata::index');
$routes->post('/pariwisata/edit/(:num)', 'Admin\Pariwisata::edit/$1');
$routes->post('/pariwisata/tambahWisata', 'Admin\Pariwisata::tambahWisata');
$routes->delete('/pariwisata/(:num)', 'Admin\Pariwisata::hapus/$1');

// ADMIN  LAYANAN
$routes->get('/layanan', 'Admin\Layanan::index');
$routes->delete('/layanan/(:num)', 'Admin\Layanan::hapus/$1');

// ROUTES USER
// ROUTES WISATA
$routes->get('/wisata', 'User\Wisata::index');
$routes->get('/wisata/pesantiket', 'User\Wisata::pesanTiket');
$routes->post('/wisata/pesan', 'User\Wisata::pesan');
$routes->get('/wisata/bayar/(:num)', 'User\Wisata::bayar/$1');
$routes->get('/wisata/detail/(:any)', 'User\Wisata::detail/$1');

// ROUTES USER
// ROUTES HOME
$routes->get('/home', 'User\Home::index');

// PROFIL USER
$routes->get('/profil', 'User\Profile::index');

// IKLAN JASA
$routes->get('/pasang-iklan', 'User\Iklan::index');
$routes->post('/pasang-iklan/addJasa', 'User\Iklan::addJasa');
$routes->delete('/pasang-iklan/(:num)', 'User\Iklan::hapus/$1');
$routes->post('/pasang-iklan/update/(:num)', 'User\Iklan::update/$1');

// ROUTES JASA
$routes->get('/jasa', 'User\Jasa::index');

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
