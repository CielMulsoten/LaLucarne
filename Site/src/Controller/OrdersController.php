<?php
namespace Controller;
class OrdersController extends Controller
{
    public function afficheAll(){
        
        $orders = $this -> getModel() -> getAllOrders();
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'orders' => $orders,
            'categories' => $categories,
        );
        return $this -> render('admin.html', $params);
    }
    
    public function affiche($id){
        $order = $this -> getModel() -> getOrderById($id);
        
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'order' => $order,
            'categories' => $categories,
        );
        return $this -> render('admin.html', $params);
    }
    
    public function orderByUser($user){
        $orders = $this ->getModel() -> getOrderByUser($user);
        
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'orders' => $orders,
            'categories' => $categories,
        );
        
        return $this -> render('admin.html', $params);
    }
}
