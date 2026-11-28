<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Home::index');
$routes->get('/dosen', 'Dosen::index');
$routes->get('/mata-kuliah', 'MataKuliah::index');
$routes->get('/tentang', 'Home::tentang');
$routes->get('mahasiswa', 'Mahasiswa::index');
// CRUD Data Mahasiswa
$routes->get('mahasiswa/create', 'Mahasiswa::create');
$routes->post('mahasiswa/store', 'Mahasiswa::store');
$routes->get('mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->post('mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');
// CRUD Data Dosen
$routes->get('dosen/create', 'Dosen::create');
$routes->post('dosen/store', 'Dosen::store');
$routes->get('dosen/edit/(:num)', 'Dosen::edit/$1');
$routes->post('dosen/update/(:num)', 'Dosen::update/$1');
$routes->post('dosen/delete/(:num)', 'Dosen::delete/$1');
// CRUD Mata Kuliah
$routes->get('mata-kuliah/create', 'MataKuliah::create');
$routes->post('mata-kuliah/store', 'MataKuliah::store');
$routes->get('mata-kuliah/edit/(:segment)', 'MataKuliah::edit/$1');
$routes->post('mata-kuliah/update/(:segment)', 'MataKuliah::update/$1');
$routes->post('mata-kuliah/delete/(:segment)', 'MataKuliah::delete/$1');