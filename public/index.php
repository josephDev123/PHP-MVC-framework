<?php

require_once __DIR__ . "/../vendor/autoload.php";


use App\src\Application;
use App\src\AboutController;

$app = new Application(dirname( __DIR__));

$app->router->get('/', 'home');

$app->router->get('/contact', [AboutController::class, 'index']);

echo '<pre>';
// echo  $_SERVER['REQUEST_URI'];
// print_r($_SERVER);
echo '</pre>';

echo $app->Run();