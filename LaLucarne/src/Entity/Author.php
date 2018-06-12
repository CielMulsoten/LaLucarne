<?php


namespace Entity;

class Author
{
	private $name;
	private $firstname;
    private $description;
	private $id_book;
	private $id_author;

	public function setName($arg)
	{
		$this -> name = $arg;
	}

	public function getName()
	{
		return $this -> name;
	}

    public function setDescription($arg)
	{
		$this -> description = $arg;
	}

	public function getDescription()
	{
		return $this -> description;
	}

	public function setFirstname($arg)
	{
		$this -> firstname = $arg;
	}

	public function getFirstname()
	{
		return $this -> firstname;
	}


	public function setId_book($arg)
	{
		$this -> id_book = $arg;
	}

	public function getId_book()
	{
		return $this -> id_book;
	}

	public function setId_author($arg)
	{
		$this -> id_author = $arg;
	}

	public function getId_author()
	{
		return $this -> id_author;
	}


}
