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


$routes->get('/', 'Home::index');
$routes->get('/privacy', 'Home::privacy');
$routes->get('/pilihan', 'Home::pilihan', ['filter' => 'auth_user']);

$routes->get('/login', 'Login::index');
$routes->get('/daftar', 'Login::daftar');
$routes->get('/lupa', 'Login::lupa');
$routes->get('/cv-generator', 'Home::cv_generator');

$routes->post('/simpan_daftar', 'Login::simpan_daftar');
$routes->post('/cek_login', 'Login::cek_login');
$routes->post('/sendemail', 'Login::sendemail');
$routes->get('/reset/(:any)', 'Login::reset/$1');
$routes->post('/reset_password/(:any)', 'Login::reset_password/$1');



// PROFIL
$routes->get('/profil', 'Home::profil', ['filter' => 'auth_user']);
$routes->get('/edit_profil', 'Home::edit_profil', ['filter' => 'auth_user']);
$routes->post('/simpan_profil/(:num)', 'Home::simpan_profil/$1', ['filter' => 'auth_user']);
$routes->post('/simpan_photo', 'Home::simpan_photo', ['filter' => 'auth_user']);

// PENDIDIKAN
$routes->get('/add_pendidikan', 'Home::add_pendidikan', ['filter' => 'auth_user']);
$routes->get('/edit_pendidikan/(:num)', 'Home::edit_pendidikan/$1', ['filter' => 'auth_user']);
$routes->post('/simpan_pendidikan', 'Home::simpan_pendidikan', ['filter' => 'auth_user']);
$routes->post('/simpanedit_pendidikan/(:num)', 'Home::simpanedit_pendidikan/$1', ['filter' => 'auth_user']);
$routes->delete('/hapus_pendidikan/(:num)', 'Home::hapus_pendidikan/$1', ['filter' => 'auth_user']);

// PENGALAMAN
$routes->get('/add_pengalaman', 'Home::add_pengalaman', ['filter' => 'auth_user']);
$routes->get('/edit_pengalaman/(:num)', 'Home::edit_pengalaman/$1', ['filter' => 'auth_user']);
$routes->post('/simpan_pengalaman', 'Home::simpan_pengalaman', ['filter' => 'auth_user']);
$routes->post('/simpanedit_pengalaman/(:num)', 'Home::simpanedit_pengalaman/$1', ['filter' => 'auth_user']);
$routes->delete('/hapus_pengalaman/(:num)', 'Home::hapus_pengalaman/$1', ['filter' => 'auth_user']);

// BAHASA
$routes->get('/add_bahasa', 'Home::add_bahasa', ['filter' => 'auth_user']);
$routes->get('/edit_bahasa/(:num)', 'Home::edit_bahasa/$1', ['filter' => 'auth_user']);
$routes->post('/simpan_bahasa', 'Home::simpan_bahasa', ['filter' => 'auth_user']);
$routes->post('/simpanedit_bahasa/(:num)', 'Home::simpanedit_bahasa/$1', ['filter' => 'auth_user']);
$routes->delete('/hapus_bahasa/(:num)', 'Home::hapus_bahasa/$1', ['filter' => 'auth_user']);

// KEAHLIAN
$routes->get('/add_keahlian', 'Home::add_keahlian', ['filter' => 'auth_user']);
$routes->get('/edit_keahlian/(:num)', 'Home::edit_keahlian/$1', ['filter' => 'auth_user']);
$routes->post('/simpan_keahlian', 'Home::simpan_keahlian', ['filter' => 'auth_user']);
$routes->post('/simpanedit_keahlian/(:num)', 'Home::simpanedit_keahlian/$1', ['filter' => 'auth_user']);
$routes->delete('/hapus_keahlian/(:num)', 'Home::hapus_keahlian/$1', ['filter' => 'auth_user']);

// DOC TRAVEL
$routes->get('/add_doctravel', 'Home::add_doctravel', ['filter' => 'auth_user']);
$routes->get('/edit_doctravel/(:num)', 'Home::edit_doctravel/$1', ['filter' => 'auth_user']);
$routes->post('/simpan_doctravel', 'Home::simpan_doctravel', ['filter' => 'auth_user']);
$routes->post('/simpanedit_doctravel/(:num)', 'Home::simpanedit_doctravel/$1', ['filter' => 'auth_user']);
$routes->delete('/hapus_doctravel/(:num)', 'Home::hapus_doctravel/$1', ['filter' => 'auth_user']);

// SERTIFIKAT
$routes->get('/add_sertifikat', 'Home::add_sertifikat', ['filter' => 'auth_user']);
$routes->get('/edit_sertifikat/(:num)', 'Home::edit_sertifikat/$1', ['filter' => 'auth_user']);
$routes->post('/simpan_sertifikat', 'Home::simpan_sertifikat', ['filter' => 'auth_user']);
$routes->post('/simpanedit_sertifikat/(:num)', 'Home::simpanedit_sertifikat/$1', ['filter' => 'auth_user']);
$routes->delete('/hapus_sertifikat/(:num)', 'Home::hapus_sertifikat/$1', ['filter' => 'auth_user']);

// SERTIFIKAT
$routes->get('/add_searecord', 'Home::add_searecord', ['filter' => 'auth_user']);
$routes->get('/edit_searecord/(:num)', 'Home::edit_searecord/$1', ['filter' => 'auth_user']);
$routes->post('/simpan_searecord', 'Home::simpan_searecord', ['filter' => 'auth_user']);
$routes->post('/simpanedit_searecord/(:num)', 'Home::simpanedit_searecord/$1', ['filter' => 'auth_user']);
$routes->delete('/hapus_searecord/(:num)', 'Home::hapus_searecord/$1', ['filter' => 'auth_user']);


// CV DECK ENGINE
$routes->get('/deck_engine', 'Deck_engine::index', ['filter' => 'auth_user']);
$routes->get('/pdf_view_deckengine', 'Deck_engine::pdf_view_deckengine', ['filter' => 'auth_user']);
$routes->get('/pdf_print_deckengine', 'Deck_engine::pdf_print_deckengine', ['filter' => 'auth_user']);

// CV DECK ENGINE
$routes->get('/cruise_ship', 'Cruise_ship::index', ['filter' => 'auth_user']);
$routes->get('/pdf_view_cruiseship', 'Cruise_ship::pdf_view_cruiseship', ['filter' => 'auth_user']);
$routes->get('/pdf_print_cruiseship', 'Cruise_ship::pdf_print_cruiseship', ['filter' => 'auth_user']);

// CV LEBENSLAUF
$routes->get('/lebenslauf', 'Lebenslauf::index', ['filter' => 'auth_user']);
$routes->get('/pdf_view_lebenslauf', 'Lebenslauf::pdf_view_lebenslauf', ['filter' => 'auth_user']);
$routes->get('/pdf_print_lebenslauf', 'Lebenslauf::pdf_print_lebenslauf', ['filter' => 'auth_user']);

// CV GENPUBLIC
$routes->get('/genpublic', 'genpublic::index', ['filter' => 'auth_user']);
$routes->get('/pdf_view_genpublic', 'genpublic::pdf_view_genpublic', ['filter' => 'auth_user']);
$routes->get('/pdf_print_genpublic', 'genpublic::pdf_print_genpublic', ['filter' => 'auth_user']);



// SUPER
$routes->get('/super', 'Super::index', ['filter' => 'super']);
$routes->get('/profil_super', 'Super::profil_super', ['filter' => 'super']);
$routes->get('/cari_lowongan', 'Super::lowongan', ['filter' => 'super']);
$routes->get('/tambah_lowongan', 'Super::tambah_lowongan', ['filter' => 'super']);
$routes->get('/edit_lowongan/(:any)', 'Super::edit_lowongan/$1', ['filter' => 'super']);
$routes->post('/simpan_lowongan', 'Super::simpan_lowongan', ['filter' => 'super']);
$routes->get('/hapus_lowongan/(:any)', 'Super::hapus_lowongan/$1', ['filter' => 'super']);
$routes->post('/simpanedit_lowongan', 'Super::simpanedit_lowongan', ['filter' => 'super']);
$routes->post('/simpan_super', 'Super::simpan_super', ['filter' => 'super']);


$routes->get('/payment', 'Payment::index');


$routes->get('/gform', 'Home::gform');
$routes->get('/gform_detail/(:any)', 'Home::gform_detail/$1');

$routes->get('/terms', 'Home::terms');
$routes->get('/logout', 'Login::logout');

// $routes->get('/(:any)', 'Login::logout');


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
