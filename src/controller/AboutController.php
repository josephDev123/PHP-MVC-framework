<?php

namespace App\src\controller;
use App\src\Application;

class AboutController{

    public function home(){
        
        return Application::$app->view->renderView('home', ['greet'=>'hello world']);
    }

    public function contact(){
        return Application::$app->view->renderView('contact', []);
      
    }

    public function store(){
        echo '<pre>';
        var_dump($_REQUEST);
        echo '</pre>';
  
      
    }

}