<?php

use App\Controllers\AnggotaController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');
$routes->get('/dashboard/anggota', 'Home::dashboard/anggota');

$routes->get('/Anggota', 'AnggotaController::show');
$routes->get('/Anggota/formdataanggota', 'AnggotaController::formdataanggota');
$routes->get('/Anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('/Anggota/Save', 'AnggotaController::create');

$routes->get('/pengguna', 'PenggunaController::show');
$routes->get('/pengguna/form', 'PenggunaController::form');
$routes->get('/pengguna/edit/(:num)', 'PenggunaController::edit/$1');
$routes->post('/pengguna/Save', 'PenggunaController::create');

$routes->get('/Kategori', 'KategoriController::show');
$routes->get('/Kategori/formkategori', 'KategoriController::formkategori');
$routes->get('/Kategori/edit/(:num)', 'KategoriController::edit/$1');
$routes->post('/Kategori/Save', 'KategoriController::create');

$routes->get('/KoleksiBuku', 'KoleksiBukuController::show');
$routes->get('/KoleksiBuku/form', 'KoleksiBukuController::form');
$routes->get('/KoleksiBuku/edit/(:num)', 'KoleksiBukuController::edit/$1');
$routes->post('/KoleksiBuku/Save', 'KoleksiBukuController::create');

$routes->get('/Buku', 'BukuController::show');
$routes->get('/Buku/form', 'BukuController::form');
$routes->get('/Buku/edit/(:num)', 'BukuController::edit/$1');
$routes->post('/Buku/Save', 'BukuController::create');

$routes->get('/peminjaman', 'PeminjamanController::show');
$routes->get('/peminjaman/form', 'PeminjamanController::form');
$routes->get('/peminjaman/edit/(:num)', 'PeminjamanController::edit/$1');
$routes->post('/peminjaman/Save', 'PeminjamanController::create');

$routes->get('/Penerbit', 'PenerbitController::show');
$routes->get('/Penerbit/form', 'PenerbitController::form');
$routes->get('/Penerbit/edit/(:num)', 'PenerbitController::edit/$1');
$routes->post('/Penerbit/Save', 'PenerbitController::create');

$routes->get('/login','LoginController::form');
$routes->post('/login','LoginController::login');
$routes->get('/logout','LoginController::logout');

$routes->get('/bukuanggota', 'bukuanggotacontroller::show');

$routes->get('/peminjamananggota', 'peminjamananggotacontroller::show');