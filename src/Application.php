<?php

namespace App\src;
use App\src;

class Application{
    public Router $router;
    public static Application $app;
    public Request $request;

    public string $rootDir;

    public View $view;


    public function __construct($rootPath){
        $this->request= new Request();
        $this->router= new Router($this->request);
        $this->rootDir =$rootPath;
        self::$app = $this;
        $this->view = new View();

    }

   public function Run(){
    return $this->router->resolve();
   }
   

}