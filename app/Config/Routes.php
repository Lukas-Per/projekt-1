<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Main::index');
$routes->get('form', 'Main::form');
$routes->get('carousel', 'Main::carousel');
$routes->get('pricing', 'Main::pricing');
$routes->get('project-progress', 'Main::projectProgress');
