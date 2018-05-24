<?php
namespace Controller;
class UsersController extends Controller
{
    public function afficheAll(){
        $users = $this -> getModel() -> getAllUsers();
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'users' => $users,
            'categories' => $categories,
        );
        return $this -> render('admin.html', $params);
    }
    
    public function affiche($id){
        $user = $this -> getModel() -> getUserById($id);
        
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'user' => $user,
            'categories' => $categories,
        );
        return $this -> render('admin.html', $params);
    }
}
