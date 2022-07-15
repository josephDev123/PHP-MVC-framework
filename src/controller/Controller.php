<?php

namespace App\src\controller;
use App\src\Application;

class Controller{

    public function Render(string $view, array $param){
        return Application::$app->view->renderView($view, $param);
    }
}