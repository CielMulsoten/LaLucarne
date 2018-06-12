<?php
namespace Controller;
class Pre_orderController extends Controller
{
    public function afficheAll(){
        $pre_order = $this -> getModel() -> getAllPre_orders();
        $cc = new CategoryController;
        $categories = $cc -> liste();
        
        $params = array(
            'pre_orders' => $pre_orders,
            'categories' => $categories,
        );
        return $this -> render('layout.html', 'admin.html', $params);
    }
}
