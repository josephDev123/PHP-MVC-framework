<?php

require_once __DIR__ . "/../vendor/autoload.php";


use App\src\Application;
use App\src\controller\AboutController;
use App\src\Request;

$app = new Application(dirname( __DIR__));


$app->router->get('/', [AboutController::class, 'home']);

$app->router->get('/contact', [AboutController::class, 'contact']);
$app->router->post('/contact', [AboutController::class, 'store']);

echo $app->Run();

