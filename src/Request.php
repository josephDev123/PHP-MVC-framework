<?php

namespace App\core;

class Request{

    public function requestMethod(){
      return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function url(){
       return $_SERVER['REQUEST_URI'];
    }
}