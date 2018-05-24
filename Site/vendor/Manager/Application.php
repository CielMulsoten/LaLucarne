<?php 

namespace Manager;

final class Application
{
    protected $controller;
    protected $action;
    protected $argument;
    
    public function __construct(){
        
        $tab = explode('/', $_SERVER['REQUEST_URI']);
        
        if(isset($tab[1]) && !empty($tab[1]) && file_exists(__DIR__ . '/../../src/Controller/'. ucfirst($tab[1]) . 'Controller.php'))
        {
            $this -> controller = 'Controller\\' . ucfirst($tab[1]) . 'Controller';
        }
        else{
            $this -> controller = 'Controller\BookController';
        }
        
        
        if(isset($tab[2]) && !empty($tab[2])){
            $this -> action = $tab[2];
        }
        else{
            $this -> controller = 'Controller\BookController';
            $this -> action = 'afficheAll';
        }
        
        
        if(isset($tab[3]) && !empty($tab[3])){
            $this -> argument = $tab[3];
        }
    }
    
    public function run(){
        if(!is_null($this ->controller)){
            
            $a = new $this -> controller;
            
            if(!is_null($this -> action) && method_exists($a, $this -> action)){
                
                $action = $this -> action;
                $a -> $action($this -> argument);
            }
        }
        else{
            require __DIR__ . '/../../src/View/404.html';
        }
    }
    
}
