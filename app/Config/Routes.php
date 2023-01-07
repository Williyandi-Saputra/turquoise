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
$routes->get('home', 'Home::Home');
$routes->get('menu', 'Home::Menu');
$routes->get('tentang', 'Home::About');
$routes->get('contact', 'Home::Contact');
$routes->get('komentar', 'Home::Komentar');
$routes->get('register', 'Home::Register');
$routes->get('dashboard', 'Home::Dashboard');
$routes->get('tentang-readmore', 'Home::read_more');
$routes->get('login', 'Home::Loginn');
$routes->post('tambah_user', 'Home::addUser');
$routes->get('keranjang', 'Home::Keranjang');
$routes->post('edit-user', 'Home::EditUser');
$routes->get('hii', 'Home::Hii');
$routes->get('birthday-diskon', 'Home::birtday');
$routes->get('jumat-berkah', 'Home::jumat_berkah');
$routes->get('add-user', 'Home::tambah_user');

// VALIDASI
$routes->post('login', 'Admin::Login');
$routes->get('logout', 'Admin::logout');

/* View User */
$routes->get('tables', 'Home::Table');
$routes->post('hapus-pengguna', 'Admin::deleteUser');
$routes->post('edit-pengguna', 'Admin::directUpdateUser');
$routes->post('edit-cok', 'Admin::Updateuser');

// TAMBAH PRODUK
$routes->get('direct_whatsApp', 'Produk::directWhatsApp');

// KOMENTAR
$routes->post('tambah_komentar', 'Komentar::inputKomentar');

// MASUKAN MENU KE KERANJANG 
$routes->post('tambah_keranjang', 'Keranjang::AddProdukToKeranjang');

// TAMBAH USER DARI ADMIN
$routes->post('tambah_user_admin', 'Admin::addUserAdmin');

/* Produk */
$routes->get('table_produk', 'Produk::table_produk');
$routes->post('tambah-produk', 'Produk::addProduk');
$routes->post('hapus-produk', 'Produk::deleteProduk');


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
