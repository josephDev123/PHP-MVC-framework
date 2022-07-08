<?php

namespace App\core;

class Response{

    public function HandleErrorStatusCode($errorCode){
        return http_response_code($errorCode);


    }

}