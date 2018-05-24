<?php


namespace Entity;

class Orders
{	
	private $id_orders;
	private $id_users;
	private $quantity;

	public function setId_orders($arg)
	{
		$this -> id_orders = $arg;
	}

	public function getId_orders()
	{
		return $this -> id_orders;
	}

	public function setId_users($arg)
	{
		$this -> id_users = $arg;
	}

	public function getId_users()
	{
		return $this -> id_users;
	}

	public function setQuantity($arg)
	{
		$this -> quantity = $arg;
	}

	public function getQuantity()
	{
		return $this -> quantity;
	}

}