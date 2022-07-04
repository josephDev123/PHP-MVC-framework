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

    //resolve the route
    public function resolve(){
     $method = $this->request->requestMethod();
     $url = $this->request->url();
   
     $callback = $this->route[$method][$url] ?? false;
   
    
     if($callback === false){
      $this->response->HandleErrorStatusCode(404);
      return $this->view->renderView('404');
    

         // throw new \Exception("no callback for the route");
     }

     if(is_string($callback)){
       return Application::$app->view->renderView($callback);
     }

    return call_user_func($callback);
    }

}

