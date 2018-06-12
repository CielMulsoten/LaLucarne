<?php
namespace Model;
use PDO;
class DonationModel extends Model
{
    
    public function getAllDonations(){
        return $this -> findAll();
    }
    public function getDonationById($id){
        return $this -> find($id);
    }
    public function updateDonationById($id, $infos){
        return $this -> update($id, $infos);
    }
    public function getDonationByUser(){
        $requete = "SELECT donation. * FROM donation LEFT JOIN users ON donation.id_users WHERE users.id_users = :id_users";
        $resultat = $this -> getDB() -> prepare($requete);
        $resultat -> bindValue(':id_users', $user, PDO::PARAM_STR);
        $resultat -> execute();
        
        $resultat -> setFetchMode(PDO::FETCH_CLASS, 'Entity\Donation');
        $donnees = $resultat -> fetchAll();
        
        if(!$donnees){
            return FALSE;
        }else{
            return $donnees;
        }
    }
}
