<?php
namespace Controller;
class DonationController extends Controller
{
    public function afficheAll(){
        
        $donations = $this -> getModel() -> getAllDonations();
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'donations' => $donations,
            'categories' => $categories,
        );
        return $this -> render('layout.html', 'admin.html', $params);
    }
    
    public function affiche($id){
        $donation = $this -> getModel() -> getDonationById($id);
        
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'donation' => $donation,
            'categories' => $categories,
        );
        return $this -> render('layout.html', 'admin.html', $params);
    }
    
    public function donationByUser($user){
        $donations = $this ->getModel() -> getDonationByUser($user);
        
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'donations' => $donations,
            'categories' => $categories,
        );
        
        return $this -> render('layout.html', 'admin.html', $params);
    }
}
