<?php

namespace App\src;

class Request{

    public function requestMethod(){
      return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function url(){
       return $_SERVER['REQUEST_URI'];
    }



    // get the data that is posted by form
    public function getRequestBody(){
     $result = [];
      foreach($_POST as $requestData => $value){
        $sanitised = htmlspecialchars($value);
       $result[$requestData] = $sanitised;

      }
        return $result;
    }
}