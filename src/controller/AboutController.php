<?php

namespace App\src\controller;
use App\src\Request;

class AboutController extends Controller{

    public function home(){
       return $this->Render('home',  ['greet'=>'hello world']); 
    }

    public function contact(){
        return $this->Render('contact',  []);
      
    }

    public function store(Request $request){
        echo '<pre>';
        var_dump($request->getRequestBody());
        echo '</pre>';
  
      
    }

}