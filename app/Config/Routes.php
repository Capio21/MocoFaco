<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/first', 'Home::index');
$routes->get('/workshop', 'Home::workshop');
$routes->get('/gallery', 'Home::gallery');
$routes->get('/Contact', 'Home::Contact');
$routes->get('/Shop', 'Home::Shop');
$routes->get('/Cart', 'Home::Cart');
$routes->get('/AdminPage', 'Home::AdminPage');



// login register
$routes->match(['get', 'post'], '/register', 'UserController::register');

$routes->match(['get', 'post'], '/', 'SigninController::login');
$routes->match(['get', 'post'], '/user/store', 'Home::first');
$routes->match(['get', 'post'], '/first', 'SigninController::login');
$routes->match(['get', 'post'], '/signin/loginAuth', 'SigninController::loginAuth', ['filter' => 'authGuard']);

// members registration
$routes->get('/members', 'MemberController::index');
$routes->get('/members/create', 'MemberController::create');
$routes->post('/members/store', 'MemberController::store');