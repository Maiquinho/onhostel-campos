<?php
session_start();
require '../src/sanitize.php';
require '../vendor/autoload.php';
require '../src/routes.php';

$router->run( $router->routes );