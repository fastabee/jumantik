<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes 
 */

 //dashboard
$routes->get('/', 'Home::index');


//profile
$routes->get('profile', 'Profile::index');
$routes->get('edit/profil', 'Profile::edit');
$routes->post('update/profil', 'Profile::update');

//login
$routes->get('login', 'Login::index');
$routes->post('login/bang', 'Login::login');


//survey
$routes->get('survey/input', 'Survey::input');
$routes->post('survey/insert', 'Survey::insert');
$routes->get('grafik/(:num)', 'Survey::grafik/$1');
$routes->get('grafik2', 'Survey::grafik2');

//detail
$routes->get('detail/(:num)', 'Survey::detail/$1');

//rekap
$routes->get('riwayat', 'Survey::riwayat');

//cetak riwayat
$routes->get('cetak/riwayat', 'Survey::cetak');

//cetak detail
$routes->post('cetak/detail', 'Survey::cetak_detail');
$routes->get('cetak/detail', 'Survey::cetak_detail2');


//Report

$routes->get('report', 'Survey::report');

//informasi

$routes->get('informasi', 'Informasi::index');
$routes->get('detail/info/(:num)', 'Informasi::detail/$1');

//logout
$routes->get('logout', 'Login::logout');

$routes->get('generate_qr/(:num)', 'Survey::generate_qr/$1');
