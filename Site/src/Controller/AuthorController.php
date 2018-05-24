<?php 
namespace Controller;
class AuthorController extends Controller
{
    public function afficheAll(){
        $authors = $this -> getModel() -> getAllAuthors();
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'authors' => $authors,
            'categories' => $categories,
        );
        return $this -> render('admin.html', $params);
    }
    
    public function affiche($id){
        $author = $this -> getModel() -> getAuthorById($id);
        
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'author' => $author,
            'categories' => $categories,
        );
        return $this -> render('admin.html', $params);
    }
}
