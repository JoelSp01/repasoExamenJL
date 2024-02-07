<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'controladorExamen::index');
$routes->get('/eliminarProducto/(:num)', 'controladorExamen::eliminarProducto/$1');
$routes->post('/actualizarDatos', 'controladorExamen::actualizarDatos');
$routes->post('/insertarDatos', 'controladorExamen::insertarDatos');
