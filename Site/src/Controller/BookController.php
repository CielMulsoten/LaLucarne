<?php 
namespace Controller;
class BookController extends Controller
{
    public function afficheAll(){
        
 $books = $this -> getModel() -> getAllBooks(); $cc = new CategoryController; $categories = $cc -> liste(); $params = array( 'books' => $books, 'categories' => $categories, ); return $this -> render('admin.html', $params);
    }
    
    public function affiche($id){
        $book = $this -> getModel() -> getBookById($id);
        
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'book' => $book,
            'categories' => $categories,
        );
        return $this -> render('admin.html', $params);
    }
    
    public function bookByAuthor($auth){
        $books = $this ->getModel() -> getBookByAuthor($auth);
        
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'books' => $books,
            'categories' => $categories,
        );
        
        return $this -> render('admin.html', $params);
    }
}
