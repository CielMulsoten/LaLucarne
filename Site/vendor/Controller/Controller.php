<?php

namespace Controller;

use Model;

class Controller
{
    protected $model;
    
    public function __construct(){
        $class = 'Model\\' .str_replace(array('Controller\\', 'Controller'), '', get_called_class()) . 'Model';
        
        $this -> model = new $class;
    }
    
    public function getModel(){
        return $this -> model;
    }
    
    public  function render($layout, $view, $params){
        $dirView = __DIR__ . '/../../src/View/';
        
        $path_view = $dirView . $view;
        
        $path_layout = $dirView . $layout;
        
        extract($params);
        
        ob_start();
        
        require $path_view;
        $content = ob_get_clean();
        
        ob_start();
        require $path_layout;
        
        return ob_end_flush();
    }
}
