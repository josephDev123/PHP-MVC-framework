<?php

namespace App\src;

class View{

    public function renderView($view, Array $params){
        $CachedHtmlContent = $this->renderViewOnly($view, $params);
       
       ob_start();
        include_once(Application::$app->rootDir.'/src/views/layouts/master.php'); 
       $HtmlContent = ob_get_clean();
       return str_replace('{{ content }}', $CachedHtmlContent,  $HtmlContent);
    }

    public function renderViewOnly($view, $params){
        foreach ($params as $key => $value) {
            $key = $value;
        }
        ob_start();
        include_once(Application::$app->rootDir.'/src/views/'.$view.'.php');  
        return ob_get_clean();
     }
}