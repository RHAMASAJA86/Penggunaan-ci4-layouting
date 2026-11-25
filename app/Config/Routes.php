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