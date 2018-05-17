<?php


namespace Entity;

class Users
{	
	private $id_users;
	private $name;
	private $firstname;
	private $bith;
	private $type;
	private $email;



	public function setId_users($arg)
	{
		$this -> id_users = $arg;
	}

	public function getId_users()
	{
		return $this -> id_users;
	}

	public function setName($arg)
	{
		$this -> name = $arg;
	}

	public function getName()
	{
		return $this -> name;
	}

	public function setFirstname($arg)
	{
		$this -> Firstname = $arg;
	}

	public function getFirstname()
	{
		return $this -> Firstname;
	}

	public function setBirth($arg)
	{
		$this -> birth = $arg;
	}

	public function getBirth()
	{
		return $this -> birth;
	}

	public function setType($arg)
	{
		$this -> type = $arg;
	}

	public function getType()
	{
		return $this -> type;
	}

	public function setEmail($arg)
	{
		$this -> email = $arg;
	}

	public function getEmail()
	{
		return $this -> email;
	}

}
