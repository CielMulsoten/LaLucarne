<?php
namespace Model;
use PDO;
class AuthorModel extends Model
{
    
    public function getAllAuthors(){
        return $this -> findAll();
    }
    public function getAuthorById($id){
        return $this ->find($id);
    }
    public function deleteAuthorById($id){
        return $this -> delete($id);
    }
}
