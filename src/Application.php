<?php

namespace App\src;
use App\src;

class Application{
    public Router $router;
    public static Application $app;
    public Request $request;

    public string $rootDir;

    public function __construct($rootPath){
        $this->request= new Request();
        $this->router= new Router($this->request);
        $this->rootDir =$rootPath;
    }

   public function Run(){
    return $this->router->resolve();
   }
   

}