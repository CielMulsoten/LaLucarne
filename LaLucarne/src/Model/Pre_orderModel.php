<?php

namespace Model;
use PDO;
class Pre_orderModel ewxtends Model
{
    public function getAllPre_orders(){
        return $this -> findAll();
    }
    
}
