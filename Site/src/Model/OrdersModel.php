<?php
namespace Model;
use PDO;
class OrdersModel extends Model
{
    
    public function getAllOrders(){
        return $this -> findAll();
    }
    public function getOrderById($id){
        return $this -> find($id);
    }
    public function deleteOrderById($id){
        return $this -> delete($id);
    }
    public function getOrderByUser($user){
        $requete = "SELECT orders. * FROM orders LEFT JOIN users ON orders.id_users WHERE users.id_users = :id_users";
        $resultat = $this -> getDB() -> prepare($requete);
        $resultat -> bindValue(':id_users', $user, PDO::PARAM_STR);
        $resultat -> execute();
        
        $resultat -> setFetchMode(PDO::FETCH_CLASS, 'Entity\Orders');
        $donnees = $resultat -> fetchAll();
        
        if(!donnees){
            return FALSE;
        }else{
            return $donnees;
        }
    }
}
