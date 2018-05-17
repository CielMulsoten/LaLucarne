<?php


namespace Entity;

class Book
{	
	private $id_book;
	private $title;
	private $author;
	private $description;

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

	public function setAuthor($arg)
	{
		$this -> author = $arg;
	}

	public function getAuthor()
	{
		return $this -> author;
	}

	public function setDescription($arg)
	{
		$this -> description = $arg;
	}

	public function getDescription()
	{
		return $this -> description;
	}
}
