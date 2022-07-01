<?php

require_once __DIR__ . "/../vendor/autoload.php";


use App\src\Application;


$app = new Application;
echo $app->name();