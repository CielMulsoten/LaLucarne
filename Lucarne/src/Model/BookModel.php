<?php
namespace Model;
use PDO;
class BookModel extends Model
{
    
    public function getAllBooks(){
        return $this -> findAll();
    }
    public function getBookById($id){
        return $this -> find($id);
    }
    public function deleteBookById($id){
        return $this -> delete($id);
    }
    public function registerBook($infos){
        return $this -> register($infos);
    }
    
    public function getBookByAuthor($auth){
        $requete = "SELECT book. * FROM book LEFT JOIN author ON book.id_book WHERE author.id_author = :id_author";
        $resultat = $this -> getDB() -> prepare($requete);
        $resultat -> bindValue(':id_author', $auth, PDO::PARAM_STR);
        $resultat -> execute();
    
        $resultat -> setFetchMode(PDO::FETCH_CLASS, 'Entity\Book');
    
        $donnees = $resultat -> fetchAll();
    
        if(!$donnees){
            return FALSE;
        }else{
            return $donnees;
        }
    }
    

}
