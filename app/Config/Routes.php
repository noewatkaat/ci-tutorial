<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/','Home::index');
$routes->get('/about/index','Home::about');
$routes->get('/about/contact','Home::about');
$routes->get('/about/contact/(:any)/(:num)','Home::contact/$1/$2');
$routes->get('/about/(:any)/(:num)','Home::contact/$1/$2');