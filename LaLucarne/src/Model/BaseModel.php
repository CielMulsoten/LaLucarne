<?php 

namespace Model;

use PDO; 

class BaseModel extends Model{

	public function getSliderItem(){


		$requete = "SELECT id_event, link, picture, description, title FROM event WHERE active = 1";
		$resultat = $this -> getDb() -> query($requete);
		$events = $resultat -> fetchAll(PDO::FETCH_ASSOC);


		$requete = "SELECT id_book, picture, description, title  FROM book WHERE active = 1";
		$resultat = $this -> getDb() -> query($requete);
		$books = $resultat -> fetchAll(PDO::FETCH_ASSOC);

		$slider = array(); 
		$i = 0;

		foreach($events as $event){
			$slider[$i]['title'] = $event['title'];
			$slider[$i]['picture'] =  $event['picture'];
			$slider[$i]['description'] =  $event['description'];
			$slider[$i]['link'] =  $event['link'];
			$i ++;
		}

		foreach($books as $book){
			$slider[$i]['title'] = $book['title'];
			$slider[$i]['picture'] =  $book['picture'];
			$slider[$i]['description'] =  $book['description'];
			$slider[$i]['link'] =  '/book/affiche/' . $book['id_book'];
			$i ++;
		}


		 if(!$slider){
	        return FALSE;
	    }
	    else{
	        return $slider;
	    }


	}
    public function getAllEvent(){
        return $this -> findAll();
    }
    public function getEventById($id){
        return $this -> find($id);
    }
    public function registerEvent($infos){
		return $this -> register($infos);
	}
}
