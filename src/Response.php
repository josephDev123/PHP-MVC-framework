<?php

namespace App\src;

class Response{

    public function HandleErrorStatusCode($errorCode){
        return http_response_code($errorCode);
    }

}