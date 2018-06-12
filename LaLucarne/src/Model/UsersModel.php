<?php 
namespace Model;
use PDO;
class UsersModel extends Model
{
    
    public function getAllUsers(){
        return $this -> findAll();
    }
    public function getUserById($id){
        return $this -> find($id);
    }
    public function deleteUserById($id){
        return $this -> delete($id);
    }
    public function updateUserById($id){
        return $this -> update($id);
    }
}
