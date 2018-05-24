<?php


namespace Entity;

class Donation
{	
	private $id_donation;
	private $id_users;
	private $amount;
	private $total;
	private $id_book;

	public function setId_donation($arg)
	{
		$this -> id_donation = $arg;
	}

	public function getId_donation()
	{
		return $this -> id_donation;
	}

	public function setId_users($arg)
	{
		$this -> id_users = $arg;
	}

	public function getId_users()
	{
		return $this -> id_users;
	}

	public function setamount($arg)
	{
		$this -> amount = $arg;
	}

	public function getamount()
	{
		return $this -> amount;
	}

	public function setTotal($arg)
	{
		$this -> total = $arg;
	}

	public function getTotal()
	{
		return $this -> total;
	}

	public function setId_book($arg)
	{
		$this -> id_book = $arg;
	}

	public function getId_book()
	{
		return $this -> id_book;
	}
}