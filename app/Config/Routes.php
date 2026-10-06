<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::welcome');
$routes->get('tasks', 'Tasks::index');
$routes->get('profile', 'Profile::index');
$routes->get('about', 'Pages::about');

$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::attemptLogin');
$routes->get('logout', 'Auth::logout');

$routes->get('tasks/new', 'Tasks::new');
$routes->post('tasks', 'Tasks::create');

$routes->get('tasks/(:num)/edit', 'Tasks::edit/$1');
$routes->post('tasks/(:num)', 'Tasks::update/$1');

$routes->post('tasks/(:num)/delete', 'Tasks::delete/$1');