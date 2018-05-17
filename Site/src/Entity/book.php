<?php


namespace Entity;

class Book
{	
	private $id_book;
	private $title;
	private $genre;
	private $author;
	private $date;
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

	public function setGenre($arg)
	{
		$this -> genre = $arg;
	}

	public function getGenre()
	{
		return $this -> genre;
	}

	public function setAuthor($arg)
	{
		$this -> author = $arg;
	}

	public function getAuthor()
	{
		return $this -> author;
	}

	public function setDate($arg)
	{
		$this -> date = $arg;
	}

	public function getDate()
	{
		return $this -> date;
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