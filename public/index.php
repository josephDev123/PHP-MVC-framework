<?php

require_once __DIR__ . "/../vendor/autoload.php";


use App\core\Application;
use App\controller\AboutController;

$app = new Application(dirname( __DIR__));
echo '<pre>';
var_dump($app);
echo '</pre>';
return;

$app->router->get('/', 'home');

$app->router->get('/contact', [AboutController::class, 'index']);



echo $app->Run();