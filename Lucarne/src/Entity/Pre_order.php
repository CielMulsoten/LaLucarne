<?php
namespace Entity;

class Pre_order
{
    private $id_pre_order;
    private $id_book;
    private $title;
    private $id_author;
    private $release_date;
    private $price;
    
    public function setId_pre_order($arg)
    {
        $this -> id_pre_order = $arg;
    }
    public function getId_pre_order()
    {
        return $this -> id_pre_order;
    }
    
    public function setId_book($arg)
    {
        $this -> id_book = $arg;
    }
    public function getId_book()
    {
        return $this -> id_book;
    }
    
    public function setTitle($arg)
    {
        $this -> title = $arg;
    }
    public function getTitle()
    {
        return $this -> title;
    }
    
    public function setId_author($arg)
    {
        $this -> id_author = $arg;
    }
    public function getId_author()
    {
        return $this -> id_author;
    }
    
    public function setRelease_date($arg)
    {
        $this -> release_date = $arg;
    }
    public function getRelease_date()
    {
        return $this -> release_date;
    }
    
    public function setPrice($arg)
    {
        $this -> price = $arg;
    }
    public function getPrice()
    {
        return $this -> price;
    }
}
