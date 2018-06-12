<?php


namespace Entity;

class Book
{	
	private $id_book;
	private $title;
	private $gender;
	private $author;
	private $price;
	private $description;
    private $picture;
    private $active;

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

	public function setGender($arg)
	{
		$this -> gender = $arg;
	}

	public function getGender()
	{
		return $this -> gender;
	}

	public function setAuthor($arg)
	{
		$this -> author = $arg;
	}

	public function getAuthor()
	{
		return $this -> author;
	}

	public function setPrice($arg)
	{
		$this -> price = $arg;
	}

	public function getPrice()
	{
		return $this -> price;
	}

	public function setDescription($arg)
	{
		$this -> description = $arg;
	}

	public function getDescription()
	{
		return $this -> description;
	}
    
    public function setPicture($arg)
	{
		$this -> picture = $arg;
	}

	public function getPicture()
	{
		return $this -> picture;
	}
    
    public function setActive($arg)
	{
		$this -> active = $arg;
	}

	public function getActive()
	{
		return $this -> active;
	}

}
