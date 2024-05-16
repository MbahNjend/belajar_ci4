<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('barang', 'Barang::index');
$routes->get('halo', 'Halo::index');
