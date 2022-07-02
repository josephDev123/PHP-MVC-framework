<?php

namespace App\src;

class View{

    public function renderView($view){
        return include_once 'views/'.$view;
            
    }
}