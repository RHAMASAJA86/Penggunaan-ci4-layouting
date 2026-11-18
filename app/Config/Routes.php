<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Home::index');
$routes->get('/dosen', 'Dosen::index');
$routes->get('/mata-kuliah', 'MataKuliah::index');
$routes->get('/tentang', 'Home::tentang');
$routes->get('mahasiswa', 'Mahasiswa::index');