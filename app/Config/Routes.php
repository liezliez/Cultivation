<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Home
$routes->get('/', 'Pages::home');
// Tentang Kami
$routes->get('/tentang-kami', 'Pages::tentangKami');
// Tempat Kuliner
$routes->get('/tempat-kuliner', 'Tempatk::index');

/* Login dan Signup */

$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');

$routes->get('/home', 'Pages::home');
$routes->get('/admin', 'Admin::index');

// logout
$routes->get('/logout', 'Login::logout');

// signup
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');

// $routes->get('/signup', 'Pages::signup');


/* Tempat Kuliner Function */

$routes->get('/tempat-kuliner/tambah', 'Tempatk::create');
$routes->get('/tempat-kuliner/edit/(:segment)', 'Tempatk::edit/$1');
$routes->delete('/tempat-kuliner/(:num)', 'TempatK::delete/$1');
$routes->get('/tempat-kuliner/(:any)', 'TempatK::detail/$1');


// $routes->get('/tempat-kuliner/kategori/(:any)', 'TempatK::kategori/$1');

$routes->get('/easterEgg', 'pages::easterEgg');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
