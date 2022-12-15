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
$routes->setAutoRoute(true);
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
$routes->get('/list-wisata', 'Home::listWisata', ['as' => 'listWisata']);
$routes->get('/list-wisata/(:any)', 'Home::detailWisata/$1');
// ('/Role')->sebagai segment pada URL/yang diakses di url
$routes->get('/home-admin', 'pengelola\HomeAdmin::index', ['as' => 'homeAdmin']);
$routes->get('/tambah-wisata', 'pengelola\AddWisata::index', ['as' => 'tambahWisata']);
$routes->get('/edit-wisata/(:any)', 'pengelola\HomeAdmin::editWisata/$1', ['as' => 'editWisata']);
$routes->get('/panorama/(:any)', 'pengelola\Panoramic::panorama/$1');
$routes->get('/all-list', 'pengelola\HomeAdmin::listWisata', ['as' => 'listWisataAdmin']);
$routes->get('/edit-profile', 'pengelola\HomeAdmin::editProfile', ['as' => 'editProfile']);
$routes->get('/auth', 'pengelola\Auth::index', ['as' => 'signIn']);
$routes->get('/auth-sign', 'pengelola\Auth::signUp', ['as' => 'signUp']);
$routes->get('/signup-process', 'pengelola\Auth::process_signup');
$routes->get('/signin-process', 'pengelola\Auth::process_signin');
$routes->get('/log-out', 'pengelola\Auth::logout');
$routes->match(['get', 'post'], '/add-wisata', 'pengelola\AddWisata::addWisata');
$routes->get('/add-panorama', 'pengelola\Panoramic::addpano');
$routes->match(['get', 'post'], '/profile', 'pengelola\HomeAdmin::profile');

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
