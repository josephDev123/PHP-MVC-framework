<?php

namespace App\src\controller;
use App\src\Application;

class AboutController extends Controller{

    public function home(){
       return $this->Render('home',  ['greet'=>'hello world']);
        // return Application::$app->view->renderView(,);
    }

    public function contact(){
        return $this->Render('contact',  []);
      
    }

    public function store(){
        echo '<pre>';
        var_dump(Application::$app->request->getRequestBody());
        echo '</pre>';
  
      
    }

}