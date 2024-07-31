<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'HomeController::index');
$routes->get('/login', 'Auth::loginPage');
$routes->post('/loginPost', 'Auth::masuk');
$routes->get('/logout', 'Auth::logout');

// Routes for dashboard based on roles
$routes->get('/dashboard_admin', 'AdminDashboardController::index', ['filter' => 'login']);
$routes->get('/user/dashboard', 'UserController::index', ['filter' => 'login']);