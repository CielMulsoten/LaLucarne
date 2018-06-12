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
		
		if(isset($tab[5]) && !empty($tab[5]) && file_exists(__DIR__ . '/../../src/Controller/' . ucfirst($tab[5]) . 'Controller.php')){
			// S'il y a un controller xxxxx dans l'url et que le fichier xxxxController.php existe
			$this -> controller = 'Controller\\' . ucfirst($tab[5]) . 'Controller';	
		} 
		else{
			// Sinon par défault je lance le ProduitController (pour afficher la home par defaut)
			$this -> controller = 'Controller\BaseController';
		}
		//------------
		if(isset($tab[6]) && !empty($tab[6])){
			$this -> action = $tab[6];
		}
		else{
			$this -> controller = 'Controller\BaseController';
			$this -> action = 'accueil';
		}
		//------------
		if(isset($tab[7]) && !empty($tab[7])){
			$this -> argument = $tab[7];
		} 
	}
	
	public function path(){
		return 'http://localhost/lucarne/Site/web/index.php/';
		
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
			require __DIR__ . '/../../src/View/404.html';
		}	
	}
	
}