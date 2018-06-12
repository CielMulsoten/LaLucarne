<?php

//vendor/Manager/Application.php

namespace Manager;

final class Application
{
	protected $controller; // Le controller à instancier
	protected $action; // L'action à lancer
	protected $argument = ''; // L'argument s'il y en a un
	
	public function __construct(){ // On scan l'URL
			
		$tab = explode('/', $_SERVER['REQUEST_URI']);

		echo '<pre>';
        print_r($tab);
		echo '</pre>'; 
		
		if(isset($tab[2]) && !empty($tab[2]) && file_exists(__DIR__ . '/../../src/Controller/' . ucfirst($tab[2]) . 'Controller.php')){
			// S'il y a un controller xxxxx dans l'url et que le fichier xxxxController.php existe
			$this -> controller = 'Controller\\' . ucfirst($tab[2]) . 'Controller';	
		} 
		else{
			// Sinon par défault je lance le ProduitController (pour afficher la home par defaut)
			$this -> controller = 'Controller\BaseController';
		}
		//------------
		if(isset($tab[3]) && !empty($tab[3])){
			$this -> action = $tab[3];
		}
		else{
			$this -> controller = 'Controller\BaseController';
			$this -> action = 'accueil';
		}
		//------------
		if(isset($tab[4]) && !empty($tab[4])){
			$this -> argument = $tab[4];
		} 
	}
	
	public function path(){
		return 'http://localhost/LaLucarne/web/base/accueil';
		
	}
	
	
	public function run(){ // Lance les instanciations / App
		
		if(!is_null($this -> controller)){
			
			$a = new $this -> controller;
			
			if(!is_null($this -> action) && method_exists($a, $this -> action)){
				
				$action = $this -> action;
				$a -> $action($this -> argument);
			  //$a -> afficheall()
			  //$a -> affiche(10)
			}
		}
		else{
			require __DIR__ . '/../../src/view/404.html';
		}	
	}
	
}
