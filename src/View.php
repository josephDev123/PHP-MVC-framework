<?php

namespace App\src;

class View{

    public function renderView($view){
        $CachedHtmlContent = $this->renderViewOnly($view);
       
       ob_start();
        include_once(Application::$app->rootDir.'/src/views/layouts/master.php'); 
       $HtmlContent = ob_get_clean();
       return str_replace('{{ content }}', $CachedHtmlContent,  $HtmlContent);
    }

    public function renderViewOnly($view){
        ob_start();
        include_once(Application::$app->rootDir.'/src/views/'.$view.'.php');  
        return ob_get_clean();
     }
}