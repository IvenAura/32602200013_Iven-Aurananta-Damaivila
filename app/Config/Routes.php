<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/form', 'FormController::submitForm');
$routes->get('/halodunia', 'HelloWorld::halodunia');
$routes->get('/', 'Home::index');
$routes->get('/hallo', 'HelloWorld::halodunia');
$routes->get('/form', 'FormController::submitform');
$routes->get('/latihanview', 'HelloWorld::halodunia');
$routes->get('/layout', 'LayoutingController::index');
$routes->get('/skills', 'Pages::index');
$routes->get('/', 'Pages::profile');
$routes->get('/skills', 'Pages::index');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/experience', 'Profile::experience');

$routes->get('/crud', 'Crud::index');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->get('/crud/hapus', 'Crud::hapus');

$routes->post('/crud/tambah', 'Crud::tambah');

$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/editan', 'Crud::editan');

$routes->get('/crud/hapus/(:segment)', 'Crud::hapus/$1');
