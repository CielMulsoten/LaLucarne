<?php 
namespace Controller;
class BookController extends Controller
{
    public function afficheAll(){
        
        $books = $this -> getModel() -> getAllBooks();
        //$cc = new CategoryController;
       // $categories = $cc -> liste();
        
        $params = array(
            'books' => $books
        );
        return $this -> render('layout.html', 'catalogue.html', $params);
    }
    
    public function affiche($id){
        $book = $this -> getModel() -> getBookById($id);
        
        
        $params = array(
            'book' => $book,
        );
        return $this -> render('layout.html','livre.html', $params);
    }
    
    public function bookByAuthor($auth){
        $books = $this ->getModel() -> getBookByAuthor($auth);
        
        
        $params = array(
            'books' => $books,
        );
        
        return $this -> render('layout.html','catalogue.html', $params);
    }
}

echo'<pre>';
echo'ENFIN !!!!!!!';
echo'<pre>';
