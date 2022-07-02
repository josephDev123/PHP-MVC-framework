<?php

require_once __DIR__ . "/../vendor/autoload.php";


use App\src\Application;

echo  __DIR__;
echo  '<br>';
echo dirname( __DIR__);
$app = new Application(dirname( __DIR__));
$app->router->get('/', function(){
  return '<h2>Hello world</h2>';
});

$app->router->get('/home', 'home');

echo '<pre>';
// echo  $_SERVER['REQUEST_URI'];
// print_r($_SERVER);
echo '</pre>';



echo $app->Run();