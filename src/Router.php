<?php

namespace App\src;

class Router{
   public array $route = [];
   public Request $request;
   public Response $response;
   public View $view;

   public function __construct($request){
      $this->request = $request;
      $this->response = new Response;
      $this->view = new View;

   }

   public function get($route, $callable){
       $this->route['get'][$route] = $callable;
    }

    public function post($route, $callable){
      $this->route['post'][$route] = $callable;
   }

    //resolve the route
    public function resolve(){
      
     $method = $this->request->requestMethod();
     $url = $this->request->url();
   
     $callback = $this->route[$method][$url] ?? false;
   
    
     if($callback === false){
      $this->response->HandleErrorStatusCode(404);
      return $this->view->renderView('404', []);  
     }

     if(is_string($callback)){
       return Application::$app->view->renderView($callback, []);
     }

     if (is_array($callback)) {
       $callback[0] = new $callback[0];
      //  $controller->action  = $callback[1];
      //  $callback[0] = $controller;
     }
     
    
   //    echo '<pre>';
   //      var_dump($callback);
   //   echo  '</pre>';

    return call_user_func($callback);

    }

}

