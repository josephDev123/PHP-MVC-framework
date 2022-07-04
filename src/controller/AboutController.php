<?php

namespace App\src;

class AboutController{

    public function index(){

        return Application::$app->view->renderView('contact');
    }

}